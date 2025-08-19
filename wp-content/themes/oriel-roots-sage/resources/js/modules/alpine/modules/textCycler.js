import { gsap, ScrollTrigger } from '@scripts/modules/gsap/gsapConfig';

/**
 * registerCounter()
 * Call from alpine/index.js → registerCounter( Alpine );
 */
export default function registerTextCycler(Alpine) {
  Alpine.data('textCycler', () => ({
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

      // ✅ Only initialize ScrollTrigger if the element exists
      ScrollTrigger.create({
        trigger: this.$el,
        start: 'top 80%',
        once: true, // ✅ Only trigger once
        onEnter: () => this.startCycle(),
      });
    },
    startCycle() {
      if (this.interval) return; // ✅ Prevent multiple intervals

      this.interval = setInterval(() => {
        gsap.to(this.$refs.text, {
          opacity: 0,
          y: -10,
          duration: 0.3,
          onComplete: () => {
            this.currentIndex = (this.currentIndex + 1) % this.texts.length;
            this.$refs.text.textContent = this.texts[this.currentIndex];

            gsap.to(this.$refs.text, {
              opacity: 1,
              y: 0,
              duration: 0.3,
            });
          },
        });
      }, 2500);
    },
    stopCycle() {
      if (this.interval) {
        clearInterval(this.interval);
        this.interval = null;
      }
    },
  }));
}
