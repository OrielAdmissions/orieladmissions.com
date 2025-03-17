import { gsap, ScrollTrigger } from '../gsap/gsapConfig.js';
import ui from '@alpinejs/ui';
import focus from '@alpinejs/focus';
import Alpine from 'alpinejs';

Alpine.plugin(focus);
Alpine.plugin(ui);

export function counter() {
  Alpine.data('counter', () => ({
    init() {
      if (!this.$el) return; // ✅ Stop if element doesn't exist

      Object.keys(this.$el.dataset).forEach((key) => {
        const targetValue = parseFloat(this.$el.dataset[key]);
        if (!isNaN(targetValue) && this[key] === undefined) {
          this[key] = 0;

          gsap.to(this, {
            [key]: targetValue,
            duration: 2,
            ease: 'power4.out',
            scrollTrigger: {
              trigger: this.$el,
              start: 'top bottom',
              toggleActions: 'play none none none',
              once: true,
            },
          });
        }
      });
    },
  }));
}
