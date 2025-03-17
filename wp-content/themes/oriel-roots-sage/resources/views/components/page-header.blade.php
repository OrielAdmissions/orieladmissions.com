<div
  @class(['the-stack relative items-center overflow-hidden text-center', 'h-dvh' => has_post_thumbnail($page_id), 'md:min-h-112' => ! has_post_thumbnail($page_id)])
>
  @if (has_post_thumbnail($page_id))
    {!! App\get_picture([get_post_thumbnail_id($page_id)], 'full', false, ['loading' => false, 'class' => 'w-full h-full object-cover absolute inset-0 kenburns-top']) !!}
  @endif

  <div
    @class(['page-header max-md:pt-36 max-md:pb-20 md:pt-16', 'text-white' => get_post_thumbnail_id($page_id)])
  >
    @php
      $alt_title = get_field('alternate_page_title') ?: get_post_meta(get_the_ID(), 'alternate_page_title', true);
    @endphp

    <h1 class="page-title fade-in-bottom text-8xl-fluid px-4">
      {{ $alt_title ?: $title }}
    </h1>
  </div>
</div>
