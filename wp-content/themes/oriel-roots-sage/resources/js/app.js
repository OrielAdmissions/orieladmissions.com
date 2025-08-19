import.meta.glob(['../images/**', '../fonts/**']);

/* ----------------------------------------------------------------------
   Alpine  (boot once, register what you need)
------------------------------------------------------------------------*/
import { Alpine, bootAlpineOnce }   from './modules/alpine/boot.js';

// global factories you want site-wide:
import registerDropdown             from './modules/alpine/modules/dropdown.js';
import registerCounter              from './modules/alpine/modules/counter.js';
import registerTextCycler           from './modules/alpine/modules/textCycler.js';
import registerFilterPosts          from './modules/alpine/modules/filterPosts.js';

// start Alpine once + register the factories
bootAlpineOnce(
  registerDropdown,
  registerCounter,
  registerTextCycler,
  registerFilterPosts,
);

/* Alpine exposed for console debugging (optional) */
window.Alpine = Alpine;

/* ----------------------------------------------------------------------
   Other feature modules
------------------------------------------------------------------------*/
import { initializeSwipers }         from './modules/swiper/swiperInit.js';
import { initAccordions }            from './modules/accordion';
import './modules/collegeGraph.js';  // self-initialising
import { gsapAnimations }            from './modules/gsap/gsapInit.js';
import { initFancybox }              from './modules/fancybox';
import { initIntersectionObserver }  from './modules/gsap/fadeIn.js';

/* ----------------------------------------------------------------------
   Kick off runtime code after DOM is ready
------------------------------------------------------------------------*/
document.addEventListener('DOMContentLoaded', () => {
  gsapAnimations();
  initFancybox();
  initAccordions();
  initializeSwipers();
  initIntersectionObserver();
});
