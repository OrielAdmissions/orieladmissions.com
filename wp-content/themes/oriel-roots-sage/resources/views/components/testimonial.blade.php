@props([
  'profile_image_id' => 74,
  'category' => '',
  'location' => '',
  'major' => '',
  'degree' => '',
  'name' => '',
  'image_position' => '',
  'testimonial_type' => '',
])

<div
  class="spiral-binding relative overflow-hidden rounded-md shadow-[0_3px_3px_0_rgba(0,0,0,0.06)]"
>
  {{-- {!! wp_get_attachment_image(80, 'full', false, ['class' => 'h-full w-full object-cover absolute inset-0']) !!} --}}

  <div class="bg-chalk/70 relative grid grid-cols-12 py-6 lg:py-15">
    <div
      @class(['col-span-full flex shrink-0 flex-col gap-4 max-lg:px-6 lg:col-span-3 lg:col-start-2'])
    >
      <div @class(['lg:order-last' => $image_position == 'bottom', ''])>
        <div class="overflow-hidden rounded-md">
          @if (! empty($profile_image_id))
            {{ $profile_image }}
          @endif
        </div>
      </div>

      <ul role="list" class="divide-keyline divide-y text-xl max-lg:mb-6">
        @if ($testimonial_type == 'student')
          @if (! empty($name))
            <li class="py-3">
              {!! get_svg('images.icon-school', 'text-opium mr-2 inline-block h-5 w-5 align-baseline') !!}
              {!! $name !!}
            </li>
          @endif

          @if (! empty($location))
            <li class="py-3">
              {!! get_svg('images.icon-map-pin', 'text-opium mr-2 inline-block h-5 w-5 align-baseline') !!}
              {!! $location !!}
            </li>
          @endif

          @if (! empty($major))
            <li class="py-3">
              {!! get_svg('images.icon-book', 'text-opium mr-2 inline-block h-5 w-5 align-baseline') !!}
              {!! $major !!}
            </li>
          @endif
        @else
          @if (! empty($location))
            <li class="py-3">
              {!! get_svg('images.icon-map-pin', 'text-opium mr-2 inline-block h-5 w-5 align-baseline') !!}
              {!! $location !!}
            </li>
          @endif

          @if (! empty($major))
            <li class="py-3">
              {!! get_svg('images.icon-book', 'text-opium mr-2 inline-block h-5 w-5 align-baseline') !!}
              {!! $major !!}
            </li>
          @endif

          @if (! empty($degree))
            <li class="py-3">
              {!! get_svg('images.icon-briefcase', 'text-opium mr-2 inline-block h-5 w-5 align-baseline') !!}
              {!! $degree !!}
            </li>
          @endif

          @if (! empty($name))
            <li class="py-3">
              {!! get_svg('images.icon-school', 'text-opium mr-2 inline-block h-5 w-5 align-baseline') !!}
              {!! $name !!}
            </li>
          @endif
        @endif
      </ul>
    </div>

    <div class="col-span-full lg:col-span-6 lg:col-start-6">
      <div class="lg:border-keyline px-6 lg:border-l">
        @if (! empty($category))
          <div
            @class(['pill mb-6 text-white', 'bg-opium' => $category == 'undergrad', 'bg-stucco' => $category == 'mba'])
          >
            {{ $category }}
          </div>
        @endif

        @if (isset($title))
          <h3 class="text-2xl-fluid mb-4">
            {{ $title }}
          </h3>
        @elseif ($slot->isNotEmpty())
          <h3 class="text-2xl-fluid mb-4">
            {{ $slot('title') }}
          </h3>
        @endif

        @if (isset($description))
          <div class="space-y-6 text-xl">
            {!! $description !!}
          </div>
        @elseif ($slot->isNotEmpty())
          <div class="space-y-6 text-xl">
            {{ $slot('description') }}
          </div>
        @endif
      </div>
    </div>
  </div>
</div>
