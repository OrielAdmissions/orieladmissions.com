@php
  $headline = get_field('headline');
@endphp

@if ($headline)
  <div class="bg-cardinal full-width relative overflow-hidden py-12 text-center md:py-30">
    {!! get_svg('images.oriel-shape-outline', 'absolute top-0 right-0 left-0 mx-auto max-sm:hidden text-white/40') !!}
    {!! get_svg('images.oriel-shape', 'text-white mx-auto mb-8') !!}

    <h2 class="text-5xl-fluid fade-in-bottom mx-auto max-w-200 text-white">
      {!! preg_replace('/\|(.+?)\|/', '<span class="text-oriel">$1</span>', e($headline)) !!}
    </h2>
  </div>
@endif
