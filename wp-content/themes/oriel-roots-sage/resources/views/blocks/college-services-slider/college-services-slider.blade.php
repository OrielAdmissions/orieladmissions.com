@php
  $headline = get_field('headline');
  $cards = get_field('services_cards');
@endphp

@if ($cards)
  <div class="bg-sand content-grid py-12 md:py-30 overflow-x-clip">
    <div class="grid grid-cols-1 gap-8 alignnone">
      <div class="col-start-1 row-start-1">
        <div class="">
          @if ($headline)
            <h2 class="text-6xl-fluid">
              {!! $headline !!}
            </h2>
          @endif
        </div>
      </div>

      <div>

          <div id="servicesSwiper" class="swiper !overflow-visible">
            <div class="swiper-wrapper">
              @foreach ($cards as $card)
                <div class="swiper-slide !h-auto md:max-w-[400px] md:grow">
                  <x-services-card-2
                    :title="$card['title']"
                    :content="$card['content']"
                    :image_id="$card['image_id']"
                  />
                </div>
              @endforeach
            </div>

        </div>
      </div>

      <div class="col-start-1 md:row-start-1">
        <div class="relative flex items-center justify-center gap-x-4 md:justify-end">
          <x-button-round
            direction="left"
            classes="swiper-button-prev--chevron bg-white"
          />
          <x-button-round
            classes="swiper-button-next--chevron bg-white"
          />
        </div>
      </div>
    </div>
  </div>
@endif
