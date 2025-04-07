<?php
namespace App;

/**
 * Callback for rendering Blade templates.
 * Name of the Blade template at resources/views/blocks/{title}.blade.php
 */
function blade_render_callback($block, string $content = '', bool $is_preview = false, int $post_id = 0)
{
    $slug = str_replace('acf' . '/', '', $block['name']);
    $block['slug'] = $slug;

    echo \Roots\view('blocks.' . $block['slug'] . '.' . $block['slug'], ['block' => $block])->render();
}
