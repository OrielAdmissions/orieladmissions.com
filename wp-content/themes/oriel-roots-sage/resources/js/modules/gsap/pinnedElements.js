import { gsap, ScrollTrigger } from './gsapConfig.js';

export function initPinnedElements() {
  let mm = gsap.matchMedia();

  mm.add('(min-width: 1024px)', () => {
    let pinned = gsap.utils.toArray('.pin-content');
    let header = document.querySelector('#sticky-header');
    let headerHeight = 80;

    pinned.forEach((pin) => {
      let container = pin.closest('section');
      let endTrigger = container.querySelector('.long-content'); // Adjust to target the content

      ScrollTrigger.create({
        trigger: pin,
        pin: true,
        start: `top ${headerHeight}px`,
        endTrigger: endTrigger, // Set the scrolling end trigger
        end: () => `bottom ${pin.offsetHeight + headerHeight}px`,
        pinSpacing: false,
        invalidateOnRefresh: true,
      });
    });

    let pinnedTrigger;
    document.addEventListener('accordion:toggled', () => {
      ScrollTrigger.refresh();
      //   const openCount = document.querySelectorAll('details[open]').length;
      //
      //   if (openCount > 0 && !pinnedTrigger) {
      //     pinnedTrigger = ScrollTrigger.create({
      //       trigger: '.faqStickyText',
      //       pin: true,
      //       markers: true,
      //     });
      //   } else if (openCount === 0 && pinnedTrigger) {
      //     pinnedTrigger.kill();
      //     pinnedTrigger = null;
      //   }
    });
  });
}
