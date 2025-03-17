import { gsap, ScrollSmoother } from './gsapConfig.js';

export let smootherInstance = null;

export function initSmoothScroll() {
  let mm = gsap.matchMedia();

  mm.add('(min-width: 1024px)', () => {
    // Save the smoother instance for later use
    smootherInstance = ScrollSmoother.create({
      smooth: 1.5,
      effects: true,
      normalizeScroll: true,
    });
  });
}
