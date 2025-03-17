import { gsap, ScrollTrigger } from './gsapConfig.js';

export function initTeamCards() {
  let teamCards = document.querySelectorAll('.team-card');
  if (!teamCards.length) return;

  gsap.set('.team-card', { opacity: 0, y: 75 });

  ScrollTrigger.batch('.team-card', {
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
  });
}
