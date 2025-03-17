import { gsap, ScrollTrigger } from './gsapConfig.js';

export function initStickyHeader() {
  const stickyHeader = document.querySelector('#sticky-header');
  const header = document.querySelector('#site-header');
  if (!header) return;

  // ✅ Hide/Show Header on Scroll
  let showAnim = gsap
    .from(stickyHeader, {
      yPercent: -100,
      paused: true,
      duration: 0.2,
    })
    .progress(1);

  ScrollTrigger.create({
    start: 'top top',
    end: 99999,
    onUpdate: (self) => {
      self.direction === -1 ? showAnim.play() : showAnim.reverse();
    },
  });

  // Detect initial state
  const startedWithDark = header.classList.contains('header-dark');

  // ScrollTrigger for Header Color Change
  ScrollTrigger.create({
    trigger: document.body, // Use body for general scrolling
    start: '200px top', // Change header color after scrolling 50px
    toggleClass: { targets: header, className: 'header-light' }, // Add 'header-light'
    onEnter: () => {
      header.classList.remove('header-dark');
      header.classList.add('header-light');
    },
    onLeaveBack: () => {
      if (startedWithDark) {
        header.classList.add('header-dark');
        header.classList.remove('header-light');
      }
    },
  });
}
