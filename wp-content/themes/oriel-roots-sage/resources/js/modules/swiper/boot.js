// resources/js/modules/swiper/bootSwipers.js
let hasBooted = false;
const registry  = new Set();          // stores the init-functions we want to run

/**
 * Call once from each entry-point or block that needs a Swiper.
 * Pass it the init-functions you want on that page.
 *
 *   bootSwipers(initStorySwiper, initCardSlider)
 */
export function bootSwipers(...fns) {
  fns.forEach(fn => registry.add(fn));   // collect without running yet

  if (hasBooted) return;                 // already pinned to DOM ready
  hasBooted = true;

  /* wait for DOM, then run every collected Swiper init */
  document.addEventListener('DOMContentLoaded', () => {
    registry.forEach(fn => fn());
  });
}
