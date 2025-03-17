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
