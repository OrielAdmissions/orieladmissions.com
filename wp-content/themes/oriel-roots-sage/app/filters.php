<?php

/**
 * Theme filters.
 */

namespace App;

/**
 * Add "… Continued" to the excerpt.
 *
 * @return string
 */
add_filter('excerpt_more', function () {
    return sprintf(' &hellip; <a href="%s">%s</a>', get_permalink(), __('Continued', 'sage'));
});

add_action('wp_ajax_filterPosts', __NAMESPACE__ . '\\filterPosts');
add_action('wp_ajax_nopriv_filterPosts', __NAMESPACE__ . '\\filterPosts');
add_action('init',  __NAMESPACE__ . '\\register_team_member_cpt');
add_action('init', __NAMESPACE__ . '\\register_colleges_cpt');
add_action('init', __NAMESPACE__ . '\\register_faq_cpt');
add_action('template_redirect', function() {
    if (is_category() || is_tag() || is_date()) {
        global $wp_query;
        $wp_query->set_404();
    }
});
