// Accordion class from CSS-Tricks
const accordions = {};

export class Accordion {
  constructor(el) {
    this.el = el;
    this.summary = el.querySelector('summary');
    this.content = el.querySelector('.content');
    this.animation = null;
    this.isClosing = false;
    this.isExpanding = false;
    this.summary.addEventListener('click', (e) => {
      e.preventDefault();
      this.toggle();
    });
    accordions[el.id] = this;
  }

  toggle() {
    this.el.classList.toggle('opened');
    this.el.style.overflow = 'hidden';
    if (this.isClosing || !this.el.open) {
      this.open();
    } else if (this.isExpanding || this.el.open) {
      this.shrink();
    }
  }

  shrink() {
    this.isClosing = true;
    this.el.style.overflow = 'hidden';
    const startHeight = `${this.el.offsetHeight}px`;
    const endHeight = `${this.summary.offsetHeight}px`;

    if (this.animation) {
      this.animation.cancel();
    }

    this.animation = this.el.animate(
      {
        height: [startHeight, endHeight],
      },
      {
        duration: 350,
        easing: 'cubic-bezier(0.4, 0.01, 0.165, 0.99)',
      },
    );

    this.animation.onfinish = () => this.onAnimationFinish(false);
    this.animation.oncancel = () => (this.isClosing = false);
  }

  open() {
    this.el.style.overflow = 'hidden';
    this.el.style.height = `${this.el.offsetHeight}px`;
    this.el.open = true;
    window.requestAnimationFrame(() => this.expand());
  }

  expand() {
    this.isExpanding = true;
    const startHeight = `${this.el.offsetHeight}px`;
    const endHeight = `${this.summary.offsetHeight + this.content.offsetHeight}px`;

    if (this.animation) {
      this.animation.cancel();
    }

    this.animation = this.el.animate(
      {
        height: [startHeight, endHeight],
      },
      {
        duration: 350,
        easing: 'cubic-bezier(0.4, 0.01, 0.165, 0.99)',
      },
    );
    this.animation.onfinish = () => this.onAnimationFinish(true);
    this.animation.oncancel = () => (this.isExpanding = false);
  }

  onAnimationFinish(open) {
    this.el.open = open;
    this.animation = null;
    this.isClosing = false;
    this.isExpanding = false;
    this.el.style.height = this.el.style.overflow = '';

    // Dispatch event when the animation finishes
    const eventName = open ? 'accordion:opened' : 'accordion:closed';
    this.el.dispatchEvent(new CustomEvent(eventName, { bubbles: true }));

    // Optional: dispatch a generic toggle event with extra details
    this.el.dispatchEvent(
      new CustomEvent('accordion:toggled', { bubbles: true, detail: { open } }),
    );
  }
}

export function initAccordions() {
  document.querySelectorAll('details').forEach((el) => {
    new Accordion(el);
  });
  document.querySelectorAll('.open-details').forEach((button) => {
    button.addEventListener('click', () => {
      const index = button.getAttribute('data-index');
      const accordion = accordions[`accordion-${index}`];
      if (accordion) {
        accordion.toggle();
      }
    });
  });
}
