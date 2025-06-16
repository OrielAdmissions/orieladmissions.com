<div class="bg-sand full-width !block pt-30">
  <div class="md:the-stack">
    <div class="content-grid">
      <div class="max-w-175">
        @if ($heading = get_field('intro_heading'))
          <h2 class="text-8xl-fluid mb-6">{!! $heading !!}</h2>
        @endif

        @if ($intro_paragraph = get_field('intro_paragraph'))
          <p class="max-w-80 text-lg lg:text-xl">{!! $intro_paragraph !!}</p>
        @endif
      </div>
    </div>

    {!! get_svg('images.application-graph', 'w-full h-auto max-md:hidden') !!}
    {!! get_svg('images.mobile-line-graph', 'w-full md:hidden h-full mt-8') !!}
  </div>

  <div class="content-grid">
    <div class="mx-auto max-w-4xl pt-20 md:pt-44">
      @if ($middle_heading = get_field('middle_heading'))
        <h2 class="text-6xl-fluid mb-12 text-center">{!! $middle_heading !!}</h2>
      @endif

      @if ($middle_paragraph = get_field('middle_paragraph'))
        <p class="mb-24 text-center text-lg lg:text-xl">{!! $middle_paragraph !!}</p>
      @endif
    </div>

    @php
      $percentage = get_field('counselor_percentage') ?: 50;
      $students = get_field('average_students') ?: 482;
    @endphp

    <div
      x-data="counter()"
      x-init="init()"
      data-percentage="{{ $percentage }}"
      data-students="{{ $students }}"
      class="breakout grid grid-cols-[repeat(auto-fit,minmax(min(400px,100%),1fr))] gap-4"
    >
      <div class="bg-chalk space-y-6 rounded-lg p-6 text-center shadow-md">
        @if ($card1_intro = get_field('card1_intro'))
          <p class="text-lg lg:text-xl"><span class="font-medium">{!! $card1_intro !!}</span></p>
        @endif

        <span class="text-oriel text-8xl-fluid align-text-bottom font-serif font-light">
          <span class="align-text-bottom" x-text="Math.round(percentage)"></span>%
        </span>

        @if ($card1_description = get_field('card1_description'))
          <p class="text-lg lg:text-xl">{!! $card1_description !!}</p>
        @endif
      </div>

      <div class="bg-chalk space-y-6 rounded-lg p-6 text-center shadow-md">
        @if ($card2_intro = get_field('card2_intro'))
          <p class="text-lg lg:text-xl"><span class="font-medium">{!! $card2_intro !!}</span></p>
        @endif

        <span class="text-oriel text-8xl-fluid align-text-bottom font-serif font-light">
          <span class="align-text-bottom" x-text="Math.round(students)"></span>
        </span>

        @if ($card2_description = get_field('card2_description'))
          <p class="mx-auto max-w-sm text-lg lg:text-xl">{!! $card2_description !!}</p>
        @endif
      </div>
    </div>

    @if ($source = get_field('source_note'))
      <div class="py-6 text-center font-light text-black/70">{!! $source !!}</div>
    @endif
  </div>
</div>
