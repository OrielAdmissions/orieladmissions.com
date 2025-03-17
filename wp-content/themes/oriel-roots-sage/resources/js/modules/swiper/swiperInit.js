import { initCardSlider } from './cardSwiper.js';
import { initServicesSwiper } from './servicesSwiper.js';
import { initArcSwiper } from './arcSwiper.js';
import { initStorySwiper } from './storySwiper.js';

export function initializeSwipers() {
  initCardSlider();

  if (document.body.classList.contains('home')) {
    initArcSwiper();
    initStorySwiper();
  }
  if (document.body.classList.contains('why-us')) {
    initArcSwiper();
  }
  if (document.body.classList.contains('college')) {
    initServicesSwiper();
  }
}
