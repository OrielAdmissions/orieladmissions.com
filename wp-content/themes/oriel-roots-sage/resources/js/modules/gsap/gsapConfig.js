import gsap from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';
import { ScrollSmoother } from 'gsap/ScrollSmoother';
import { MorphSVGPlugin } from 'gsap/MorphSVGPlugin';
import { DrawSVGPlugin } from 'gsap/DrawSVGPlugin';
import ScrollToPlugin from 'gsap/ScrollToPlugin';

// ✅ Register plugins ONCE
gsap.registerPlugin(
  MorphSVGPlugin,
  DrawSVGPlugin,
  ScrollSmoother,
  ScrollTrigger,
  ScrollToPlugin,
);

export {
  gsap,
  ScrollTrigger,
  ScrollSmoother,
  MorphSVGPlugin,
  DrawSVGPlugin,
  ScrollToPlugin,
};
