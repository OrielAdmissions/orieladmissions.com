import { gsap } from './gsapConfig.js';

export function initImageGrow() {
  let mm = gsap.matchMedia();

  mm.add('(min-width: 768px)', () => {
    let imageElements = document.querySelectorAll('.img-grow');
    if (!imageElements.length) return;

    let triggers = [];

    imageElements.forEach((img) => {
      let animation = gsap.fromTo(
        img,
        {
          width: getComputedStyle(img).width, // explicit starting width
          borderRadius: '3rem',
        },
        {
          width: '100vw', // target width
          borderRadius: '0',
          ease: 'power2.out',
          scrollTrigger: {
            trigger: img,
            start: 'top bottom',
            end: 'top 25%',
            scrub: true,
          },
        },
      );

      triggers.push(animation.scrollTrigger);
    });

    return () => {
      console.log('Cleaning up ImageGrow ScrollTriggers');
      triggers.forEach((trigger) => trigger.kill());
    };
  });
}
