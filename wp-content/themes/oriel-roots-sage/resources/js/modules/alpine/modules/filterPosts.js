export default function registerFilterPosts(Alpine) {
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
            // Simulate a delay of 1 second before hiding the loader
            setTimeout(() => {
              const container = document.querySelector('.postContainerContent');
              if (container) {
                container.style.minHeight = '';
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
}
