import { gsap, ScrollTrigger, ScrollSmoother } from './gsap/gsapConfig';
import ui from '@alpinejs/ui';
import focus from '@alpinejs/focus';
import Alpine from 'alpinejs';

export function registerAlpineDirectives() {
  document.addEventListener('alpine:init', () => {
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
    // ✅ Counter Component
    Alpine.data('counter', () => ({
      init() {
        if (!this.$el) return; // Stop if element doesn't exist

        Object.keys(this.$el.dataset).forEach((key) => {
          const targetValue = parseFloat(this.$el.dataset[key]);
          if (!isNaN(targetValue) && this[key] === undefined) {
            this[key] = 0;

            gsap.to(this, {
              [key]: targetValue,
              duration: 2,
              ease: 'power4.out',
              scrollTrigger: {
                trigger: this.$el,
                start: 'top bottom',
                toggleActions: 'play none none none',
                once: true,
              },
            });
          }
        });
      },
    }));

    // ✅ Text Cycler Component
    Alpine.data('textCycler', () => ({
      texts: [],
      currentIndex: 0,
      interval: null,
      init() {
        if (!this.$refs.text) return;

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

        // ✅ Only initialize ScrollTrigger if the element exists
        ScrollTrigger.create({
          trigger: this.$el,
          start: 'top 80%',
          once: true, // ✅ Only trigger once
          onEnter: () => this.startCycle(),
        });
      },
      startCycle() {
        if (this.interval) return; // ✅ Prevent multiple intervals

        this.interval = setInterval(() => {
          gsap.to(this.$refs.text, {
            opacity: 0,
            y: -10,
            duration: 0.3,
            onComplete: () => {
              this.currentIndex = (this.currentIndex + 1) % this.texts.length;
              this.$refs.text.textContent = this.texts[this.currentIndex];

              gsap.to(this.$refs.text, {
                opacity: 1,
                y: 0,
                duration: 0.3,
              });
            },
          });
        }, 2500);
      },
      stopCycle() {
        if (this.interval) {
          clearInterval(this.interval);
          this.interval = null;
        }
      },
    }));

    Alpine.data(
      'filterPosts',
      (adminURL, paginationType = 'load-more', initData = {}) => ({
        posts: '',
        limit: 8,
        category: null,
        page: initData.initialPage || 1,
        maxPages: initData.maxPages || 1,
        postType: initData.postType || 'post', // default to 'post'
        paginationType: paginationType, // 'load-more' or 'numbered'
        showDefault: true,
        showFiltered: false,
        loading: false, // For skeleton loader

        initPagination() {
          console.log('Initial page:', this.page, 'Max pages:', this.maxPages);
        },

        filterPosts(id) {
          console.log(`Filtering posts by category: ${id}`);
          this.page = 1; // reset page on category change
          this.showDefault = false;
          this.showFiltered = true;
          this.category = id;
          this.fetchPosts();
        },

        fetchPosts(append = false) {
          this.loading = true;
          console.log('Fetching posts...');
          let formData = new FormData();
          formData.append('action', 'filterPosts');
          formData.append('limit', this.limit);
          formData.append('page', this.page);
          formData.append('post_type', this.postType);
          if (this.category) {
            formData.append('category', this.category);
          }
          fetch(adminURL, {
            method: 'POST',
            body: formData,
          })
            .then((res) => res.json())
            .then((res) => {
              if (res.max_pages) {
                this.maxPages = res.max_pages;
              }
              if (res.posts) {
                this.posts =
                  append && this.paginationType === 'load-more'
                    ? this.posts + res.posts
                    : res.posts;
              }
            })
            .catch((err) => console.error('AJAX Fetch Error:', err))
            .finally(() => {
              const smoother = ScrollSmoother.get();
              if (smoother) {
                smoother.scrollTo(
                  '.postContainer',
                  {
                    duration: 0.5,
                    ease: 'power2.inOut',
                  },
                  'top 80px',
                );
              } else {
                const container = document.querySelector('.postContainer');
                if (container) {
                  const headerOffset = 80; // height of your sticky header
                  const elementPosition = container.getBoundingClientRect().top;
                  const offsetPosition =
                    elementPosition + window.pageYOffset - headerOffset;
                  window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth',
                  });
                }
              }
              // Simulate a delay of 1 second before hiding the loader
              setTimeout(() => {
                const container = document.querySelector(
                  '.postContainerContent',
                );
                if (container) {
                  container.style.minHeight = '';
                }
                if (smoother) {
                  smoother.refresh();
                }
                this.loading = false;
              }, 1000);
            });
        },

        changePage(newPage) {
          if (newPage === this.page) return;

          const container = document.querySelector('.postContainerContent');
          if (container) {
            // Set the min-height to preserve current height
            container.style.minHeight = container.offsetHeight + 'px';
          }

          this.page = newPage;
          this.showDefault = false;
          this.showFiltered = true;
          this.loading = true; // show skeleton
          this.fetchPosts();
        },

        getVisiblePages() {
          let total = this.maxPages;
          let current = this.page;
          let range = window.innerWidth < 768 ? 1 : 2; // Mobile fewer pages

          let pages = [];
          if (total <= range * 2 + 3) {
            for (let i = 1; i <= total; i++) {
              pages.push(i);
            }
          } else {
            pages.push(1); // Always show the first page

            if (current > range + 2) {
              pages.push(null); // Ellipsis before current range
            }

            for (
              let i = Math.max(2, current - range);
              i <= Math.min(total - 1, current + range);
              i++
            ) {
              pages.push(i);
            }

            if (current < total - range - 1) {
              pages.push(null); // Ellipsis after current range
            }

            pages.push(total); // Always show the last page
          }

          console.log('Visible Pages:', pages); // Debugging
          return pages;
        },

        nextPage() {
          if (this.page < this.maxPages) {
            this.page++;
            this.fetchPosts(true);
          }
        },
      }),
    );
  });

  // ✅ Only initialize Alpine plugins if Alpine hasn’t started
  if (!window.Alpine) {
    Alpine.plugin(focus);
    Alpine.plugin(ui);
    window.Alpine = Alpine;
    Alpine.start();
  }
}
