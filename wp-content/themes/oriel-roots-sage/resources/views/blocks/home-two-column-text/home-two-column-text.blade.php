@php
  $headline = get_field('headline');
  $subtext = get_field('subtext');
  $button_text = get_field('button_text');
  $button_link = get_field('button_link');

  $headline = preg_replace('/\|(.+?)\|/', '<span class="text-oriel text-6xl-fluid">$1</span>', e($headline));
@endphp

<div class="breakout">
  <div class="py-12 md:py-30">
    <div class="grid gap-8 grid-cols-12 max-md:text-center">
      <div class="md:col-start-2 md:col-span-7 col-span-full">
        @if ($headline)
          <h2 class="text-6xl-fluid mb-8">{!! $headline !!}</h2>
        @endif

        @if ($button_link)
          <a href="{{ $button_link }}" class="btn btn-outline">
            {{ $button_text ?: 'Learn More' }}
          </a>
        @endif
      </div>

      @if ($subtext)
        <div class="col-span-full md:col-start-9 lg:col-span-2 md:col-span-3">
          <p class="text-lg-fluid">{!! $subtext !!}</p>
        </div>
      @endif
    </div>
  </div>
</div>
