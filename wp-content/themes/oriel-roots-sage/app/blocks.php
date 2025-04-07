<?php
/**
 * Register ACF Blocks.
 */
function theme_blocks_init()
{
// Directory containing the blocks, within the 'resources/views' directory.
    $directory = resource_path('views') . '/blocks/';

// Iterate over the directory provided and look for blocks.
    $block_directory = new DirectoryIterator($directory);

    foreach ($block_directory as $block) {
        if ($block->isDir() && !$block->isDot()) {
            register_block_type($block->getRealpath());
        }
    }
}

add_action('init', __NAMESPACE__ . '\\theme_blocks_init');
