import { gsap, ScrollTrigger, ScrollToPlugin } from './gsapConfig.js';

gsap.registerPlugin(ScrollTrigger, ScrollToPlugin);

export function initScrollSpy() {
  let nav = document.querySelector('#college-nav');
  if (!nav) return;

  let links = gsap.utils.toArray('#college-nav .pin-content a');
  let triggers = [];

  links.forEach((a) => {
    let selector = a.getAttribute('href');
    let element = document.querySelector(selector);
    if (!element) return;

    // Prevent the default anchor jump
    a.addEventListener('click', (e) => {
      e.preventDefault();
      // Use GSAP's ScrollTo to smoothly scroll the window or a scroller
      gsap.to(window, {
        duration: 0.3,
        scrollTo: {
          y: element,
          offsetY: 80, // adjust for fixed header if needed
        },
        onComplete: () => {
          // Refresh triggers in case layout changed
          ScrollTrigger.refresh();
        },
      });
    });

    // Create the scroll-triggering logic
    let trigger = ScrollTrigger.create({
      trigger: element,
      start: 'top center',
      end: 'bottom center',
      onToggle: (self) => self.isActive && setActive(a),
    });

    triggers.push(trigger);
  });

  function setActive(link) {
    links.forEach((el) => el.classList.remove('active'));
    link.classList.add('active');
  }

  return () => {
    console.log('Cleaning up ScrollSpy triggers');
    triggers.forEach((trigger) => trigger.kill());
  };
}
