@php
  $title = get_field('title');
@endphp
<div id="home-hero" class="full-width relative">
  <div class="the-stack">
    <div class="overflow-hidden h-svh min-h-[500px]">
      @if (has_post_thumbnail(get_the_ID()))
        {!! wp_get_attachment_image(get_post_thumbnail_id(get_the_ID()), 'full', false, ['loading' => false, 'class' => 'w-full h-full  object-cover']) !!}
      @endif
    </div>
    <div class="relative bg-[black] opacity-20">
    </div>
    <x-page-loader></x-page-loader>
    <div class="content-grid">
      <div class="breakout relative flex flex-col justify-center">
        <div class="relative py-8 fade-in-bottom items-center">
          <h1 class="max-w-225 text-8xl-fluid text-center mx-auto text-white">
            {!! $title !!}
          </h1>
        </div>
      </div>
    </div>
  </div>
</div>
