import {
  gsap,
  ScrollTrigger,
  ScrollSmoother,
  MorphSVGPlugin,
  DrawSVGPlugin,
  ScrollToPlugin,
} from './gsapConfig';

export function initImageGrow() {
  let mm = gsap.matchMedia();

  mm.add('(min-width: 768px)', () => {
    let imageElements = document.querySelectorAll('.img-grow');
    if (!imageElements.length) return;

    let triggers = [];

    imageElements.forEach((img) => {
      let animation = gsap.fromTo(
        img,
        {
          width: getComputedStyle(img).width, // explicit starting width
          borderRadius: '3rem',
        },
        {
          width: '100vw', // target width
          borderRadius: '0',
          ease: 'power2.out',
          scrollTrigger: {
            trigger: img,
            start: 'top bottom',
            end: 'top 25%',
            scrub: true,
          },
        },
      );

      triggers.push(animation.scrollTrigger);
    });

    return () => {
      console.log('Cleaning up ImageGrow ScrollTriggers');
      triggers.forEach((trigger) => trigger.kill());
    };
  });
}

export function initStickyHeader() {
  let showAnim = gsap
    .from('#sticky-header', {
      yPercent: -100,
      paused: true,
      duration: 0.2,
    })
    .progress(1);

  ScrollTrigger.create({
    start: 'top top',
    end: 99999,
    onUpdate: (self) => {
      self.direction === -1 ? showAnim.play() : showAnim.reverse();
    },
  });
}

// export function initStickyHeader() {
//   let showAnim = gsap
//     .from('#sticky-header', {
//       yPercent: -100,
//       paused: true,
//       duration: 0.2,
//     })
//     .progress(1);
//
//   ScrollTrigger.create({
//     start: 'top top',
//     end: 99999,
//     onUpdate: (self) => {
//       self.direction === -1 ? showAnim.play() : showAnim.reverse();
//     },
//   });
// }

// export function initStickyHeader() {
//   const navbar = document.getElementById('sticky-header');
//
//   let lastScrollTop = 0;
//   addEventListener('scroll', () => {
//     // Current scroll position
//     const scrollTop = window.scrollY || document.documentElement.scrollTop;
//
//     // check scroll direction
//     const distance = scrollTop - lastScrollTop;
//     const currentTop = parseInt(getComputedStyle(navbar).top.split('px'));
//
//     // Clamp value between -80 and 0
//     let amount = Math.max(
//       Math.min(
//         currentTop +
//           (distance < 0
//             ? Math.abs(distance) // scrolling up
//             : -Math.abs(distance)) * // scrolling down
//             40, // (1)
//         0,
//       ),
//       -80,
//     );
//
//     console.log(amount, currentTop, Math.abs(distance));
//
//     navbar.style.top = `${amount}px`;
//
//     lastScrollTop = scrollTop;
//   });
// }

export function initTextCycler() {
  if (document.body.classList.contains('team')) {
    window.textCycler = function () {
      return {
        texts: [],
        currentIndex: 0,
        init() {
          const wordsAttr = this.$refs.text.getAttribute('data-words');
          this.texts = wordsAttr
            ? wordsAttr.split(',').map((word) => word.trim())
            : [
                'student-centric',
                'admissions-obsessed',
                'detail-oriented',
                'perfectionists',
                'creative thinkers',
                'your college experts',
              ];

          this.$refs.text.textContent = this.texts[this.currentIndex];
          this.startCycle();
        },
        startCycle() {
          const cycleText = () => {
            gsap.to(this.$refs.text, {
              opacity: 0,
              y: -10,
              duration: 0.5,
              onComplete: () => {
                this.currentIndex = (this.currentIndex + 1) % this.texts.length;
                this.$refs.text.textContent = this.texts[this.currentIndex];

                gsap.to(this.$refs.text, {
                  opacity: 1,
                  y: 0,
                  duration: 0.5,
                });
              },
            });
          };

          setInterval(cycleText, 3000);
        },
      };
    };
  }
}

export function initPinnedElements() {
  let mm = gsap.matchMedia();

  mm.add('(min-width: 1024px)', () => {
    let pinned = gsap.utils.toArray('.pin-content');
    let header = document.querySelector('#sticky-header');
    let headerHeight = 80;

    pinned.forEach((pin) => {
      let container = pin.closest('section');
      let endTrigger = container.querySelector('.long-content'); // Adjust to target the content

      ScrollTrigger.create({
        trigger: pin,
        pin: true,
        start: `top ${headerHeight}px`,
        endTrigger: endTrigger, // Set the scrolling end trigger
        end: () => `bottom ${pin.offsetHeight + headerHeight}px`,
        pinSpacing: false,
        invalidateOnRefresh: true,
      });
    });

    let pinnedTrigger;
    document.addEventListener('accordion:toggled', () => {
      ScrollTrigger.refresh();
      //   const openCount = document.querySelectorAll('details[open]').length;
      //
      //   if (openCount > 0 && !pinnedTrigger) {
      //     pinnedTrigger = ScrollTrigger.create({
      //       trigger: '.faqStickyText',
      //       pin: true,
      //       markers: true,
      //     });
      //   } else if (openCount === 0 && pinnedTrigger) {
      //     pinnedTrigger.kill();
      //     pinnedTrigger = null;
      //   }
    });
  });
}

