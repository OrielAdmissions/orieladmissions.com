import tippy from 'tippy.js';
import 'tippy.js/dist/tippy.css';

export function createTooltip(element, content) {
  tippy(element, {
    content,
    allowHTML: true,
    placement: 'auto-end',
    trigger: 'mouseenter focus',
    interactive: true,
    appendTo: document.body,
    arrow: false,
    theme: 'custom-tooltip',
    delay: [0, 0],
  });
}
