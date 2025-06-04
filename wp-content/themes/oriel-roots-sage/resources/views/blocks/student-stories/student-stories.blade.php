@php
  $headline = get_field('headline');
  $stories = get_field('stories');
@endphp

<div class="bg-sand full-width-constrained">
  <div class="breakout space-y-8 py-12 md:py-30">
    @if ($headline)
      <h2 @class(['text-6xl-fluid mb-12 md:bb-30 text-center'])>
        {{ $headline }}
      </h2>
    @endif

    @if ($stories)
      @foreach ($stories as $story)
        <div class="spiral-binding relative overflow-hidden rounded-md shadow-[0_3px_3px_0_rgba(0,0,0,0.06)]">
          <div class="bg-chalk/70 relative grid grid-cols-12 py-6 lg:py-15">
            <div class="col-span-full lg:col-start-2">
              <div class="px-6">
                @if (!empty($story['title']))
                  <h3 class="text-2xl-fluid mb-4">
                    {!! $story['title'] !!}
                  </h3>
                @endif

                @if (!empty($story['description']))
                  <div class="space-y-6 text-xl">
                    {!! $story['description'] !!}
                  </div>
                @endif
              </div>
            </div>
          </div>
        </div>
      @endforeach
    @endif
  </div>
</div>
