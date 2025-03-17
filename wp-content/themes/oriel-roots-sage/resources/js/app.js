import.meta.glob(['../images/**', '../fonts/**']);
import { initializeSwipers } from './modules/swiper/swiperInit.js';
import { initAccordions } from './modules/accordion';
import './modules/collegeGraph.js';
import { gsapAnimations, smootherInstance } from './modules/gsap/gsapInit.js';
import { initFancybox } from './modules/fancybox';
import { initIntersectionObserver } from './modules/gsap/fadeIn.js';

import { registerAlpineDirectives } from './modules/alpine';

registerAlpineDirectives();

// Initialize Features
document.addEventListener('DOMContentLoaded', () => {
  gsapAnimations();
  initFancybox(smootherInstance);
  initAccordions();
  initializeSwipers();
  initIntersectionObserver();
});
