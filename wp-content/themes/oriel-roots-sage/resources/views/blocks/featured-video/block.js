import { Fancybox } from '@fancyapps/ui';
import '@fancyapps/ui/dist/fancybox/fancybox.css';

export default function featuredVideoInit(el) {
  const smoother = window.smootherInstance || null;

  if (!el.querySelector('.videoFancyBoxLink')) return;

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
