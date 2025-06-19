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

    // Build the ID attribute
    $block_id = !empty($block['anchor']) ? $block['anchor'] : 'block-' . $block['id'];

    // Build the class attribute
    $classes = ['acf-block', 'acf-' . $slug];

    if (!empty($block['align'])) {
        $classes[] = 'align' . $block['align'];
    }

    if (!empty($block['className'])) {
        $classes[] = $block['className'];
    }

    if (!empty($block['mode'])) {
        $classes[] = 'is-mode-' . $block['mode'];
    }

    if (!empty($block['align_text'])) {
        $classes[] = 'has-text-align-' . $block['align_text'];
    }

    if (!empty($block['align_content'])) {
        $classes[] = 'is-vertically-aligned-' . $block['align_content'];
    }

    $block['classes'] = implode(' ', $classes);
    $block['block_id'] = $block_id;

    echo '<div id="' . esc_attr($block_id) . '" class="' . esc_attr($block['classes']) . '" data-acf-block-name="' . esc_attr($block['name']) . '">';
    echo \Roots\view('blocks.' . $slug . '.' . $slug, ['block' => $block])->render();
    echo '</div>';
}
