import Swiper from 'swiper';
import { Autoplay, Navigation, Pagination } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import { gsap } from 'gsap';
import { MorphSVGPlugin } from '../gsap/gsapConfig.js';

gsap.registerPlugin(MorphSVGPlugin);
Swiper.use([Navigation, Pagination, Autoplay]);

export function initArcSwiper() {
  let imageSwiperEl = document.querySelector('.imageSwiper');
  if (!imageSwiperEl) return;
  let activeAnimation = null; // Store reference to the active animation
  function animateBorderOnActiveSlide(swiper) {
    const allPaths = document.querySelectorAll('.borderPath'); // Get all paths
    allPaths.forEach((path) => gsap.set(path, { strokeDashoffset: 1000 })); // Reset all

    const activeSlide = swiper.slides[swiper.activeIndex]; // Get active slide
    const activePaths = activeSlide.querySelectorAll('.borderPath'); // Get its paths

    if (!activePaths) return;

    // Kill previous animation if it exists
    if (activeAnimation) {
      activeAnimation.kill();
    }

    // Create new timeline animation
    activeAnimation = gsap.timeline();

    activePaths.forEach((path) => {
      activeAnimation.to(
        path,
        {
          strokeDashoffset: 0, // Draw stroke
          duration: 1.125,
          ease: 'power1.inOut',
        },
        0, // start at the same time
      );
    });

    // Reset strokeDashoffset on inactive slides
    swiper.slides.forEach((slide, index) => {
      if (index !== swiper.activeIndex) {
        const paths = slide.querySelectorAll('.borderPath');
        paths.forEach((path) =>
          gsap.to(path, {
            strokeDashoffset: 1000, // Hide stroke instantly when transitioning
            duration: 0.3, // Quick reset for smooth transition
            ease: 'power1.inOut',
          }),
        );
      }
    });
  }

  let tablet = window.matchMedia('(min-width: 768px)');
  let imageSwiper = new Swiper('.imageSwiper', {
    slidesPerView: 'auto',
    loopAddBlankSlides: false,
    spaceBetween: 48,
    centeredSlides: true,
    longSwipes: false,
    loop: true,
    grabCursor: false,
    watchSlidesProgress: true,
    autoplay: {
      delay: 5000,
    },
    speed: 500,
    navigation: {
      nextEl: '.swiper-2-btn-next',
      prevEl: '.swiper-2-btn-prev',
    },
    pagination: {
      el: '.swiper-pagination-2',
      type: 'progressbar',
    },

    on: {
      init: function () {
        // 🚀 Set the first active slide's animation
        const initialSlide = document.querySelector(
          '.swiper-slide-active clipPath path',
        );
        const initialImage = document.querySelector(
          '.swiper-slide-active .image-mask img',
        );

        if (initialSlide) applyMorphAnimation(initialSlide, true);

        animateBorderOnActiveSlide(this);
      },
      slideChangeTransitionStart: function () {
        const activeSlide = document.querySelector(
          '.swiper-slide-active clipPath path',
        );
        const activeImage = document.querySelector(
          '.swiper-slide-active .image-mask img',
        );
        const allClipPaths = document.querySelectorAll(
          '.imageSwiper clipPath path',
        );
        const allBorderPaths = document.querySelectorAll(
          '.imageSwiper path.borderPath',
        );
        const allImages = document.querySelectorAll(
          '.imageSwiper .image-mask img',
        );

        if (!activeSlide || !activeImage) return;

        // Reset all other slide masks & images before applying animation to the new active slide
        allClipPaths.forEach((path) => applyMorphAnimation(path, false));
        // allImages.forEach((img) => applyKenBurnsEffect(img, false));

        // 🚀 Apply animations to the new active slide
        applyMorphAnimation(activeSlide, true);
        // applyKenBurnsEffect(activeImage, true);
        animateBorderOnActiveSlide(this);
      },
    },
  });

  imageSwiper.on('resize', () => raf());

  let textSlides = document.querySelectorAll('.text-slide');

  function updateTextSlide() {
    let activeIndex = imageSwiper.realIndex; // Get active index from imageSwiper

    textSlides.forEach((slide, index) => {
      if (index === activeIndex) {
        // Apply GSAP fade-in-bottom effect when becoming active
        gsap.fromTo(
          slide,
          { y: 50, opacity: 0 }, // Initial state
          { y: 0, opacity: 1, duration: 1.2, ease: 'power3.out' },
        );
        slide.classList.add('active-text');
      } else {
        // Reset styles for non-active slides (optional)
        gsap.set(slide, { opacity: 0, y: 50 });
        slide.classList.remove('active-text');
      }
    });
  }

  // ✅ Listen for Image Swiper Changes
  imageSwiper.on('slideChangeTransitionStart', () => {
    updateTextSlide();
  });

  // ✅ Initialize the first active text on load
  updateTextSlide();

  function applyMorphAnimation(targetPath, isActive, morphedPath) {
    if (!targetPath) return;

    const shapes = {
      original:
        'M234.663 526.949C320.914 526.85 405.153 528.681 448.371 532.225V123.67C398.071 119.118 316.362 116.792 234.663 116.795C152.933 116.798 71.2132 119.131 20.9543 123.674V532.181C73.2997 528.794 154.843 527.041 234.663 526.949Z',
      morphed:
        'M234.929 621.162C269.97 577.749 352.401 539.947 448.371 532.225V123.67C347.752 114.564 265.48 72.7639 234.675 28.8799C203.826 72.829 121.454 114.59 20.9543 123.674V532.181C117.411 539.842 199.916 577.782 234.929 621.162Z',
    };

    shapes.morphed = morphedPath ?? shapes.morphed;

    gsap.to(targetPath, {
      duration: 0.5,
      morphSVG: isActive ? shapes.morphed : shapes.original,
      ease: 'power3.inOut',
    });
  }

  function calculateWheel() {
    const slides = document.querySelectorAll(
      '.swiper-slide .image-slide__container',
    );
    if (!slides) return;

    const isMobile = window.innerWidth < 768; // Check if viewport is below 768px
    const multiplier = { translate: 0.1, rotate: 0.01 };

    slides.forEach((slide) => {
      if (isMobile) {
        // Reset transformations for mobile view
        slide.style.transform = 'translate(0, 0) rotate(0deg)';
        slide.style.transformOrigin = 'center top';
        return; // Exit early for mobile
      }

      const rect = slide.getBoundingClientRect();
      const r = window.innerWidth * 0.5 - (rect.x + rect.width * 0.5);
      let ty =
        Math.abs(r) * multiplier.translate - rect.width * multiplier.translate;

      ty = Math.max(0, ty); // Prevent negative values
      const transformOrigin = r < 0 ? 'left top' : 'right top';

      slide.style.transform = `translate(0, ${ty}px) rotate(${-r * multiplier.rotate}deg)`;
      slide.style.transformOrigin = transformOrigin;
    });
  }

  function raf() {
    requestAnimationFrame(raf);
    calculateWheel();
  }

  raf();
}
