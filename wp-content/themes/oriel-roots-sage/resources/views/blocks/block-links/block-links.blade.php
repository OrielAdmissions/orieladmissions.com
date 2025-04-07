@php
  $block_links = get_field('block_links');
@endphp

<section class="full-width content-grid bg-[#FBF8F6] py-12 md:py-30">
  <h2 class="text-6xl-fluid mx-auto mb-12 md:mb-32 max-w-150 text-center">\
    {{get_field('section-headline')}}
  </h2>
  <div class="breakout">
    <div class="grid grid-cols-12 gap-4">
      <div class="col-span-full md:col-span-6 lg:col-span-4 lg:col-start-2">
        <div class="pin-content md:pr-10">
          {!! App\get_picture([get_field('image')], 'full', false, ['class' => 'object-cover object-right w-full rounded-xl']) !!}
        </div>
      </div>
      <div class="long-content col-span-full md:col-span-6 lg:col-span-6">
        @foreach ($block_links as $block)
          <div
            class="hover:bg-sand relative overflow-hidden rounded-xl transition-colors"
          >
            <div class="border-keyline border-b px-6 py-12 pr-10 lg:pr-32">
              <div
                class="mb-4 inline-flex items-start gap-4 max-lg:flex-col lg:items-center"
              >
                <h3 class="inline-block font-sans text-2xl">
                  {!! $block['headline'] !!}
                </h3>
                <div class="shrink-0">
                  @if ($block['tag'])
                    <div
                      class="bg-oriel mr-4 inline-block rounded-full px-3 py-1.5 text-xs tracking-widest text-white uppercase"
                    >
                      {{ $block['tag'] }}
                    </div>
                  @endif

                  @if ($block['link'])
                    <a href="{{ $block['link'] }}" class="stretched-link">
                      {!! get_svg('images.chevron-right', 'inline-block size-6 absolute top-14 right-4 lg:top-1/2 lg:-translate-y-1/2') !!}
                    </a>
                  @endif
                </div>
              </div>

              <p class="">{!! $block['content'] !!}</p>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</section>
