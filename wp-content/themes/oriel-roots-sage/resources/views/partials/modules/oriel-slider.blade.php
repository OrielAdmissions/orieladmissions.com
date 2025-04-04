@php
  // Headline and text data
  $slides = [
    [
      'image_id' => 406,
      'title' => 'College Counselor',
      'text' => 'Your dedicated counselor will lead you through every step of your college application journey, including crafting a personalized roadmap and a month-by-month action plan to keep you on track.',
    ],
    [
      'image_id' => 436,
      'title' => 'Career Coach',
      'text' => 'Your career coach will help you to explore diverse career paths and to identify your passions, ensuring that you can translate your interests into future career direction.',
    ],
    [
      'image_id' => 408,
      'title' => 'Writing Coach',
      'text' => 'Your writing coach will elevate your writing skills, offering expert support with brainstorming, outlining, and revising all of your application materials.',
    ],
    [
      'image_id' => 409,
      'title' => 'Project Mentor',
      'text' => 'Your project mentor will come from your field of interest and will be another guide for exploring unique activities that reflect your interests.',
    ],
    [
      'image_id' => 410,
      'title' => 'Student Success Manager',
      'text' => 'Your student success manager will help you to stay organized and accountable, while navigating deadlines and staying on track.',
    ],
    [
      'image_id' => 406,
      'title' => 'College Counselor',
      'text' => 'Your dedicated counselor will lead you through every step of your college application journey, including crafting a personalized roadmap and a month-by-month action plan to keep you on track.',
    ],
    [
      'image_id' => 436,
      'title' => 'Career Coach',
      'text' => 'Your career coach will help you to explore diverse career paths and to identify your passions, ensuring that you can translate your interests into future career direction.',
    ],
        [
      'image_id' => 408,
      'title' => 'Writing Coach',
      'text' => 'Your writing coach will elevate your writing skills, offering expert support with brainstorming, outlining, and revising all of your application materials.',
    ],
    [
      'image_id' => 409,
      'title' => 'Project Mentor',
      'text' => 'Your project mentor will come from your field of interest and will be another guide for exploring unique activities that reflect your interests.',
    ],
    [
      'image_id' => 410,
      'title' => 'Student Success Manager',
      'text' => 'Your student success manager will help you to stay organized and accountable, while navigating deadlines and staying on track.',
    ],
  ];
@endphp

<div class="full-width oriel-slider !block overflow-x-clip">
  <div class="carousel">
    <div class="swiper imageSwiper">
      <div class="swiper-wrapper">
        @foreach ($slides as $index => $slide)
          <div class="swiper-slide image-slide">
            <div class="image-slide__container">
              <svg
                width="470"
                height="650"
                viewBox="0 0 470 650"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                class="absolute inset-0 h-full w-full"
                preserveAspectRatio="none"
              >
                <defs>
                  <clipPath
                    class="clip-path--main"
                    id="clip-{{ $index }}"
                    clipPathUnits="objectBoundingBox"
                    transform="scale(0.00212766, 0.00153846)"
                  >
                    <path
                      id="inner-{{ $index }}"
                      d="M72.2368 533.155H232.737H397.737H450V122.725L403.737 122.725L243.237 122.73H68.2368H19.9995V533.112L72.2368 533.155Z"
                      fill="black"
                    />
                  </clipPath>
                </defs>

                <path
                  id="borderPathLeft-{{ $index }}"
                  d="M234.946 -0.00195312C201.013 48.2299 110.545 94.0607 0.000976562 104.03V552.346C106.098 560.753 196.42 602.391 234.932 649.998"
                  class="stroke-cardinal/40 borderPath left"
                  stroke-width="1"
                  stroke-dasharray="1000, 1000"
                  stroke-dashoffset="1000"
                />
                <path
                  id="borderPathRight-{{ $index }}"
                  d="M234.946 -0.00195312C268.83 48.1587 359.325 94.0321 470.001 104.025V552.394C364.439 560.869 273.476 602.354 234.932 649.998"
                  class="stroke-cardinal/40 borderPath right"
                  stroke-width="1"
                  stroke-dasharray="1000, 1000"
                  stroke-dashoffset="1000"
                />
              </svg>
              <div
                class="image-mask"
                style="
                  clip-path: url(#clip-{{ $index }});
                  -webkit-clip-path: url(#clip-{{ $index }});
                "
              >
                {!! App\get_picture([$slide['image_id']], 'full', false, ['class' => 'object-cover object-top h-auto aspect-[470/650]']) !!}
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</div>

<div
  class="mx-auto grid max-w-3xl items-center gap-12 pt-12 pb-24 md:grid-cols-[50px_1fr_50px]"
>
  <div class="flex flex-col max-md:row-start-2 max-md:items-end">
    <x-button-round
      :direction="'left'"
      classes="swiper-2-btn-prev"
    ></x-button-round>
  </div>
  <div
    class="flex flex-col gap-8 text-center max-md:col-span-2 max-md:row-start-1"
  >
    <div class="text-slider-container">
      @foreach ($slides as $index => $slide)
        <div class="text-slide min-h-30 px-4" data-index="{{ $index }}">
          <h4 class="mb-6 font-sans text-2xl">
            {{ $slide['title'] }}
          </h4>
          <p>{{ $slide['text'] }}</p>
        </div>
      @endforeach
    </div>
    <div class="relative mx-auto block w-[112px]">
      <div
        class="swiper-pagination-2 text-white"
        style="--swiper-theme-color: var(--color-cardinal)"
      ></div>
    </div>
  </div>
  <div class="flex flex-col max-md:row-start-2 max-md:items-start">
    <x-button-round classes="swiper-2-btn-next"></x-button-round>
  </div>
</div>
