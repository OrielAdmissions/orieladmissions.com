@php
  $image = get_field('image');
  $contentWidth = get_field('image_starting_width') ?: 1000;
  $bgColor = get_field('bg_color') ?: 'var(--color-chalk)';
@endphp

<div class="relative w-full h-150 overflow-hidden image-reveal-container">
  @if($image)
    {!! wp_get_attachment_image($image, 'full', false, ['class' => 'w-full h-full object-cover']) !!}
  @endif

  <div
    class="curtain curtain-left absolute top-0 left-0 h-full z-2"
    style="width: calc((100% - {{ $contentWidth }}px) / 2); background: {{ $bgColor }};">
  </div>

  <div
    class="curtain curtain-right absolute top-0 right-0 h-full z-2"
    style="width: calc((100% - {{ $contentWidth }}px) / 2); background: {{ $bgColor }};">
  </div>
</div>

