@props([
  'heading' => 'Heading',
  'icon' => get_svg('images.chevron-down',
  'size-5'),
  'accent_color' => '#EE2212',
  'summary_classes' => 'md: py-6 text-xl',
])

<details class="relative" style="--accent-color: {{ $accent_color }}">
  <summary
    class="{{ $summary_classes }} flex cursor-pointer justify-between pr-16"
  >
    {!! $heading !!}
    <span class="accordion-icon">{!! $icon !!}</span>
  </summary>
  <div class="content pt-4 pb-16">
    {{ $slot }}
  </div>
</details>
