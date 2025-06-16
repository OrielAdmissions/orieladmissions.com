@php
  $headline = get_field('headline');
  $subtext = get_field('subtext');
@endphp

@if ($headline || $subtext)
  <div class="breakout">
    <div class="relative overflow-hidden pt-18 pb-47 lg:pt-30 lg:pb-70">
      <div class="grid gap-4 gap-x-6 max-lg:text-center lg:grid-cols-12">
        @if ($headline)
          <div class="lg:col-span-5 lg:col-start-2">
            <h2 class="text-6xl-fluid max-w-130 max-lg:mx-auto">
              {!! preg_replace('/\|(.+?)\|/', '<span class="text-oriel">$1</span>', e($headline)) !!}
            </h2>
          </div>
        @endif

        @if ($subtext)
          <p class="text-xl lg:col-span-3 lg:col-start-9">
            {!! $subtext !!}
          </p>
        @endif
      </div>

      {!! get_svg('images.oriel-shape-outline', 'absolute bottom-0 max-lg:translate-y-[84%] translate-y-[70%] max-w-full h-auto right-0 left-0 mx-auto text-cardinal/40') !!}
    </div>
  </div>
@endif
