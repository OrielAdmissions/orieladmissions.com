import { gsap } from '@scripts/modules/gsap/gsapConfig';
// import { DotLottie } from '@lottiefiles/dotlottie-web';

export default function homeHeroInit(el) {
  console.log('✅ homeHeroInit running for:', el);

  const showLoader = el.dataset.showLoader === 'true'; // Read from data attribute

  const heroTitle = el.querySelector('h1');
  const canvas = el.querySelector('#dotlottie-canvas');
  if (!heroTitle) return;

  gsap.set(heroTitle, { autoAlpha: 0, y: 50 });

  if (!showLoader || !canvas) {
    // 👇 Skip the loader; just fade in the title
    gsap.to(heroTitle, {
      autoAlpha: 1,
      y: 0,
      duration: 1.2,
      ease: 'power1.out',
    });
    return;
  }

  const dotLottie = new DotLottie({
    canvas,
    src: 'https://lottie.host/530b1cb1-b79f-483e-958d-e9c6b81613b4/WoZkKaOS8V.lottie',
    autoplay: true,
    loop: false,
    layout: { fit: 'cover' },
    renderConfig: { autoResize: true },
    segment: [0, 150],
  });

  dotLottie.addEventListener('load', () => {
    canvas.classList.remove('bg-chalk');
  });

  dotLottie.addEventListener('complete', () => {
    gsap.to(heroTitle, {
      autoAlpha: 1,
      y: 0,
      duration: 1.2,
      ease: 'power1.out',
    });
  });
}
