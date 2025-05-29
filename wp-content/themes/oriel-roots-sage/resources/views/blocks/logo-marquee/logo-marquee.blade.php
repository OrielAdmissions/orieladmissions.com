@php
  // Assume you're using an ACF repeater named 'logos'
  $logos = get_field('logos');
@endphp

@if ($logos)
<div class="bg-cardinal full-width content-grid space-y-28 pt-28 pb-20">
  <div>
    <h2
      class="fade-in-bottom text-center font-serif text-5xl font-light text-white"
    >

      {!! get_field('section_headline') ?? 'Our students have been accepted to:' !!}
    </h2>
  </div>

  @php
    // If you'd like to chunk the logos for marquee rows
    $svgChunks = array_chunk($logos, ceil(count($logos) / 2));
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
            @foreach ($row as $logo)
              @php
                // Retrieve the image and the width value from each repeater row.
                // Ensure your ACF fields are named appropriately (here assumed as 'logo_image' and 'logo_width').
                $imageID = $logo['logo_image']['ID'];
                // Use the slider value and append 'px' if provided, default to 150px otherwise.
                $logoWidth = $logo['logo_width'] ? $logo['logo_width'] . 'px' : '150px';
              @endphp
              <div class="logo-card flex aspect-16/9 items-center justify-center overflow-hidden rounded-xl bg-white">
                {!! wp_get_attachment_image($imageID, 'full', false, ['style' => "width: $logoWidth;"]) !!}
              </div>
            @endforeach

            {{-- Duplicate the row content for infinite scrolling effect --}}
            @foreach ($row as $logo)
              @php
                $imageID = $logo['logo_image']['ID'];
                $logoWidth = $logo['logo_width'] ? $logo['logo_width'] . 'px' : '150px';
              @endphp
              <div class="logo-card flex aspect-16/9 items-center justify-center overflow-hidden rounded-xl bg-white" aria-hidden="true">
                {!! wp_get_attachment_image($imageID, 'full', false, ['style' => "width: $logoWidth;"]) !!}
              </div>
            @endforeach
          </div>
        </div>
      @endforeach
    </div>
  </div>
</div>
@endif
