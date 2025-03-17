import Swiper from 'swiper';
import { Autoplay, Navigation, Pagination } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import { gsap } from 'gsap';

Swiper.use([Navigation, Pagination, Autoplay]);

export function initStorySwiper() {
  const swiperElement = document.querySelector('.story-swiper');
  if (!swiperElement) return;

  const storyText = document.querySelector('#storyText');
  const slides = document.querySelectorAll('.swiper-slide');

  function setMaxHeight() {
    // let maxHeight = 0;
    //
    // slides.forEach((slide) => {
    //   let text = slide.getAttribute('data-story');
    //   let tempElement = document.createElement('p');
    //
    //   // Copy styles to match actual text rendering
    //   tempElement.style.position = 'absolute';
    //   tempElement.style.visibility = 'hidden';
    //   tempElement.style.width = `${storyText.offsetWidth}px`;
    //   tempElement.style.fontSize = getComputedStyle(storyText).fontSize;
    //   tempElement.style.fontFamily = getComputedStyle(storyText).fontFamily;
    //   tempElement.style.lineHeight = getComputedStyle(storyText).lineHeight;
    //   tempElement.style.padding = getComputedStyle(storyText).padding;
    //
    //   tempElement.textContent = text;
    //   document.body.appendChild(tempElement);
    //
    //   maxHeight = Math.max(maxHeight, tempElement.offsetHeight);
    //   document.body.removeChild(tempElement);
    // });
    //
    // // Apply the max height to all slides and the container
    // slides.forEach((slide) => {
    //   slide.style.minHeight = `${maxHeight}px`;
    // });
    // storyText.style.minHeight = `${maxHeight}px`;
  }

  // Run height adjustment when Swiper initializes & updates
  window.addEventListener('load', setMaxHeight);
  window.addEventListener('resize', setMaxHeight);

  const swiper = new Swiper(swiperElement, {
    slidesPerView: 1,
    effect: 'creative',
    loop: true,
    speed: 500,
    autoplay: {
      delay: 5000,
    },
    creativeEffect: {
      prev: { shadow: true, translate: ['-20%', 0, -1] },
      next: { translate: ['100%', 0, 0] },
    },
    navigation: {
      nextEl: '.swiper-3-btn-next',
      prevEl: '.swiper-3-btn-prev',
    },
    pagination: {
      el: '.swiper-pagination-3',
      type: 'progressbar',
    },
    on: {
      init: function () {
        setMaxHeight(); // Run after Swiper initializes
      },
      slideChangeTransitionStart: function () {
        let activeSlide = this.slides[this.realIndex]; // Use `realIndex` for correct loop handling
        let newStory = activeSlide.getAttribute('data-story');

        if (storyText && newStory) {
          gsap.to(storyText, {
            opacity: 0,
            y: 20,
            duration: 0.3,
            onComplete: () => {
              storyText.textContent = newStory;
              gsap.to(storyText, {
                opacity: 1,
                y: 0,
                duration: 0.5,
              });
            },
          });
        }
      },
    },
  });

  window.addEventListener('resize', () => {
    swiper.update();
    setMaxHeight(); // Recalculate height on resize
  });

  // Set the initial text and height
  let initialSlide = swiper.slides[swiper.realIndex];
  if (initialSlide) {
    storyText.textContent = initialSlide.getAttribute('data-story');
    setMaxHeight();
  }
}
