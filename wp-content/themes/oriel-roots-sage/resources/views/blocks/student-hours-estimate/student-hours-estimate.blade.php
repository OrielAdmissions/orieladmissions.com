@php
  $headline = get_field('headline');
  $image = get_field('image');
  $estimates = get_field('estimates');
@endphp

@if ($headline || $image || $estimates)
  <section class="full-width content-grid bg-sand py-12 md:py-30">
    <div class="breakout">
      @if ($headline)
        <h2 class="text-6xl-fluid mx-auto mb-12 md:mb-30 max-w-125 text-center">
          {!! $headline !!}
        </h2>
      @endif

      <div class="grid gap-4 md:grid-cols-12 md:gap-x-21">
        @if ($image)
          <div class="md:col-span-4 lg:col-start-2">
            <div class="pin-content">
              {!! wp_get_attachment_image($image, 'full', false, ['class' => 'object-cover object-right rounded-xl max-md:w-full']) !!}
            </div>
          </div>
        @endif

        @if ($estimates)
          <div class="divide-keyline/80 long-content divide-y md:col-span-6 lg:col-span-5">
            @foreach ($estimates as $item)
              <div class="py-12">
                @if ($item['stat'])
                  <h3 class="text-oriel text-6xl-fluid">{{ $item['stat'] }}</h3>
                @endif

                @if ($item['description'])
                  <p class="text-lg font-medium">{!! $item['description'] !!}</p>
                @endif

                @if ($item['note'])
                  <p class="text-sm font-light">{!! $item['note'] !!}</p>
                @endif
              </div>
            @endforeach
          </div>
        @endif
      </div>
    </div>
  </section>
@endif
