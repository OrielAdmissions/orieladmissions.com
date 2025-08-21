import { defineConfig } from 'vite'
import tailwindcss from '@tailwindcss/vite';
import laravel from 'laravel-vite-plugin'
import { wordpressPlugin, wordpressThemeJson } from '@roots/vite-plugin';
import { glob } from 'glob';
import path from 'path';

// Dynamically find all block JavaScript files
const blockJsFiles = glob.sync('resources/views/blocks/*/block.js').reduce((entries, file) => {
  const blockName = path.basename(path.dirname(file));
  entries[`blocks/${blockName}`] = file;
  return entries;
}, {});

export default defineConfig({
  base: '/wp-content/themes/oriel-roots-sage/public/build/',
  plugins: [
    tailwindcss(),
    laravel({
      input: {
        // Main entry points
        'app': 'resources/js/app.js',
        'editor': 'resources/js/editor.js',
        'app-css': 'resources/css/app.css',
        'editor-css': 'resources/css/editor.css',
        // Block-specific scripts for code splitting
        ...blockJsFiles
      },
      refresh: true,
    }),

    wordpressPlugin(),

    // Generate the theme.json file in the public/build/assets directory
    // based on the Tailwind config and the theme.json file from base theme folder
    wordpressThemeJson({
      disableTailwindColors: false,
      disableTailwindFonts: false,
      disableTailwindFontSizes: false,
    }),
  ],
  build: {
    rollupOptions: {
      output: {
        // Ensure block scripts are split properly
        manualChunks: {
          // Group shared dependencies
          'vendor-gsap': ['gsap'],
          'vendor-alpine': ['alpinejs'],
          'vendor-swiper': ['swiper'],
        },
      },
    },
  },
  resolve: {
    alias: {
      '@scripts': '/resources/js',
      '@styles': '/resources/css',
      '@fonts': '/resources/fonts',
      '@images': '/resources/images',
      '@blocks': '/resources/views/blocks',
    },
  },
})
