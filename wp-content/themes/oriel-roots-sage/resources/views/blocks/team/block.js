import { gsap, ScrollTrigger } from '@scripts/modules/gsap/gsapConfig';
import { Fancybox } from '@fancyapps/ui';
import '@fancyapps/ui/dist/fancybox/fancybox.css';

export default function teamBlockInit(el) {
  const smoother = window.smootherInstance || null;

  // 🟦 Fancybox setup
  if (el.querySelector('.teamCardFancyBoxLink')) {
    Fancybox.bind('.teamCardFancyBoxLink', {
      animated: true,
      dragToClose: false,
      hideScrollbar: false,
      closeButton: false,
      Toolbar: {
        display: ['close'],
      },
      on: {
        reveal: () => {
          if (window.innerWidth > 1024 && smoother) {
            smoother.paused(true);
          }
        },
        shouldClose: () => {
          if (window.innerWidth > 1024 && smoother) {
            smoother.paused(false);
          }
        },
      },
    });
  }

  // 🟨 GSAP animations
  mm.add('(min-width: 768px)', () => {
    const teamCards = el.querySelectorAll('.team-card');
    if (!teamCards.length) return;

    gsap.set(teamCards, {opacity: 0, y: 75});

    ScrollTrigger.batch(teamCards, {
      onEnter: (batch) => {
        batch.forEach((card, index) =>
          gsap.to(card, {
            opacity: 1,
            y: 0,
            stagger: 0.3,
            delay: index * 0.3,
          }),
        );
      },
      once: true,
    })
  })
}
