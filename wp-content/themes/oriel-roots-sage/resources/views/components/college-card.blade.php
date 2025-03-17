@props([
  'college_name' => 'College Name',
  'description' => 'No description available.',
  'acceptance_rate' => 'N/A',
  'applicants' => 'N/A',
  'lorems' => 'N/A',
  'button_text' => 'Read more',
  'button_link' => '#',
])

<div
  x-data="counter()"
  x-init="init()"
  data-percentage="{{ $acceptance_rate }}"
  class="flex justify-between overflow-hidden rounded-xl bg-white max-lg:flex-col max-lg:flex-wrap-reverse"
>
  <!-- Left Content -->
  <div class="basis-full space-y-6 p-6 max-lg:order-1 lg:basis-2/3 lg:p-10">
    <h2 class="text-fluid-48px font-serif max-lg:hidden">
      {{ $college_name }}
    </h2>
    <p class="">{!! $description !!}</p>

    <a href="{{ $button_link }}" class="btn btn-outline">
      {{ $button_text }}
    </a>
  </div>

  <!-- Right Stats Panel -->
  <div
    class="bg-chalk/30 flex basis-full flex-col p-6 max-lg:order-0 lg:basis-1/3 lg:p-10"
  >
    <div class="grow">
      <h2 class="text-fluid-48px mb-6 font-serif lg:hidden">
        {{ $college_name }}
      </h2>
      <p class="text-oriel text-6xl-fluid font-serif font-light">
        <span
          class="align-text-bottom"
          x-text="Math.round(percentage)"
        ></span>
        %
      </p>
      <p class="font-medium tracking-wide uppercase">
        Overall Acceptance Rate
        <br />
        Class of 2027
      </p>
    </div>
    <div class="divide-keyline/80 divide-y">
      <p class="py-4 font-medium uppercase">
        <span class="text-oriel">{{ $applicants }}</span>
        Applicants
      </p>
      <p class="py-4 font-medium uppercase">
        <span class="text-oriel">{{ $lorems }}</span>
        Lorems
      </p>
    </div>
  </div>
</div>
