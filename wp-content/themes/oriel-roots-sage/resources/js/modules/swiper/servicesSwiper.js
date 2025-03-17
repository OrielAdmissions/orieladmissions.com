import Swiper from 'swiper';
import { Autoplay, Navigation, Pagination } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import { gsap } from 'gsap';

Swiper.use([Navigation, Pagination, Autoplay]);

export function initServicesSwiper() {
  let swiperEl = document.querySelector('#servicesSwiper');
  if (!swiperEl) return;
  let screenXl = window.matchMedia('(min-width: 1440px)');
  let contentGridWidth = 1068;

  function calculateOffset() {
    const viewportWidth = window.innerWidth;
    return screenXl.matches
      ? Math.max((viewportWidth - contentGridWidth) / 2, 0)
      : 0;
  }

  let swiper = new Swiper(swiperEl, {
    slidesPerView: '1',
    centeredSlides: true,
    spaceBetween: 16,
    navigation: {
      nextEl: '.swiper-button-next--chevron',
      prevEl: '.swiper-button-prev--chevron',
    },
    pagination: false,
    breakpoints: {
      600: { slidesPerView: 2, spaceBetween: 16, centeredSlides: false },
      992: { slidesPerView: 3, spaceBetween: 16, centeredSlides: false },
      1440: {
        slidesPerView: 'auto',
        spaceBetween: 16,
        centeredSlides: false,
      },
    },
  });
}
