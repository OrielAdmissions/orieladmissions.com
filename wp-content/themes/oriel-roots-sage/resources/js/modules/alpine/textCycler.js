import { gsap, ScrollTrigger } from '../gsap/gsapConfig.js';
import ui from '@alpinejs/ui';
import focus from '@alpinejs/focus';
import Alpine from 'alpinejs';

export const textCycler = () => ({
  texts: [],
  currentIndex: 0,
  interval: null,

  init() {
    if (!this.$refs.text) return;

    const wordsAttr = this.$refs.text.getAttribute('data-words');
    this.texts = wordsAttr
      ? wordsAttr.split(',').map((word) => word.trim())
      : [
          'student-centric',
          'admissions-obsessed',
          'detail-oriented',
          'perfectionists',
          'creative thinkers',
          'your college experts',
        ];

    this.$refs.text.textContent = this.texts[this.currentIndex];

    ScrollTrigger.create({
      trigger: this.$el,
      start: 'top 80%',
      once: true,
      onEnter: () => this.startCycle(),
    });
  },

  startCycle() {
    if (this.interval) return;

    this.interval = setInterval(() => {
      gsap.to(this.$refs.text, {
        opacity: 0,
        y: -10,
        duration: 0.5,
        onComplete: () => {
          this.currentIndex = (this.currentIndex + 1) % this.texts.length;
          this.$refs.text.textContent = this.texts[this.currentIndex];

          gsap.to(this.$refs.text, {
            opacity: 1,
            y: 0,
            duration: 0.5,
          });
        },
      });
    }, 3000);
  },

  stopCycle() {
    clearInterval(this.interval);
    this.interval = null;
  },
});
