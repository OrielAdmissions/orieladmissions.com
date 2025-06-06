<div class="bg-sand">
  <div class="space-y-8 py-12 md:py-21">
    @if (have_rows('testimonials'))
      @while (have_rows('testimonials'))
        @php the_row();

        $category    = get_sub_field('category');
        $image_id    = get_sub_field('profile_image');
        $location    = get_sub_field('location');
        $major       = get_sub_field('major');
        $degree      = get_sub_field('degree');
        $name        = get_sub_field('name');
        $title       = get_sub_field('title');
        $description = get_sub_field('description');

        // Title Formatting
        $sentences = explode('.', $title, 2);
        $title_html = '';
        if (!empty($sentences[0])) {
          $title_html .= '<span class="text-oriel">' . trim($sentences[0]) . '.</span>';
        }
        $title_html .= $sentences[1] ?? '';

        // Description Formatting
        $description_html = '';
        if ($description) {
          foreach (preg_split('/\n|\r\n?/', $description) as $paragraph) {
            if (trim($paragraph)) {
              $description_html .= '<p>' . $paragraph . '</p>';
            }
          }
        }
        @endphp

        <div class="spiral-binding relative overflow-hidden rounded-md shadow-[0_3px_3px_0_rgba(0,0,0,0.06)]">
          <div class="bg-chalk/70 relative grid grid-cols-12 py-6 lg:py-15">
            <div class="col-span-full flex shrink-0 flex-col gap-4 max-lg:px-6 lg:col-span-3 lg:col-start-2">
              <div>
                <div class="overflow-hidden rounded-md">
                  {!! wp_get_attachment_image($image_id, 'full', false, [ 'class' => 'h-auto w-full rounded-xl max-w-sm'])  !!}
                </div>
              </div>

              <ul role="list" class="divide-keyline divide-y text-xl max-lg:mb-6">
                @if ($category === 'student')
                  @if ($name)
                    <li
                      class="py-3">{!! get_svg('images.icon-school', 'text-opium mr-2 inline-block h-5 w-5 align-baseline') !!}{{ $name }}</li>
                  @endif
                  @if ($location)
                    <li
                      class="py-3">{!! get_svg('images.icon-map-pin', 'text-opium mr-2 inline-block h-5 w-5 align-baseline') !!}{{ $location }}</li>
                  @endif
                  @if ($major)
                    <li
                      class="py-3">{!! get_svg('images.icon-book', 'text-opium mr-2 inline-block h-5 w-5 align-baseline') !!}{{ $major }}</li>
                  @endif
                @else
                  @if ($location)
                    <li
                      class="py-3">{!! get_svg('images.icon-map-pin', 'text-opium mr-2 inline-block h-5 w-5 align-baseline') !!}{{ $location }}</li>
                  @endif
                  @if ($major)
                    <li
                      class="py-3">{!! get_svg('images.icon-book', 'text-opium mr-2 inline-block h-5 w-5 align-baseline') !!}{{ $major }}</li>
                  @endif
                  @if ($degree)
                    <li
                      class="py-3">{!! get_svg('images.icon-briefcase', 'text-opium mr-2 inline-block h-5 w-5 align-baseline') !!}{{ $degree }}</li>
                  @endif
                  @if ($name)
                    <li
                      class="py-3">{!! get_svg('images.icon-school', 'text-opium mr-2 inline-block h-5 w-5 align-baseline') !!}{{ $name }}</li>
                  @endif
                @endif
              </ul>
            </div>

            <div class="col-span-full lg:col-span-6 lg:col-start-6">
              <div class="lg:border-keyline px-6 lg:border-l">
                @if ($category)
                  <div
                    class="pill mb-6 text-white {{ $category === 'undergrad' ? 'bg-opium' : ($category === 'mba' ? 'bg-stucco' : '') }}">
                    {{ $category }}
                  </div>
                @endif

                @if ($title_html)
                  <h3 class="text-2xl-fluid mb-4">{!! $title_html !!}</h3>
                @endif

                @if ($description_html)
                  <div class="space-y-6 text-xl">{!! $description_html !!}</div>
                @endif
              </div>
            </div>
          </div>
        </div>

      @endwhile
    @endif
  </div>
</div>
