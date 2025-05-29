import { Fancybox } from '@fancyapps/ui';
import '@fancyapps/ui/dist/fancybox/fancybox.css';

export function initFancybox(smoother) {
  Fancybox.bind('.teamCardFancyBoxLink', {
    animated: true,
    dragToClose: false,
    hideScrollbar: false,
    closeButton: false,
    Toolbar: {
      display: ['close'],
    },
    on: {
      reveal: () => {
        if (window.innerWidth > 1024 && smoother) {
          smoother.paused(true);
        }
      },
      shouldClose: () => {
        if (window.innerWidth > 1024 && smoother) {
          smoother.paused(false);
        }
      },
    },
  });
  Fancybox.bind('.videoFancyBoxLink', {
    animated: true,
    dragToClose: false,
    hideScrollbar: false,
    Toolbar: {
      display: ['close'],
    },
    on: {
      reveal: () => {
        if (window.innerWidth > 1024 && smoother) {
          smoother.paused(true);
        }
      },
      shouldClose: () => {
        if (window.innerWidth > 1024 && smoother) {
          smoother.paused(false);
        }
      },
    },
  });
}
