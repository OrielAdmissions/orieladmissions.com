@php
  $mba_heading = get_field('mba_heading');
  $mba_text = get_field('mba_text');
  $mba_button = get_field('mba_button');
  $mba_image = get_field('mba_image');
  $mba_accordions = get_field('mba_accordions');

  $masters_heading = get_field('masters_heading');
  $masters_text = get_field('masters_text');
  $masters_button = get_field('masters_button');
  $masters_image = get_field('masters_image');
  $masters_list_heading = get_field('masters_list_heading');
  $masters_list = get_field('masters_list');
  $masters_accordions = get_field('masters_accordions');
@endphp

<div x-data="{ selectedTab: 0 }" x-tabs :selected="selectedTab" class="full-width content-grid bg-chalk">
  {{-- Tab List --}}
  <div x-tabs:list class="divide-keyline/80 breakout full-width flex items-stretch divide-x">
    <button x-tabs:tab type="button" :class="$tab.isSelected ? 'border-b-[var(--tab-accent)]' : 'border-b-keyline/80'"
            class="bg-sand/20 inline-flex w-full cursor-pointer justify-center border-b-2 p-7 text-center text-2xl transition duration-300 focus:outline-none"
            style="--tab-accent: #EE2212">
      MBA
    </button>
    <button x-tabs:tab type="button" :class="$tab.isSelected ? 'border-b-[var(--tab-accent)]' : 'border-b-keyline/80'"
            class="bg-sand/20 inline-flex w-full cursor-pointer justify-center border-b-2 p-7 text-center text-2xl transition duration-300 focus:outline-none"
            style="--tab-accent: #5D6720">
      Master’s Admissions
    </button>
  </div>

  {{-- Tab Panels --}}
  <div x-tabs:panels class="tab-contents breakout">
    {{-- MBA Tab --}}
    <section x-tabs:panel class="tab-content">
      <div class="relative py-24 md:py-40">
        <div class="relative z-10 mx-auto px-4">
          <div class="-mx-4 flex flex-wrap items-center">
            <div class="mb-16 w-full px-4 md:mb-0 md:w-1/2">
              <div class="space-y-12 text-center md:mx-auto md:max-w-111 md:text-left">
                @if($mba_heading)
                  <h2 class="text-6xl-fluid">{!! $mba_heading !!}</h2>
                @endif
                @if($mba_text)
                  <p class="text-2xl">{!! $mba_text !!}</p>
                @endif
                @if($mba_button)
                  <a href="{{ $mba_button['url'] }}" class="btn btn-primary">
                    {{ $mba_button['title'] }}
                  </a>
                @endif
              </div>
            </div>
            <div class="w-full px-4 md:w-1/2">
              @if($mba_image)
                {!! wp_get_attachment_image($mba_image, 'full', false, ['class' => 'rounded-xl w-full']) !!}
              @endif
            </div>
          </div>
        </div>
      </div>

      <div class="content-grid">
        <h2 class="text-6xl-fluid text-center">
          Our all-inclusive packages include: </h2>
        <div class="py-12 md:py-30">
          @if($mba_accordions)
            @foreach($mba_accordions as $accordion)
              <x-accordion :heading="$accordion['heading']" :summary_classes="'text-3xl-fluid py-12 leading-tight'"
                           :accent_color="'#EE2212'">
                <p class="text-lg">{!! $accordion['content'] !!}</p>
              </x-accordion>
            @endforeach
          @endif
        </div>
      </div>
    </section>

    {{-- Master’s Admissions Tab --}}
    <section x-tabs:panel class="tab-content">
      <div class="relative py-24 md:py-40">
        <div class="relative z-10 mx-auto px-4">
          <div class="-mx-4 flex flex-wrap items-center">
            <div class="mb-16 w-full px-4 md:mb-0 md:w-1/2">
              <div class="space-y-12 text-center md:mx-auto md:max-w-111 md:text-left">
                @if($masters_heading)
                  <h2 class="text-6xl-fluid">{!! $masters_heading !!}</h2>
                @endif
                @if($masters_text)
                  <p class="text-2xl">{!! $masters_text !!}</p>
                @endif
                @if($masters_button)
                  <a href="{{ $masters_button['url'] }}" class="btn btn-ivy">
                    {{ $masters_button['title'] }}
                  </a>
                @endif
              </div>
            </div>
            <div class="w-full px-4 md:w-1/2">
              @if($masters_image)
                {!! wp_get_attachment_image($masters_image, 'full', false, ['class' => 'rounded-xl w-full']) !!}
              @endif
            </div>
          </div>
        </div>
      </div>

      <div class="content-grid space-y-24">
        @if($masters_list_heading)
          <h2 class="text-5xl-fluid text-center">{!! $masters_list_heading !!}</h2>
        @endif

        @if($masters_list)
          <ul role="list" class="grid grid-cols-1 md:grid-cols-2">
            @foreach($masters_list as $item)
              <li class="border-b-keyline flex items-center border-b py-8 text-2xl">
                <svg class="text-ivy me-2 h-6 w-6 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                  <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                </svg>
                <span>{{ $item['text'] }}</span>
              </li>
            @endforeach
          </ul>
        @endif

        @if($masters_accordions)
          <div class="content-grid">
            <h2 class="text-6xl-fluid text-center">
              Our all-inclusive packages include: </h2>
            <div class="py-12 md:py-30">


              @foreach($masters_accordions as $accordion)
                <x-accordion :heading="$accordion['heading']" :summary_classes="'text-3xl-fluid py-12 leading-tight'"
                             :accent_color="'#5D6720'">
                  <p class="text-lg">{!! $accordion['content'] !!}</p>
                </x-accordion>
              @endforeach
            </div>
          </div>
        @endif
      </div>
    </section>
  </div>
</div>
