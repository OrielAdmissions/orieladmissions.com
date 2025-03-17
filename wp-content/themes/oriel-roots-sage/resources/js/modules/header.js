export function handleStickyHeader() {
  const header = document.querySelector('#sticky-header');
  if (!header) return;

  // Detect initial state
  const startedWithDark = header.classList.contains('header-dark');
  const startedWithLight = header.classList.contains('header-light');

  // Toggle header class based on scroll position
  function toggleHeaderClass() {
    if (window.scrollY > 50) {
      if (startedWithDark) {
        header.classList.remove('header-dark');
        header.classList.add('header-light');
      }
    } else {
      if (startedWithDark) {
        header.classList.add('header-dark');
        header.classList.remove('header-light');
      }
    }
  }

  // Initialize on page load

  toggleHeaderClass();

  // Attach event listeners

  window.addEventListener('scroll', toggleHeaderClass);
}
