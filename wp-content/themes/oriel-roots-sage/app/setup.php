<?php

/**
 * Theme setup.
 */

namespace App;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Vite;

/**
 * Inject styles into the block editor.
 *
 * @return array
 */
add_filter('block_editor_settings_all', function ($settings) {
    $style = Vite::asset('resources/css/editor.css');

    $settings['styles'][] = [
        'css' => Vite::isRunningHot()
            ? "@import url('{$style}')"
            : Vite::content('resources/css/editor.css'),
    ];

    return $settings;
});

/**
 * Inject scripts into the block editor.
 *
 * @return void
 */
add_filter('admin_head', function () {
    if (!get_current_screen()?->is_block_editor()) {
        return;
    }

    $dependencies = json_decode(Vite::content('_editor.deps.json'));

    foreach ($dependencies as $dependency) {
        if (!wp_script_is($dependency)) {
            wp_enqueue_script($dependency);
        }
    }

    echo Vite::withEntryPoints([
        'resources/js/editor.js',
    ])->toHtml();
});

/**
 * Add Vite's HMR client to the block editor.
 *
 * @return void
 */
add_action('enqueue_block_assets', function () {
    if (!is_admin() || !get_current_screen()?->is_block_editor()) {
        return;
    }

    if (!Vite::isRunningHot()) {
        return;
    }

    $script = sprintf(
        <<<'JS'
        window.__vite_client_url = '%s';

        window.self !== window.top && document.head.appendChild(
            Object.assign(document.createElement('script'), { type: 'module', src: '%s' })
        );
        JS,
        untrailingslashit(Vite::asset('')),
        Vite::asset('@vite/client')
    );

    wp_add_inline_script('wp-blocks', $script);
});

/**
 * Use the generated theme.json file.
 *
 * @return string
 */
add_filter('theme_file_path', function ($path, $file) {
    return $file === 'theme.json'
        ? public_path('build/assets/theme.json')
        : $path;
}, 10, 2);

/**
 * Register the initial theme setup.
 *
 * @return void
 */
add_action('after_setup_theme', function () {
    /**
     * Disable full-site editing support.
     *
     * @link https://wptavern.com/gutenberg-10-5-embeds-pdfs-adds-verse-block-color-options-and-introduces-new-patterns
     */
//    remove_theme_support('block-templates');

    /**
     * Register the navigation menus.
     *
     * @link https://developer.wordpress.org/reference/functions/register_nav_menus/
     */
    register_nav_menus([
        'primary_navigation' => __('Primary Navigation', 'sage'),
    ]);

    /**
     * Disable the default block patterns.
     *
     * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#disabling-the-default-block-patterns
     */
//    remove_theme_support('core-block-patterns');

    /**
     * Enable plugins to manage the document title.
     *
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#title-tag
     */
    add_theme_support('title-tag');

    /**
     * Enable post thumbnail support.
     *
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support('post-thumbnails');

    /**
     * Enable responsive embed support.
     *
     * @link https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-support/#responsive-embedded-content
     */
    add_theme_support('responsive-embeds');

    /**
     * Enable HTML5 markup support.
     *
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#html5
     */
    add_theme_support('html5', [
        'caption',
        'comment-form',
        'comment-list',
        'gallery',
        'search-form',
        'script',
        'style',
    ]);

    /**
     * Enable selective refresh for widgets in customizer.
     *
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#customize-selective-refresh-widgets
     */
    add_theme_support('customize-selective-refresh-widgets');
}, 20);

/**
 * Register the theme sidebars.
 *
 * @return void
 */
