import gsap from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';
import { MorphSVGPlugin } from 'gsap/MorphSVGPlugin';
import ScrollToPlugin from 'gsap/ScrollToPlugin';

// ✅ Register plugins ONCE
gsap.registerPlugin(
  MorphSVGPlugin,
  ScrollTrigger,
  ScrollToPlugin,
);

export {
  gsap,
  ScrollTrigger,
  MorphSVGPlugin,
  ScrollToPlugin,
};
