<section class="space-y-8 py-12 md:py-30">
  <h2 class="text-6xl-fluid text-center">
    Our <span class="text-oriel">comprehensive</span> services
  </h2>

  @if (have_rows('services'))
    @while (have_rows('services')) @php the_row(); @endphp
    <x-services-card
      grade="{{ get_sub_field('grade') }}"
      title="{{ get_sub_field('title') }}"
      description="{{ get_sub_field('description') }}"
      image_id="{{ get_sub_field('image') }}"
    >
      <x-slot name="accordion">
        <x-accordion heading="{{ get_sub_field('accordion_heading') }}">
          <ul class="grid list-image-(--red-chevron) pl-3 gap-4 md:grid-cols-2">
            @foreach (get_sub_field('accordion_items') as $item)
              <li class="text-sm pl-1">
                <span>{{ $item['text'] }}</span>
              </li>
            @endforeach
          </ul>
        </x-accordion>
      </x-slot>
    </x-services-card>
    @endwhile
  @endif
</section>