export function initSmoothScroll() {
  let smootherInstance = null; // Store instance reference

  function createSmoother() {
    smootherInstance = ScrollSmoother.create({
      smooth: 1.5,
      effects: true,
      normalizeScroll: true,
    });

    document.querySelectorAll('a[href^="#"]').forEach((link) => {
      link.addEventListener('click', function (event) {
        event.preventDefault();
        const targetElement = document.querySelector(link.getAttribute('href'));
        const header = document.querySelector('#sticky-header');
        const headerHeight = header ? header.offsetHeight : 80; // Fallback height

        if (targetElement) {
          gsap.to(smootherInstance.scrollWrapper(), {
            duration: 0.5,
            scrollTo: {
              y: targetElement,
              offsetY: headerHeight,
            },
            ease: 'power2.out',
          });
        }
      });
    });
  }

  function destroySmoother() {
    if (smootherInstance) {
      smootherInstance.kill();
      smootherInstance = null;
    }
  }

  function checkScreenSize() {
    if (window.innerWidth >= 1024) {
      if (!smootherInstance) createSmoother();
    } else {
      destroySmoother();
    }
  }

  // ✅ Run on load
  checkScreenSize();

  // ✅ Listen for window resizes
  window.addEventListener('resize', checkScreenSize);
}

export function initScrollSpy() {
  let mm = gsap.matchMedia();

  mm.add('(min-width: 769px)', () => {
    console.log('ScrollSpy initialized on desktop');

    let nav = document.querySelector('#college-nav');
    if (!nav) return;

    let links = gsap.utils.toArray('#college-nav .pin-content a');
    let triggers = [];

    links.forEach((a) => {
      let element = document.querySelector(a.getAttribute('href'));
      if (!element) return;

      let trigger = ScrollTrigger.create({
        trigger: element,
        start: 'top center',
        end: 'bottom center',
        onToggle: (self) => self.isActive && setActive(a),
      });

      triggers.push(trigger);
    });

    function setActive(link) {
      links.forEach((el) => el.classList.remove('active'));
      link.classList.add('active');
    }

    return () => {
      console.log('Cleaning up ScrollSpy triggers (desktop)');
      triggers.forEach((trigger) => trigger.kill());
    };
  });

  mm.add('(max-width: 768px)', () => {
    console.log('Sticky dropdown enabled on mobile');

    let dropdown = document.querySelector('#college-nav .dropdown-wrapper');
    if (!dropdown) return;

    let trigger = ScrollTrigger.create({
      trigger: dropdown,
      endTrigger: '.insight-cards__container',
      start: 'top 80px',
      end: 'bottom bottom',
      pin: true,
      pinSpacing: false,
    });

    return () => {
      console.log('Cleaning up sticky dropdown (mobile)');
      trigger.kill();
    };
  });
}

export function initFadeInBottom() {
  let mm = gsap.matchMedia();
  mm.add('(min-width: 768px)', () => {
    let fadeInElements = document.querySelectorAll('.fade-in-bottom');
    if (!fadeInElements) return;
    gsap.utils.toArray('.fade-in-bottom').forEach((el) => {
      gsap.fromTo(
        el,
        { y: 50, opacity: 0 }, // Initial state (same as 0% in keyframes)
        {
          y: 0,
          opacity: 1,
          duration: 1.2, // Adjust as needed
          ease: 'power3.out',
          scrollTrigger: {
            trigger: el,
            start: 'top 80%', // Adjust when the animation should start
            end: 'top 50%', // Control when it should finish
            toggleActions: 'play none none none', // Plays on enter, reverses on exit
          },
        },
      );
    });
  });
}

export function initTeamCards() {
  let mm = gsap.matchMedia();

  mm.add('(min-width: 768px)', () => {
    let teamCards = document.querySelectorAll('.team-card');
    if (!teamCards.length) return;

    gsap.set('.team-card', { opacity: 0, y: 75 });

    ScrollTrigger.batch('.team-card', {
      onEnter: (batch) => {
        batch.forEach((card, index) =>
          gsap.to(card, {
            opacity: 1,
            y: 0,
            stagger: 0.3,
            delay: index * 0.3,
          }),
        );
      },
      once: true,
    });

    return () => ScrollTrigger.getAll().forEach((st) => st.kill()); // Cleanup when exiting desktop mode
  });
}

export function gsapAnimations() {
  initStickyHeader();
  initSmoothScroll();
  initImageGrow();
  initFadeInBottom();
  initPinnedElements();

  if (document.body.classList.contains('team')) {
    initTextCycler();
    initTeamCards();
  }
  if (document.body.classList.contains('insights')) {
    initScrollSpy();
  }
}
