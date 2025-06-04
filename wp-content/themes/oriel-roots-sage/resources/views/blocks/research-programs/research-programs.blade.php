@php
  $headline = get_field('headline');
  $intro = get_field('intro_text');

  $program1 = get_field('program_1_items');
  $program1_link = get_field('program_1_link');

  $program2 = get_field('program_2_items');
  $program2_link = get_field('program_2_link');

  $project_heading = get_field('project_areas_heading');
  $humanities = get_field('project_humanities');
  $stem = get_field('project_stem');
@endphp

<div class="breakout mb-20 space-y-12 pt-12 md:pt-30">
  <div class="grid grid-cols-12 gap-x-4 gap-y-6">
    <div class="col-span-full flex max-w-lg flex-col gap-y-12 lg:col-span-4 lg:col-start-2 xl:pt-16">
      @if ($headline)
        <h2 class="text-6xl-fluid">{!! $headline !!}</h2>
      @endif

      @if ($intro)
        <p class="text-lg">{!! $intro !!}</p>
      @endif
    </div>

    <div class="col-span-full grid grid-cols-12 gap-6 lg:col-span-7">
      {{-- PROGRAM 1 --}}
      <div class="bg-sand col-span-full flex flex-col items-start justify-center gap-8 overflow-hidden rounded-xl p-6 sm:col-span-6">
        <h3 class="text-3xl-fluid leading-tight">Oriel Ignite <br class="max-xl:hidden" /> Research program</h3>

        @if ($program1)
          <ul class="divide-keyline/40 divide-y text-lg w-full">
            @foreach ($program1 as $item)
              @php
                $text = $item['content'];
                $icon = $item['icon'] ?? null;
                $faded = $item['faded'] ?? false;
              @endphp
              <li class="flex items-center gap-x-8 py-3 {{ $faded ? 'text-black/50' : '' }}">
                @if ($icon)
                  {!! wp_get_attachment_image($icon, 'full', false, ['class' => 'w-5 h-5 shrink-0']) !!}
                @endif
                <span>{{ $text }}</span>
              </li>
            @endforeach
          </ul>
        @endif

        @if ($program1_link)
          <a href="{{ $program1_link }}" target="_blank" class="btn btn-primary text-center max-sm:w-full">Apply Now</a>
        @endif
      </div>

      {{-- PROGRAM 2 --}}
      <div class="bg-oriel col-span-full flex flex-col items-start justify-center gap-8 overflow-hidden rounded-xl p-6 sm:col-span-6">
        <h3 class="text-3xl-fluid leading-tight text-white">
          Oriel Ignite <br class="max-xl:hidden" /> Research program
          <span class="pill bg-cardinal ml-2 text-white">+PLUS</span>
        </h3>

        @if ($program2)
          <ul class="divide-keyline/40 divide-y text-lg text-white w-full">
            @foreach ($program2 as $item)
              @php
                $text = $item['content'];
                $icon = $item['icon'] ?? null;
                $faded = $item['faded'] ?? false;
              @endphp
              <li class="flex items-center gap-x-8 py-3 {{ $faded ? 'opacity-60' : '' }}">
                @if ($icon)
                  {!! wp_get_attachment_image($icon, 'full', false, ['class' => 'w-5 h-5 shrink-0']) !!}
                @endif
                <span>{{ $text }}</span>
              </li>
            @endforeach
          </ul>
        @endif

        @if ($program2_link)
          <a href="{{ $program2_link }}" target="_blank" class="btn btn-white text-center max-sm:w-full">Apply Now</a>
        @endif
      </div>
    </div>
  </div>
</div>

{{-- PROJECT AREAS --}}
<div class="breakout mb-12 md:mb-30">
  <div class="grid grid-cols-12 gap-x-4 gap-y-6">
    <div class="col-span-full flex max-w-lg flex-col gap-y-12 lg:col-span-4 lg:col-start-2">
      @if ($project_heading)
        <h3 class="text-2xl-fluid py-6 font-sans">{{ $project_heading }}</h3>
      @endif
    </div>

    <div class="col-span-full lg:col-span-7">
      @if ($humanities)
        <x-accordion heading="Humanities" summary_classes="text-2xl-fluid py-6">
          <ul class="grid list-none gap-4 pl-4 md:grid-cols-2">
            @foreach ($humanities as $subject)
              <li class="flex items-center gap-2">
                {!! get_svg('images.chevron-right', 'text-oriel size-4 flex-shrink-0') !!}
                <span>{{ $subject['text'] ?? $subject }}</span>
              </li>
            @endforeach
          </ul>
        </x-accordion>
      @endif

      @if ($stem)
        <x-accordion heading="STEM" summary_classes="text-2xl-fluid py-6">
          <ul class="grid list-none gap-4 pl-4 md:grid-cols-2">
            @foreach ($stem as $subject)
              <li class="flex items-center gap-2">
                {!! get_svg('images.chevron-right', 'text-oriel size-4 flex-shrink-0') !!}
                <span>{{ $subject['text'] ?? $subject }}</span>
              </li>
            @endforeach
          </ul>
        </x-accordion>
      @endif
    </div>
  </div>
</div>
