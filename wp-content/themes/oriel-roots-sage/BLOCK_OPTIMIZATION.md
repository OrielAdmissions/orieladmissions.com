# Block JavaScript Optimization Guide

This guide explains how to optimize custom block JavaScript files for better code splitting and performance following WordPress best practices.

## Overview

The optimization system implements:

1. **Code Splitting**: Each block's JavaScript is bundled separately
2. **Lazy Loading**: Scripts are only loaded when blocks are present on the page
3. **WordPress Standards**: Proper use of `viewScript` and dependency management
4. **Performance**: Reduced initial bundle size and improved page load times

## How It Works

### 1. Vite Configuration (`vite.config.js`)

The Vite config automatically discovers all `block.js` files and creates separate entry points for each:

```javascript
// Dynamically find all block JavaScript files
const blockJsFiles = glob.sync('resources/views/blocks/*/block.js').reduce((entries, file) => {
  const blockName = path.basename(path.dirname(file));
  entries[`blocks/${blockName}`] = file;
  return entries;
}, {});
```

This creates separate bundles like:
- `blocks/home-hero.js`
- `blocks/faqs.js` 
- `blocks/testimonial-slider.js`

### 2. Block Registration (`app/blocks.php`)

The blocks.php file has been enhanced to:

- Register WordPress scripts for each block
- Only enqueue scripts for blocks actually used on the current page
- Use proper WordPress dependency management

```php
// Register the script for this specific block
wp_register_script(
    "block-{$block_name}-script",
    Vite::asset("blocks/{$block_name}.js"),
    ['wp-element', 'wp-blocks'],
    null,
    true
);
```

### 3. Block Loader System (`resources/js/modules/blockLoader.js`)

A centralized system that:

- Scans the page for blocks on load
- Dynamically imports block scripts only when needed
- Prevents duplicate loading
- Provides debugging and manual control capabilities

### 4. Block JSON Configuration

Each block's `block.json` now includes:

```json
{
  "viewScript": [ "file:./block.js" ]
}
```

This tells WordPress to load the script on the frontend when the block is present.

## Creating Optimized Blocks

### 1. Block JavaScript Structure

Each block JavaScript file should export a default function:

```javascript
// resources/views/blocks/my-block/block.js
import { gsap } from '@scripts/modules/gsap/gsapConfig';

export default function myBlockInit(el) {
  console.log('✅ myBlockInit running for:', el);
  
  // Block-specific functionality here
  const button = el.querySelector('.my-button');
  if (button) {
    button.addEventListener('click', () => {
      gsap.to(el, { rotation: 360, duration: 1 });
    });
  }
}
```

### 2. Block JSON Configuration

```json
{
  "name": "acf/my-block",
  "title": "My Block",
  "description": "An optimized block",
  "style": [ "file:./style.css" ],
  "viewScript": [ "file:./block.js" ],
  "acf": {
    "renderCallback": "\\App\\blade_render_callback",
    "postTypes": ["page"],
    "blockVersion": 3
  }
}
```

### 3. Register with Block Loader

Add your block to the block loader registration in `blockLoader.js`:

```javascript
// Register your new block
blockLoader.register('my-block', () => import('@blocks/my-block/block.js'));
```

### 4. Update PHP Registration

Add your block to the `$blocks_with_js` array in `app/blocks.php`:

```php
$blocks_with_js = [
    'arc-slider',
    'college-insights', 
    'faqs',
    'featured-video',
    'home-college-graph',
    'home-hero',
    'team',
    'testimonial-slider',
    'my-block' // Add your new block here
];
```

## Best Practices

### 1. Keep Block Scripts Focused
- Only include code that's specific to that block
- Import shared utilities from common modules
- Avoid duplicating code across blocks

### 2. Use Proper Dependencies
- Import shared libraries like GSAP, Alpine, or Swiper from centralized modules
- Let Vite handle the bundling and tree-shaking

### 3. Error Handling
- Always include error boundaries in your block initialization
- Use console.log for debugging (will be stripped in production)

### 4. Performance Considerations
- Use dynamic imports for heavy dependencies that aren't always needed
- Consider intersection observers for blocks below the fold
- Lazy load expensive animations or complex interactions

## Debugging

### Browser Console Commands

```javascript
// Check if a block is loaded
window.blockLoader.isLoaded('home-hero');

// Manually trigger loading
window.blockLoader.triggerLoad('my-block');

// View all registered blocks
console.log(window.blockLoader.blockRegistry);
```

### Development Tips

1. **Use browser dev tools** to see network requests and verify code splitting
2. **Check the Console** for block loading confirmations
3. **Use Performance tab** to measure loading improvements
4. **Lighthouse** can help measure overall performance impact

## Migration from Legacy System

### Before (All blocks in app.js)
```javascript
// Old way - everything bundled together
import homeHeroInit from '@blocks/home-hero/block.js';
import faqsInit from '@blocks/faqs/block.js';

// Initialize everything on page load
document.addEventListener('DOMContentLoaded', () => {
  document.querySelectorAll('[data-acf-block-name="acf/home-hero"]').forEach(homeHeroInit);
  document.querySelectorAll('[data-acf-block-name="acf/faqs"]').forEach(faqsInit);
});
```

### After (Code-split and lazy-loaded)
```javascript
// New way - automatic detection and lazy loading
// Block loader handles everything automatically
// Scripts are split into separate bundles
// Only loaded when blocks are present on page
```

## Benefits

1. **Reduced Initial Bundle Size**: Core app.js is smaller
2. **Faster Page Loads**: Only necessary code is loaded
3. **Better Caching**: Block scripts can be cached independently
4. **Improved Developer Experience**: Clear separation of concerns
5. **WordPress Compliance**: Follows WordPress block development standards

## Troubleshooting

### Common Issues

1. **Block script not loading**: Check that the block is registered in `blockLoader.js`
2. **Dependencies missing**: Ensure shared modules are properly imported
3. **Vite build errors**: Check that `glob` package is installed
4. **Console errors**: Verify block JavaScript exports a default function

### Checking Build Output

After running `npm run build`, check the `public/build` directory for:
- Individual block bundles: `blocks/block-name-[hash].js`
- Manifest entries for each block
- Proper code splitting in the browser dev tools
