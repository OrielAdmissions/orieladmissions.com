import { gsap } from './gsapConfig.js';
import { initImageGrow } from './imageGrow.js';
import { initStickyHeader } from './stickyHeader.js';
import { initPinnedElements } from './pinnedElements.js';
import { initSmoothScroll, smootherInstance } from './smoothScroll.js';
import { initTeamCards } from './teamCards.js';
import { initScrollSpy } from './scrollSpy.js';
import { pageLoaderInit } from './pageLoader.js';

export function gsapAnimations() {
  initSmoothScroll();
  initStickyHeader();
  // pageLoaderInit();
  let mm = gsap.matchMedia();

  mm.add('(min-width: 1024px)', () => {
    console.log('Desktop Animations Initialized');
    initPinnedElements();
  });

  mm.add('(min-width: 768px)', () => {
    console.log('Tablet Animations Initialized');

    initImageGrow();

    if (document.body.classList.contains('team')) {
      initTeamCards();
    }

    if (document.body.classList.contains('insights')) {
      initScrollSpy();
    }
  });
}

export { smootherInstance };
