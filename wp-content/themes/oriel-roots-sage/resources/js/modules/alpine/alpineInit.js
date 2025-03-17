import Alpine from 'alpinejs';
import ui from '@alpinejs/ui';
import focus from '@alpinejs/focus';
import { gsap, ScrollTrigger } from '../gsap/gsapConfig.js';
import { dropdown } from './dropdown';
import { counter } from './counter';
import { textCycler } from './textCycler';

export function registerAlpineDirectives() {
  document.addEventListener('alpine:init', () => {
    Alpine.data('dropdown', dropdown);
    Alpine.data('counter', counter);
    Alpine.data('textCycler', textCycler);
  });
}
