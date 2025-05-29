<?php
namespace App;

/**
 * Callback for rendering Blade templates.
 * Name of the Blade template at resources/views/blocks/{title}.blade.php
 */
function blade_render_callback($block, string $content = '', bool $is_preview = false, int $post_id = 0)
{
    $slug = str_replace('acf/', '', $block['name']);
    $block['slug'] = $slug;

    // Render the block template with a wrapper div for scoped JS targeting
    echo '<div data-acf-block-name="' . esc_attr($block['name']) . '">';
    echo \Roots\view('blocks.' . $slug . '.' . $slug, ['block' => $block])->render();
    echo '</div>';
}
