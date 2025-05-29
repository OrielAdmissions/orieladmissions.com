<div class="bg-sand full-width-constrained">
  <div class="breakout space-y-8 py-12 md:py-21">
    @if (have_rows('testimonials'))
      @while (have_rows('testimonials')) @php the_row() @endphp
      @php
        $category    = get_sub_field('category');
        $image_id    = get_sub_field('profile_image');
        $location    = get_sub_field('location');
        $major       = get_sub_field('major');
        $degree      = get_sub_field('degree');
        $name        = get_sub_field('name');
        $title       = get_sub_field('title');
        $description = get_sub_field('description');
      @endphp

      <x-testimonial
        @if ($category) :category="$category" @endif
      @if ($image_id) :profile_image_id="$image_id" @endif
        @if ($location) :location="$location" @endif
        @if ($major) :major="$major" @endif
        @if ($degree) :degree="$degree" @endif
        @if ($name) :name="$name" @endif
      >
        @if ($image_id)
          <x-slot:profile_image>
            {!! \App\get_picture([$image_id], 'full', false, [
              'class' => 'h-auto w-full rounded-xl max-w-sm'
            ]) !!}
          </x-slot>
        @endif

        @if ($title)
          <x-slot:title>
            @php
              $sentences = explode('.', $title, 2);
            @endphp
            @if (!empty($sentences[0]))
              <span class="text-oriel">
                  {{ trim($sentences[0]) }}.
                </span>
            @endif
            {{ $sentences[1] ?? '' }}
          </x-slot>
        @endif

        @if ($description)
          <x-slot:description>
            @foreach (preg_split('/\n|\r\n?/', $description) as $paragraph)
              @if (trim($paragraph))
                <p>{{ $paragraph }}</p>
              @endif
            @endforeach
          </x-slot:description>
        @endif
      </x-testimonial>
      @endwhile
    @endif
  </div>
</div>
