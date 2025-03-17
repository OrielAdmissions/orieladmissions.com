@php
  // Default to the current page/post ID.
  $page_id = get_the_ID();

  // If we're on the blog index and a posts page is set, use that page's ID.
  if (is_home() && get_option('page_for_posts')) {
    $page_id = get_option('page_for_posts');
  }
@endphp

<div
  @class(['the-stack relative items-center overflow-hidden pt-20 text-center', 'h-dvh' => is_single() && has_post_thumbnail($page_id), 'md:min-h-112' => ! (is_single() && has_post_thumbnail($page_id))])
>
  @if (is_single() && has_post_thumbnail($page_id))
    {!! App\get_picture([get_post_thumbnail_id($page_id)], 'full', false, ['loading' => false, 'class' => 'w-full h-full object-cover absolute inset-0 kenburns-top']) !!}
  @endif

  <div
    @class(['page-header', 'text-white' => is_single() && has_post_thumbnail($page_id)])
  >
    @php
      $alt_title = get_field('alternate_page_title') ?: get_post_meta(get_the_ID(), 'alternate_page_title', true);
    @endphp

    <h1 class="page-title text-8xl-fluid px-4 py-24">
      {!! $alt_title ?: $title !!}
    </h1>
  </div>
</div>
