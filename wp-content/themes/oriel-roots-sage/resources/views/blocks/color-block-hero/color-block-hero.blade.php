@php
  $headline = get_field('headline');
  $showButton = get_field('show_button');
  $buttonLink = get_field('button_link');
  $buttonStyle = get_field('button_style') ?: 'btn-white';
  $headlineColor = get_field('headline_color') ?: 'text-white';
  $bgClass = get_field('background_class') ?: 'bg-oriel';
  $imageId = get_post_thumbnail_id();
@endphp

<div class="full-width relative {{ $bgClass }}">
  <div class="full-width">
    {!! get_svg('images.window-full', 'absolute -bottom-[30vw] md:-bottom-[180px] mx-auto left-0 right-0 text-oriel w-full md:w-[500px] stroke-oriel md:stroke-white/20 max-w-2xl h-auto') !!}
  </div>

  <div class="relative flex min-h-svh flex-col items-center justify-center px-4 py-30 text-center">
    @if ($headline)
      <h1 class="fade-in-bottom text-8xl-fluid mx-auto mb-6 max-w-200 text-center {{ $headlineColor }}">
        {{ $headline }}
      </h1>
    @endif

    @if ($showButton && $buttonLink)
      <a href="{{ $buttonLink['url'] }}" target="{{ $buttonLink['target'] ?? '_self' }}"
         class="btn {{ $buttonStyle }}">
        {{ $buttonLink['title'] ?? 'Contact Us' }}
      </a>
    @endif
  </div>
</div>

<div class="full-width">
  {!! wp_get_attachment_image($imageId, 'full', false, [
    'class' => 'w-full h-auto min-h-96 object-cover',
  ]) !!}
</div>
