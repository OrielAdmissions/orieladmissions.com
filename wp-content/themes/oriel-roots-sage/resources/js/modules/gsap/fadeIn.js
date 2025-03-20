export function initIntersectionObserver() {
  let fadeInElements = document.querySelectorAll('.fade-in-bottom');

  if (!fadeInElements.length) return;

  // Create a single observer
  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        const target = entry.target;

        // Fade-in Effect
        if (target.classList.contains('fade-in-bottom')) {
          if (entry.isIntersecting) {
            target.style.transition =
              'opacity 1.2s ease-out, transform 1.2s ease-out';
            target.style.opacity = 1;
            target.style.transform = 'translateY(0)';
            observer.unobserve(target);
          }
        }
      });
    },
    { threshold: 0.2 },
  );

  // Add Observers
  fadeInElements.forEach((el) => {
    el.style.opacity = 0.01;
    el.style.transform = 'translateY(50px)';
    observer.observe(el);
  });
}
