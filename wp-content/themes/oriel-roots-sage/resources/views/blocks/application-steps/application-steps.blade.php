@php
  $headline = get_field('headline');

  $steps = [
    [
      'label'    => 'step 1',
      'bg_class' => 'bg-sand',
      'title'    => get_field('step_1_title'),
      'subtitle' => get_field('step_1_subtitle'),
    ],
    [
      'label'    => 'step 2',
      'bg_class' => 'bg-[#F6ADAE]',
      'title'    => get_field('step_2_title'),
      'subtitle' => get_field('step_2_subtitle'),
    ],
    [
      'label'    => 'step 3',
      'bg_class' => 'bg-[#F07677]',
      'title'    => get_field('step_3_title'),
      'subtitle' => get_field('step_3_subtitle'),
    ],
    [
      'label'    => 'step 4',
      'bg_class' => 'bg-oriel',
      'title'    => get_field('step_4_title'),
      'subtitle' => get_field('step_4_subtitle'),
    ],
  ];
@endphp

<div class="bg-cardinal full-width py-12 md:py-30">
  <div class="breakout">
    @if ($headline)
      <div>
        <h2 class="fade-in-bottom text-6xl-fluid text-center text-white max-md:mb-6 md:-mb-16">
          {{ $headline }}
        </h2>
      </div>
    @endif

    <div class="max-md:hidden">
      {!! get_svg('images.steps-arrow', 'w-full') !!}
    </div>

    <div>
      <ul class="divide-keyline/10 flex text-white max-md:flex-col max-md:divide-y md:divide-x">
        @foreach ($steps as $step)
          <li class="basis-1/4 space-y-4 px-4 py-6 text-center">
            <span class="pill text-black {{ $step['bg_class'] }}">
              {{ $step['label'] }}
            </span>
            <p class="text-2xl-fluid font-medium">{{ $step['title'] }}</p>
            @if (!empty($step['subtitle']))
              <p>{{ $step['subtitle'] }}</p>
            @endif
          </li>
        @endforeach
      </ul>
    </div>
  </div>
</div>
