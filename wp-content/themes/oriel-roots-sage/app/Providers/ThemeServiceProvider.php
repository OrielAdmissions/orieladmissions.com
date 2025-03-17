<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\File;
use Roots\Acorn\Sage\SageServiceProvider;

use function Roots\view;

class ThemeServiceProvider extends SageServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        parent::register();
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        // ✅ Auto-register all blocks inside /resources/blocks/
        $blocksPath = resource_path('blocks');

        if (File::exists($blocksPath)) {
            collect(File::directories($blocksPath))->each(function ($path) {
                $blockName = basename($path);

                register_block_type($path, [
                    'render_callback' => function ($attributes, $content) use ($blockName) {
                        return view("blocks.{$blockName}", [
                            'attributes' => $attributes,
                            'content' => $content
                        ])->render();
                    },
                ]);
            });
        }
    }
}
