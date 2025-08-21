<?php
/**
 * blocks.php
 * Register ACF Blocks with optimized script loading.
 */

use Illuminate\Support\Facades\Vite;

/**
 * Register theme blocks with proper script dependencies
 */
function theme_blocks_init()
{
    // Directory containing the blocks, within the 'resources/views' directory.
    $directory = resource_path('views') . '/blocks/';

    // List of blocks that have JavaScript files included in the build
    $blocks_with_js = [
        'arc-slider',
        'college-insights', 
        'faqs',
        'featured-video',
        'home-college-graph',
        'home-hero',
        'team',
        'testimonial-slider'
    ];

    // Iterate over the directory provided and look for blocks.
    $block_directory = new DirectoryIterator($directory);

    foreach ($block_directory as $block) {
        if ($block->isDir() && !$block->isDot()) {
            $block_path = $block->getRealpath();
            $block_name = $block->getFilename();
            
            // Register script only for blocks that are included in the Vite build
            if (in_array($block_name, $blocks_with_js)) {
                wp_register_script(
                    "block-{$block_name}-script",
                    Vite::asset("resources/views/blocks/{$block_name}/block.js"),
                    ['wp-element', 'wp-blocks'],
                    null,
                    true
                );
            }
            
            register_block_type($block_path);
        }
    }
}

/**
 * Optimize script loading by conditionally loading block scripts
 */
function optimize_block_scripts()
{
    // Get the current post content
    global $post;
    
    if (!$post) {
        return;
    }
    
    // Parse blocks from content
    $blocks = parse_blocks($post->post_content);
    $used_blocks = [];
    
    // Recursively find all block types used
    $extract_block_types = function($blocks) use (&$extract_block_types, &$used_blocks) {
        foreach ($blocks as $block) {
            if (!empty($block['blockName'])) {
                $used_blocks[] = $block['blockName'];
            }
            if (!empty($block['innerBlocks'])) {
                $extract_block_types($block['innerBlocks']);
            }
        }
    };
    
    $extract_block_types($blocks);
    
    // Only enqueue scripts for blocks actually used on this page
    foreach ($used_blocks as $block_name) {
        if (strpos($block_name, 'acf/') === 0) {
            $block_slug = str_replace('acf/', '', $block_name);
            $script_handle = "block-{$block_slug}-script";
            
            if (wp_script_is($script_handle, 'registered')) {
                wp_enqueue_script($script_handle);
            }
        }
    }
}

add_action('init', __NAMESPACE__ . '\\theme_blocks_init');
add_action('wp_enqueue_scripts', __NAMESPACE__ . '\\optimize_block_scripts');
