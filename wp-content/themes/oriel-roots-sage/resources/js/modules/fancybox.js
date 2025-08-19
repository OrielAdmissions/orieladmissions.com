import { Fancybox } from '@fancyapps/ui';
import '@fancyapps/ui/dist/fancybox/fancybox.css';

export function initFancybox() {
  Fancybox.bind('.teamCardFancyBoxLink', {
    animated: true,
    dragToClose: false,
    hideScrollbar: false,
    closeButton: false,
    Toolbar: {
      display: ['close'],
    },
  });
  Fancybox.bind('.videoFancyBoxLink', {
    animated: true,
    dragToClose: false,
    hideScrollbar: false,
    Toolbar: {
      display: ['close'],
    },
  });
}
