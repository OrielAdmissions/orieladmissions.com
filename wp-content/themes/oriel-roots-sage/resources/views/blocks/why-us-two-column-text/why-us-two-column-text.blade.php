@php
  $headline = get_field('headline');
  $subtext = get_field('subtext');
@endphp

@if ($headline || $subtext)
  <div class="full-width content-grid py-12 md:py-30">
    <div class="grid grid-cols-1 gap-8 pb-12 md:pb-30 md:grid-cols-2">
      @if ($headline)
        <div>
          <h2 class="text-6xl-fluid">
            {!! preg_replace('/\|(.+?)\|/', '<span class="text-oriel">$1</span>', e($headline)) !!}
          </h2>
        </div>
      @endif

      @if ($subtext)
        <div class="md:pl-16">
          <p class="max-w-md text-lg text-black/90 lg:text-xl">
            {!! $subtext !!}
          </p>
        </div>
      @endif
    </div>
  </div>
@endif
