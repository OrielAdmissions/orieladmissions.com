@props([
  'title' => '',
  'content' => '',
  'button_link' => '',
  'category' => '',
  'image_id' => get_post_thumbnail_id() ?: null,
])

<article
  data-tags="{{ implode(' ', wp_get_post_tags($post->ID, ['fields' => 'slugs'])) }}"
  class="group relative flex flex-col items-start justify-between overflow-hidden rounded-xl transition duration-500 sm:h-full sm:bg-white"
>
  <div
    class="bg-sand relative aspect-square w-full overflow-clip max-sm:rounded-lg sm:aspect-16/9 sm:rounded-t-lg"
  >
    @if ($image_id)
      {!! App\get_picture([$image_id], 'full', false, ['class' => 'w-full h-full object-cover aspect-square sm:aspect-16/9']) !!}
    @else
      {!! App\get_picture([444], 'full', false, ['class' => 'w-full h-full object-cover aspect-square sm:aspect-16/9']) !!}
    @endif
  </div>

  <div class="flex w-full flex-col gap-y-6 px-6 pt-10 pb-6 sm:grow">
    <div class="flex flex-col gap-2 sm:grow">
      @if ($category)
        <div
          class="right-0 left-0 mx-auto w-full max-sm:absolute max-sm:top-6 max-sm:text-center"
        >
          <a
            class="bg-oriel sm:bg-sand relative z-10 rounded-full px-3 py-1.5 text-xs tracking-widest uppercase max-sm:text-white"
          >
            {{ $category }}
          </a>
        </div>
      @endif

      @if ($title)
        <h3 class="text-3xl max-sm:text-center sm:mb-6">
          <a href="{{ get_the_permalink() }}">
            {!! $title !!}
          </a>
        </h3>
      @endif

      @if ($content)
        <p class="line-clamp-3 min-h-[75px] max-sm:hidden">
          {!! $content !!}
        </p>
      @endif
    </div>

    <div>
      @if ($button_link)
        <a href="{{ $button_link }}" class="stretched-link max-sm:hidden">
          <span class="btn btn-primary">Read More</span>
        </a>

        <a href="{{ $button_link }}" class="stretched-link sm:hidden">
          <svg
            class="mx-auto"
            width="80"
            height="41"
            viewBox="0 0 80 41"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <rect
              x="-0.000976562"
              y="0.0859375"
              width="80.002"
              height="40"
              rx="20"
              fill="white"
            ></rect>
            <path
              fill-rule="evenodd"
              clip-rule="evenodd"
              d="M49.3661 28.2883H50.933C51.0102 27.6371 51.144 26.9747 51.3382 26.311C51.9492 24.2224 53.0556 22.467 54.401 21.2406C54.9052 20.7809 55.443 20.3956 56.0009 20.0949C55.4431 19.7941 54.9053 19.4088 54.4011 18.9491C53.0559 17.7227 51.9495 15.9674 51.3386 13.8789C51.1427 13.2092 51.0082 12.5408 50.9314 11.8839L49.3661 11.8839V13.6921H49.4188C49.474 13.9235 49.5353 14.1551 49.6031 14.3866C50.266 16.653 51.4593 18.6367 52.9785 20.0948C51.4591 21.5529 50.2657 23.5368 49.6026 25.8034C49.5367 26.0289 49.4767 26.2545 49.4227 26.48H49.3661V28.2883Z"
              fill="#29202D"
            ></path>
            <rect
              x="23.999"
              y="18.8838"
              width="29"
              height="2"
              fill="#29202D"
            ></rect>
          </svg>
        </a>
      @endif
    </div>
  </div>
</article>