add_action('widgets_init', function () {
    $config = [
        'before_widget' => '<section class="widget %1$s %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ];

    register_sidebar(
        [
            'name' => __('Primary', 'sage'),
            'id' => 'sidebar-primary',
        ] + $config
    );

    register_sidebar(
        [
            'name' => __('Footer', 'sage'),
            'id' => 'sidebar-footer',
        ] + $config
    );
});

// Register Navigation Menu with Custom Walker
register_nav_menus([
    'primary_navigation' => __('Primary Navigation', 'sage'),
]);

//add_filter( 'acf/settings/show_admin', function () {
//   if ( isset( $_ENV['PANTHEON_ENVIRONMENT'] ) ) {
//       return false;
//   } else {
//       return current_user_can( 'manage_options' );
//   }
//} );

/**
 * Modifies fields used for code injection before displaying them
 *
 * @param array $field
 *
 * @return array
 */
function prepare_code_injection_field(array $field): array
{
    $name = explode('_', $field['_name']);
    $instructions = 'Enter code to inject';
    if ('array' == gettype($name) && sizeof($name) >= 3) {
        $location = $name[1];
        switch ($name[0]) {
            case 'opening':
                $instructions .= " after <code>&lt;$location&gt;</code>";
                break;

            case 'closing':
                $instructions .= " before <code>&lt;/$location&gt;</code>";
                break;
        }

        $screen = get_current_screen();
        if ('object' == gettype($screen)) {
            if ('themes' == $screen->parent_base) {
                $instructions .= ' on all pages';
            } else {
                $post = get_post_type_object($screen->post_type);
                if ('object' == gettype($post)) {
                    $instructions .= ' on this ' . strtolower($post->labels->singular_name);
                }
            }
        }
        $instructions .= '.';
    }

    $field['instructions'] = $instructions;

    return $field;
}

add_filter('acf/prepare_field/name=opening_head_injections', __NAMESPACE__ . '\\prepare_code_injection_field');
add_filter('acf/prepare_field/name=closing_head_injections', __NAMESPACE__ . '\\prepare_code_injection_field');
add_filter('acf/prepare_field/name=opening_body_injections', __NAMESPACE__ . '\\prepare_code_injection_field');
add_filter('acf/prepare_field/name=closing_body_injections', __NAMESPACE__ . '\\prepare_code_injection_field');

/**
 * Returns text display for post object results to include template name
 * to help editors distinguish between pages
 *
 * @param $text
 * @param $post
 * @param $field
 * @param $post_id
 *
 * @return string
 */
function append_page_template($text, $post, $field, $post_id): string
{
    $template_name = get_post_meta($post->ID, '_wp_page_template', true);
    if ($template_name) {
        $template_name = wp_get_theme()->get_page_templates()[$template_name];
        if (empty($template_name)) {
            $template_name = 'Default';
        }
        $text .= " (Template: {$template_name})";
    }

    return $text;
}

if (file_exists(get_template_directory() . '/app/helpers.php')) {
    require_once get_template_directory() . '/app/helpers.php';
}

// Register Custom Post Type: Case Studies


// Hook into the 'init' action
add_action('init', function () {
    $labels = array(
        'name' => _x('Case Studies', 'Post Type General Name', 'oriel'),
        'singular_name' => _x('Case Study', 'Post Type Singular Name', 'oriel'),
        'menu_name' => __('Case Studies', 'oriel'),
        'name_admin_bar' => __('Case Study', 'oriel'),
        'archives' => __('Case Study Archives', 'oriel'),
        'attributes' => __('Case Study Attributes', 'oriel'),
        'parent_item_colon' => __('Parent Case Study:', 'oriel'),
        'all_items' => __('All Case Studies', 'oriel'),
        'add_new_item' => __('Add New Case Study', 'oriel'),
        'add_new' => __('Add New', 'oriel'),
        'new_item' => __('New Case Study', 'oriel'),
        'edit_item' => __('Edit Case Study', 'oriel'),
        'update_item' => __('Update Case Study', 'oriel'),
        'view_item' => __('View Case Study', 'oriel'),
        'view_items' => __('View Case Studies', 'oriel'),
        'search_items' => __('Search Case Study', 'oriel'),
        'not_found' => __('Not found', 'oriel'),
        'not_found_in_trash' => __('Not found in Trash', 'oriel'),
        'featured_image' => __('Featured Image', 'oriel'),
        'set_featured_image' => __('Set featured image', 'oriel'),
        'remove_featured_image' => __('Remove featured image', 'oriel'),
        'use_featured_image' => __('Use as featured image', 'oriel'),
        'insert_into_item' => __('Insert into case study', 'oriel'),
        'uploaded_to_this_item' => __('Uploaded to this case study', 'oriel'),
        'items_list' => __('Case studies list', 'oriel'),
        'items_list_navigation' => __('Case studies list navigation', 'oriel'),
        'filter_items_list' => __('Filter case studies list', 'oriel'),
    );

    $args = array(
        'label' => __('Case Study', 'oriel'),
        'description' => __('Showcasing our case studies.', 'oriel'),
        'labels' => $labels,
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'custom-fields'),
        'taxonomies' => array('category', 'post_tag'), // Add categories and tags if needed
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-portfolio', // WordPress Dashicon for aesthetics
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'post',
        'show_in_rest' => true, // Enables Gutenberg support
    );

    register_post_type('case_study', $args);
});


register_block_type('vendor/team_card_block', [
    'render_callback' => function ($attributes, $content) {
        return view('blocks/team_card_block', compact('attributes', 'content'));
    },
]);


add_action('widgets_init', function () {
    $menu_widgets = [
        'about' => 'About',
        'admissions-counseling' => 'Admissions Counseling',
        'resources' => 'Resources'
    ];

    foreach ($menu_widgets as $slug => $name) {
        register_sidebar([
            'name' => "Menu Widget Area - $name",
            'id' => "menu-widget-$slug",
            'before_widget' => '<div class="menu-widget">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
        ]);
    }
});
