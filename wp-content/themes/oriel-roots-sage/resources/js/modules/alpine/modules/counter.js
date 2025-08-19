import { gsap } from '@scripts/modules/gsap/gsapConfig';

/**
 * registerCounter()
 * Call from alpine/index.js → registerCounter( Alpine );
 */
export default function registerCounter(Alpine) {
  Alpine.data('counter', () => ({
    init() {
      if (!this.$el) return;                // guard

      Object.entries(this.$el.dataset).forEach(([key, val]) => {
        const target = parseFloat(val);
        if (isNaN(target) || this[key] !== undefined) return;

        this[key] = 0;

        gsap.to(this, {
          [key]: target,
          duration: 2,
          ease: 'power4.out',
          scrollTrigger: {
            trigger: this.$el,
            start: 'top bottom',
            toggleActions: 'play none none none',
            once: true,
          },
        });
      });
    },
  }));
}
