@php
  $svgFiles = [
    ['name' => 'berkeley', 'classes' => 'w-[150px]'],
    ['name' => 'boston-college', 'classes' => 'w-[150px]'],
    ['name' => 'boston-university', 'classes' => 'w-[150px]'],
    ['name' => 'brown', 'classes' => 'w-[150px]'],
    ['name' => 'cambridge', 'classes' => 'w-[150px]'],
    ['name' => 'carnegie-mellon', 'classes' => 'w-[300px]'],
    ['name' => 'columbia-university', 'classes' => 'w-[300px]'],
    ['name' => 'cornell-university', 'classes' => 'w-[350px]'],
    ['name' => 'dartmouth', 'classes' => 'w-[150px]'],
    ['name' => 'georgetown-university', 'classes' => 'w-[150px]'],
    ['name' => 'harvard', 'classes' => 'w-[180px]'],
    ['name' => 'johns-hopkins', 'classes' => 'w-[150px]'],
    ['name' => 'mit', 'classes' => 'w-[120px]'],
    ['name' => 'northwestern', 'classes' => 'w-[150px]'],
    ['name' => 'nyu', 'classes' => 'w-[150px]'],
    ['name' => 'oxford', 'classes' => 'w-[180px]'],
    ['name' => 'princeton', 'classes' => 'w-[300px]'],
    ['name' => 'stanford', 'classes' => 'w-[150px]'],
    ['name' => 'ucla', 'classes' => 'w-[120px]'],
    ['name' => 'university-of-pennsylvania', 'classes' => 'w-[150px]'],
    ['name' => 'university-of-virginia', 'classes' => 'w-[150px]'],
    ['name' => 'yale', 'classes' => 'w-[120px]'],
  ];
@endphp

<div class="bg-cardinal full-width content-grid space-y-28 pt-28 pb-20">
  <div class="">
    <h2
      class="fade-in-bottom text-center font-serif text-5xl font-light text-white"
    >
      Our students have been accepted to:
    </h2>
  </div>

  @php
    // Split the SVG files into two equal parts
    $svgChunks = array_chunk($svgFiles, ceil(count($svgFiles) / 2));
  @endphp

  @php
    // Split the SVG files into two equal parts
    $svgChunks = array_chunk($svgFiles, ceil(count($svgFiles) / 2));
  @endphp

  <div class="full-width overflow-hidden select-none">
    <div class="marquee flex flex-col gap-6">
      @foreach ($svgChunks as $index => $row)
        <div
          class="{{ $index === 1 ? 'animate-marquee-reverse' : 'animate-marquee' }} marquee__row min-w-fit"
        >
          <div
            class="grid min-w-max auto-cols-[250px] grid-flow-col place-content-center gap-6"
          >
            @foreach ($row as $svg)
              <div
                class="logo-card flex aspect-16/9 items-center justify-center overflow-hidden rounded-xl bg-white"
              >
                {!! get_svg('images.college-logos.' . $svg['name'], 'max-w-full ' . $svg['classes']) !!}
              </div>
            @endforeach

            {{-- Duplicate content for infinite loop --}}
            @foreach ($row as $svg)
              <div
                class="logo-card flex aspect-16/9 items-center justify-center overflow-hidden rounded-xl bg-white"
                aria-hidden="true"
              >
                {!! get_svg('images.college-logos.' . $svg['name'], 'max-w-full ' . $svg['classes']) !!}
              </div>
            @endforeach
          </div>
        </div>
      @endforeach
    </div>
  </div>
</div>
