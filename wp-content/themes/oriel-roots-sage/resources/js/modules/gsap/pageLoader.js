import { gsap, ScrollSmoother } from './gsapConfig.js';

export function pageLoaderInit() {
  let masterTl; // Store the timeline globally
  const smoother = ScrollSmoother.get();
  const svg = document.querySelector('#LetterGroup');
  const orielGroup = document.querySelector('#OrielGroup');
  const innerShape = document.querySelector('#InnerShape');
  const gradientBox = document.querySelector('#GradientBox');
  const innerShapeMiddle = document.querySelector('#InnerShapeMiddle');

  if (!svg || !innerShapeMiddle) return;

  // Get bounding boxes
  const bboxSVG = svg.getBBox();
  // const bboxInner = innerShape.getBBox();

  // Calculate center position for #O1
  const centerX = bboxSVG.width / 2;
  // const viewportHeight = window.innerHeight;
  // const targetHeight = Math.min(675, viewportHeight); // No larger than viewport height
  // const scaleFactor = targetHeight / bboxInner.height; // Scale to maintain proportions

  const bboxInner = innerShapeMiddle.getBBox();
  const viewportWidth = window.innerWidth;
  const scaleFactor = (viewportWidth / bboxInner.width) * 1.5;

  // Kill the previous timeline if it exists
  if (masterTl) {
    masterTl.kill();
  }

  // Pause ScrollSmoother if it exists
  if (smoother) {
    smoother.paused(true);
    smoother.scrollTo(0, true); // Ensure we start from the top
  }

  // Create a new GSAP Timeline
  masterTl = gsap.timeline({
    onStart: () => {
      if (smoother) smoother.paused(true); // Pause smooth scrolling
      document.body.style.overflow = 'hidden'; // Prevent default scrolling
    },
    onComplete: () => {
      if (smoother) smoother.paused(false); // Resume smooth scrolling
      document.body.style.overflow = ''; // Allow scrolling again
    },
  });

  function intro() {
    var tl = gsap.timeline({ defaults: { duration: 2, ease: 'power3.out' } });
    tl.fromTo(
      '#LogoBox',
      {
        y: 50,
        opacity: 0,
      },
      {
        y: 0,
        opacity: 1,
        duration: 1.2, // Adjust as needed
        ease: 'power3.out',
      },
    );
    tl.to('#paint0_linear_0_1 stop:nth-child(3)', {
      attr: {
        offset: 1,
      },
      stopOpacity: 1,
      duration: 1,
    });
    tl.to(
      '#MainGroup',
      {
        xPercent: -100,
        opacity: 0,
      },
      '-=1',
    );

    tl.to(
      orielGroup,
      {
        transformOrigin: 'center center',
        x: centerX,
      },
      '-=2',
    );
    tl.to('#InnerShapeMiddle', {
      scale: 1,
      transformOrigin: 'center center',
      x: centerX,
      duration: 0,
    });

    tl.to(gradientBox, {
      opacity: 0,
      duration: 0,
    });
    tl.to(innerShape, {
      opacity: 0,
      duration: 0,
    });

    return tl;
  }

  function middle() {
    var tl = gsap.timeline({
      defaults: { duration: 2.5, ease: 'power.inOut' },
    });
    tl.to(orielGroup, {
      scale: scaleFactor,
      color: 'color-mix(in oklab,var(--color-opium)10%,transparent)',
      transformOrigin: 'center center',
      // opacity: 0
    });
    tl.to(
      '#InnerShapeMiddle',
      {
        scale: scaleFactor,
        transformOrigin: 'center center',
        fill: '#000000',
      },
      '<',
    );
    tl.to(
      '#O1',
      {
        opacity: 0,
      },
      '-=1',
    );
    tl.to(
      '#animationOverlay',
      {
        opacity: 0,
      },
      '-=1',
    );
    tl.to(
      'svg.bg-chalk',
      {
        background: 'transparent',
      },
      '-=2',
    );

    return tl;
  }

  masterTl.add(intro()).add(middle());
}
