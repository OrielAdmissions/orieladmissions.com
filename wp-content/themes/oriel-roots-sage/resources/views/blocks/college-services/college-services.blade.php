@if (have_rows('services'))
  <div class="space-y-8">
    @while (have_rows('services'))
      @php the_row(); @endphp
      <x-services-card grade="{{ get_sub_field('grade') }}" title="{{ get_sub_field('title') }}"
                       description="{{ get_sub_field('description') }}" image_id="{{ get_sub_field('image') }}">
        @if ($content = get_sub_field('accordion_content'))
          <x-slot name="accordion">
            <x-accordion heading="{{ get_sub_field('accordion_heading') }}">
              <div class="prose max-w-none">
                {!! $content !!}
              </div>
            </x-accordion>
          </x-slot>
        @endif
      </x-services-card>
    @endwhile
  </div>
@endif
