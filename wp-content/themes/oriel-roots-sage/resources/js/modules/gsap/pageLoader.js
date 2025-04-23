import { gsap } from './gsapConfig.js';
import { DotLottie } from '@lottiefiles/dotlottie-web';

export function pageLoaderInit() {
  const header = document.querySelector('.home #sticky-header > nav');
  const heroTitle = document.querySelector('#home-hero h1');
  const canvas = document.getElementById('dotlottie-canvas');

  gsap.set(heroTitle, { autoAlpha: 0, y: 50 }); // fades + slides up
  gsap.set(header, { autoAlpha: 0, y: -100 }); // hidden above screen

  /* build player – no autoplay so we can attach listeners first */
  const dotLottie = new DotLottie({
    canvas,
    src: 'https://lottie.host/530b1cb1-b79f-483e-958d-e9c6b81613b4/WoZkKaOS8V.lottie',
    autoplay: true,
    loop: false, // play once
    layout: { fit: 'cover' },
    renderConfig: { autoResize: true },
    segment: [0, 150],
  });

  function reveal() {
    const tl = gsap.timeline();

    // 1️⃣  hero title
    tl.to(heroTitle, {
      autoAlpha: 1,
      y: 0,
      duration: 1.2,
      ease: 'power1.out',
    })

      // 2️⃣  header kicks in right after hero is done
      .to(header, {
        autoAlpha: 1,
        y: 0,
        duration: 1,
        ease: 'power1.out',
      });
  }

  dotLottie.addEventListener('load', () => {
    canvas.classList.remove('bg-chalk');
  });


  dotLottie.addEventListener('complete', () => {
    reveal();
  });
}
