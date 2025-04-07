import { initCardSlider } from './cardSwiper.js';
import { initServicesSwiper } from './servicesSwiper.js';
import { initArcSwiper } from './arcSwiper.js';
import { initStorySwiper } from './storySwiper.js';

export function initializeSwipers() {
  initCardSlider();
  initArcSwiper();
  initStorySwiper();
  initServicesSwiper();
}
