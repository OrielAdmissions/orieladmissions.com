/**
 * Block Loader System
 * 
 * Dynamically loads block-specific JavaScript only when blocks are present on the page.
 * Follows WordPress best practices for code splitting and performance optimization.
 */

class BlockLoader {
  constructor() {
    this.loadedBlocks = new Set();
    this.blockRegistry = new Map();
    this.init();
  }

  init() {
    // Wait for DOM to be ready
    if (document.readyState === 'loading') {
      document.addEventListener('DOMContentLoaded', () => this.loadBlocks());
    } else {
      this.loadBlocks();
    }
  }

  /**
   * Register a block loader function
   * @param {string} blockName - The block name (e.g., 'home-hero')
   * @param {Function} loader - Function that returns a Promise resolving to the block module
   */
  register(blockName, loader) {
    this.blockRegistry.set(blockName, loader);
  }

  /**
   * Scan the page for blocks and load their scripts
   */
  async loadBlocks() {
    const blockElements = document.querySelectorAll('[data-acf-block-name]');
    const blocksToLoad = new Set();

    // Identify which blocks are present
    blockElements.forEach(element => {
      const blockName = element.dataset.acfBlockName.replace('acf/', '');
      if (!this.loadedBlocks.has(blockName) && this.blockRegistry.has(blockName)) {
        blocksToLoad.add(blockName);
      }
    });

    // Load blocks in parallel
    const loadPromises = Array.from(blocksToLoad).map(blockName => 
      this.loadBlock(blockName)
    );

    await Promise.allSettled(loadPromises);
  }

  /**
   * Load a specific block's JavaScript
   * @param {string} blockName - The block name to load
   */
  async loadBlock(blockName) {
    if (this.loadedBlocks.has(blockName)) {
      return;
    }

    try {
      const loader = this.blockRegistry.get(blockName);
      if (!loader) {
        console.warn(`No loader registered for block: ${blockName}`);
        return;
      }

      console.log(`🔄 Loading block: ${blockName}`);
      
      // Load the block module
      const module = await loader();
      
      // Get the default export (block initialization function)
      const blockInit = module.default || module;
      
      if (typeof blockInit === 'function') {
        // Find all instances of this block and initialize them
        const blockElements = document.querySelectorAll(`[data-acf-block-name="acf/${blockName}"]`);
        blockElements.forEach(element => {
          try {
            blockInit(element);
          } catch (error) {
            console.error(`Error initializing block ${blockName}:`, error);
          }
        });
        
        console.log(`✅ Block loaded successfully: ${blockName}`);
      } else {
        console.error(`Block ${blockName} does not export a valid initialization function`);
      }

      this.loadedBlocks.add(blockName);
    } catch (error) {
      console.error(`Failed to load block ${blockName}:`, error);
    }
  }

  /**
   * Manually trigger loading for a specific block (useful for dynamic content)
   * @param {string} blockName - The block name to load
   */
  async triggerLoad(blockName) {
    await this.loadBlock(blockName);
  }

  /**
   * Check if a block has been loaded
   * @param {string} blockName - The block name to check
   * @returns {boolean}
   */
  isLoaded(blockName) {
    return this.loadedBlocks.has(blockName);
  }
}

// Create global instance
const blockLoader = new BlockLoader();

// Register all available blocks with dynamic imports
// This creates code splitting points for each block
// Auto-discovered blocks with JavaScript files:
blockLoader.register('arc-slider', () => import('@blocks/arc-slider/block.js'));
blockLoader.register('college-insights', () => import('@blocks/college-insights/block.js'));
blockLoader.register('faqs', () => import('@blocks/faqs/block.js'));
blockLoader.register('featured-video', () => import('@blocks/featured-video/block.js'));
blockLoader.register('home-college-graph', () => import('@blocks/home-college-graph/block.js'));
blockLoader.register('home-hero', () => import('@blocks/home-hero/block.js'));
blockLoader.register('team', () => import('@blocks/team/block.js'));
blockLoader.register('testimonial-slider', () => import('@blocks/testimonial-slider/block.js'));

// When adding new blocks with JavaScript:
// 1. Create your block.js file in the block directory
// 2. Add the registration here: blockLoader.register('block-name', () => import('@blocks/block-name/block.js'));
// 3. Add "viewScript": [ "file:./block.js" ] to your block.json

// Make it available globally for debugging and manual control
window.blockLoader = blockLoader;

export default blockLoader;
