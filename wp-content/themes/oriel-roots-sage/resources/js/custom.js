document.addEventListener('DOMContentLoaded', function () {
  initTagFilter();
});

function initTagFilter() {
  const filterButtons = document.querySelectorAll('.tag-filters button');
  const postsContainer = document.getElementById('posts-container');
  const paginationContainer = document.getElementById('pagination-container'); // Ensure you have a div for this

  if (!filterButtons.length || !postsContainer) return;

  filterButtons.forEach((button) => {
    button.addEventListener('click', () => {
      filterButtons.forEach((btn) => btn.classList.remove('active'));
      button.classList.add('active');

      fetchPosts({ tag: button.getAttribute('data-tag') || '', paged: 1 });
    });
  });

  document.addEventListener('click', function (e) {
    if (e.target.closest('.pagination a')) {
      e.preventDefault();
      const page = e.target.getAttribute('href').split('paged=')[1] || 1;
      fetchPosts({
        tag:
          document
            .querySelector('.tag-filters button.active')
            ?.getAttribute('data-tag') || '',
        paged: page,
      });
    }
  });

  function fetchPosts({ tag, paged }) {
    fetch(myAjax.ajax_url, {
      method: 'POST',
      headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
      body: new URLSearchParams({
        action: 'filter_posts_by_tag',
        security: myAjax.security,
        tag: tag,
        paged: paged,
      }),
    })
      .then((response) => response.json())
      .then((data) => {
        if (data.success) {
          console.log('✅ AJAX Response:', data);
          postsContainer.innerHTML = data.data.html;
          paginationContainer.innerHTML = data.data.pagination;
        } else {
          console.error('❌ AJAX Error:', data.data.message);
          postsContainer.innerHTML = `<p>⚠️ ${data.data.message}</p>`;
        }
      })
      .catch((error) => {
        console.error('❌ AJAX Request Failed:', error);
        postsContainer.innerHTML = '<p>⚠️ Error loading posts. Try again.</p>';
      });
  }
}
