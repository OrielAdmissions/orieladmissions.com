import { Accordion, initAccordions } from '@scripts/modules/accordion';

export default function(el) {
  console.log('Running FAQ block accordion init');

  el.querySelectorAll('details').forEach((detail) => {
    new Accordion(detail); // scoped to this block
  });
}
