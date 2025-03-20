@props([
  'college_name' => 'College Name',
  'description' => 'No description available.',
  'acceptance_rate' => 'N/A',
  'applicants' => 'N/A',
  'button_text' => 'Read more',
  'button_link' => '',
  'applicants_accepted_percentage' => '',
  'applicants_accepted_total' => '',
  'applicants_admitted_percentage' => '',
  'applicants_admitted_total' => ''
])

<div
  x-data="counter()"
  x-init="init()"
  data-percentage="{{ $acceptance_rate }}"
  class="flex justify-between overflow-hidden rounded-xl bg-white max-lg:flex-col max-lg:flex-wrap-reverse"
>
  <!-- Left Content -->
  <div class="basis-full space-y-6 p-6 max-lg:order-1 lg:basis-2/3 lg:p-8">
    <h2 class="text-5xl-fluid font-serif max-lg:hidden">
      {{ $college_name }}
    </h2>
    <p class="">{!! $description !!}</p>
    @if($button_link)
      <a href="{{ $button_link }}" class="btn btn-outline">
        {{ $button_text }}
      </a>
    @endif
  </div>

  <!-- Right Stats Panel -->
  <div
    class="bg-chalk/30 flex basis-full flex-col p-6 max-lg:order-0 lg:basis-1/3 lg:p-8"
  >
    <div class="grow">
      <h2 class="text-5xl-fluid mb-6 font-serif lg:hidden">
        {{ $college_name }}
      </h2>
      <p class="text-oriel text-6xl-fluid font-serif font-light">
        <span
          class="align-text-bottom"
          x-text="Math.round(percentage*10)/10"
        ></span>
        %
      </p>
      <p class="font-medium tracking-wide uppercase text-sm">
        Overall Acceptance Rate <br class="max-lg:hidden"> Class of 2028
      </p>
    </div>
    <div class="divide-keyline/80 divide-y">
      @if($applicants_accepted_percentage && $applicants_accepted_total)
        <p class="py-4 font-medium uppercase text-sm">
          <span class="text-oriel">{{ $applicants_accepted_percentage }}</span>
          applicants accepted out of {{ $applicants_accepted_total }}
        </p>
        @endif
      @if($applicants_admitted_percentage)
      <p class="py-4 font-medium uppercase text-sm">
        <span class="text-oriel">{{ $applicants_admitted_percentage }}</span>
        admitted early decision {{$applicants_admitted_total ? 'out of '. $applicants_admitted_total : '' }}
      </p>
        @endif
    </div>
  </div>
</div>
