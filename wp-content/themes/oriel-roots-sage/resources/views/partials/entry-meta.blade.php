<time class="dt-published px-2" datetime="{{ get_post_time('c', true) }}">
  {{ get_the_date() }}
</time>

<p class="px-2">
  <span>{{ __('By', 'sage') }}</span>
  <a
    href="{{ get_author_posts_url(get_the_author_meta('ID')) }}"
    class="p-author h-card animate-underline"
  >
    {{ get_the_author() }}
  </a>
</p>
