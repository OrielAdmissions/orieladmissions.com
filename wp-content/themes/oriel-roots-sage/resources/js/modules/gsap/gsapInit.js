import { gsap } from './gsapConfig.js';
import { initImageGrow } from './imageGrow.js';
import { initStickyHeader } from './stickyHeader.js';
import { initPinnedElements } from './pinnedElements.js';
// import { initSmoothScroll, smootherInstance } from './smoothScroll.js';
import { initTeamCards } from './teamCards.js';
import { initScrollSpy } from './scrollSpy.js';

export function gsapAnimations() {
  initStickyHeader();

  let mm = gsap.matchMedia();

  mm.add('(min-width: 1024px)', () => {
    initPinnedElements();
  });



  mm.add('(min-width: 768px)', () => {

    initImageGrow();

    if (document.body.classList.contains('team')) {
      initTeamCards();
    }

    if (document.body.classList.contains('insights')) {
      initScrollSpy();
    }
  });
}
