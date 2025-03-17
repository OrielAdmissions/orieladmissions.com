@props([
  'title' => null,
  'accordions' => [],
  'accent_color' => '#EE2212',
  'summary_classes' => 'md: py-4 text-xl',
])

@if (is_array($accordions) && count($accordions))
  <div class="accordion-section" style="--accent-color: {{ $accent_color }}">
    @foreach ($accordions as $accordion)
      <details class="relative">
        <summary
          class="{{ $summary_classes }} flex cursor-pointer justify-between pr-16"
        >
          {{ $accordion['heading'] }}
          <span class="accordion-icon">
            {!! get_svg('images.chevron-down', '') !!}
          </span>
        </summary>
        <div class="content pt-4 pb-16">
          @if (isset($accordion['content']))
            {!! $accordion['content'] !!}
          @endif
        </div>
      </details>
    @endforeach
  </div>
@endif
