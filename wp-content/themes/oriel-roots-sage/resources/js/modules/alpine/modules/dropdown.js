/**
 * dropdown($el)
 * Usage in Blade/HTML:   x-data="dropdown($el)"
 * Pass the wrapper element so we can read data-links="" off it.
 */
export default function registerDropdown(Alpine) {
  Alpine.data('dropdown', ($el) => {
    const links = JSON.parse($el.dataset.links || '[]');

    return {
      open : false,
      links,

      toggle() { this.open = !this.open; },

      close(btn) {
        if (!this.open) return;
        this.open = false;
        btn?.focus();       // return focus to trigger
      },
    };
  });
}
