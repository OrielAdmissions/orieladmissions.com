<?php

namespace App;

use WP_Query;

function get_picture(array $images = [], string $size = 'full', bool $icon = false, array $atts = []): string
{
    if (is_array($images) && !empty($images)) {
        $html = [];
        $has_default = false;

        foreach ($images as $image) {
            $mime = get_post_mime_type($image);

            // Get the alt text from the media library
            $alt = get_post_meta($image, '_wp_attachment_image_alt', true);
            $merged_atts = array_merge(['alt' => $alt], $atts);

            if (str_contains($mime, 'webp') && count($images) > 1) {
                $webp = wp_get_attachment_image($image, $size, $icon, $merged_atts);
                preg_match_all('/[a-z]+=".*"/iU', $webp, $webp_atts);

                foreach ($webp_atts[0] as $webp_att) {
                    $att_name = stristr($webp_att, '=', true);

                    if ($att_name === 'alt' && str_contains($webp_att, '""')) {
                        // Remove empty `alt` attribute
                        $webp = str_replace($webp_att, '', $webp);
                    } elseif (!in_array($att_name, ['src', 'sizes', 'width', 'height'])) {
                        $webp = str_replace($webp_att, '', $webp);
                    }
                }

                array_unshift($html, str_replace(['<img', 'src='], ['<source type="' . $mime . '"', 'srcset='], $webp));
            } elseif (!$has_default) {
                $html[] = wp_get_attachment_image($image, $size, $icon, $merged_atts);
                $has_default = true;
            }
        }

        return '<picture>' . join('', $html) . '</picture>';
    } else {
        // Fallback if $images is not an array
        $alt = get_post_meta($images, '_wp_attachment_image_alt', true);
        $merged_atts = array_merge(['alt' => $alt], $atts);
        return wp_get_attachment_image($images, $size, $icon, $merged_atts);
    }
}

function custom_pagination($query = null)
{
    if (!$query) {
        global $wp_query;
        $query = $wp_query;
    }

    // ✅ Ensure $query is an object
    if (is_array($query)) {
        return; // Bail out if it's an array (or handle differently if needed)
    }

    if (!($query instanceof WP_Query)) {
        return; // Exit if not a WP_Query instance
    }

    $big = 999999999; // Unique number for pagination replacement

    $pages = paginate_links([
        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $query->max_num_pages, // Now safe
        'prev_text' => get_svg('images.chevron-left', 'size-4 inline-block'),
        'next_text' => get_svg('images.chevron-right', 'size-4 inline-block'),
        'type' => 'array' // Returns an array for flexibility
    ]);

    if ($pages) {
        echo '<ul class="pagination">';
        foreach ($pages as $page) {
            echo '<li class="page-item">' . $page . '</li>';
        }
        echo '</ul>';
    }
}


function filterPosts()
{
    $response = ['posts' => ''];
    $limit = intval($_POST['limit'] ?? 8);
    $page = intval($_POST['page'] ?? 1);
    $post_type = sanitize_text_field($_POST['post_type'] ?? 'post');

    $filter_args = [
        'post_status' => 'publish',
        'post_type' => $post_type,
        'posts_per_page' => $limit,
        'paged' => $page,
    ];

    if (!empty($_POST['category'])) {
        // If you're using the built-in categories:
        $filter_args['cat'] = intval($_POST['category']);

        // OR, if using a custom taxonomy (adjust taxonomy slug accordingly):
        // $filter_args['tax_query'] = [[
        //   'taxonomy' => 'custom_taxonomy',
        //   'field'    => 'term_id',
        //   'terms'    => intval($_POST['category']),
        // ]];
    }

    $filter_query = new WP_Query($filter_args);
    $max_pages = $filter_query->max_num_pages;

    if ($filter_query->have_posts()) :
        while ($filter_query->have_posts()) :
            $filter_query->the_post();
            // Render the proper partial based on post type.
            $response['posts'] .= view('partials.content-' . $post_type, ['post' => get_post()])->render();
        endwhile;
        wp_reset_postdata();
    endif;

    $response['max_pages'] = $max_pages;
    echo json_encode($response);
    wp_die();
}




