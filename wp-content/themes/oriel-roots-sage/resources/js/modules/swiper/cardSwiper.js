import Swiper from 'swiper';
import { Autoplay, Navigation, Pagination } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

Swiper.use([Navigation, Pagination, Autoplay]);

export function initCardSlider() {
  let swiperEl = document.querySelector('#cardSlider');
  if (!swiperEl) return;

  let swiper = new Swiper(swiperEl, {
    slidesPerView: '1',
    centeredSlides: true,
    spaceBetween: 16,
    loop: true,
    navigation: {
      nextEl: '.swiper-button-next--chevron',
      prevEl: '.swiper-button-prev--chevron',
    },
    pagination: { el: '.swiper-pagination-4', type: 'progressbar' },
    breakpoints: {
      600: {
        slidesPerView: 2,
        spaceBetween: 16,
        centeredSlides: false,
        pagination: false,
      },
      992: { slidesPerView: 3, spaceBetween: 16, centeredSlides: false },
      1440: {
        slidesPerView: 'auto',
        spaceBetween: 16,
        centeredSlides: false,
      },
    },
  });
}
