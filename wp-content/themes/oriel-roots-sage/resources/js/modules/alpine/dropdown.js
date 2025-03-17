import ui from '@alpinejs/ui';
import focus from '@alpinejs/focus';
import Alpine from 'alpinejs';

Alpine.plugin(focus);
Alpine.plugin(ui);

export function dropdown() {
  Alpine.data('dropdown', (props) => ({
    open: false,
    links: props.links || [],
    toggle() {
      this.open = !this.open;
    },
    close(focusAfter) {
      if (!this.open) return;
      this.open = false;
      focusAfter && focusAfter.focus();
    },
  }));
}
