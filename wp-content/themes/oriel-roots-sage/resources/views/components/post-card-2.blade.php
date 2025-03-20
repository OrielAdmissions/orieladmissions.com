@props([
  'title' => '',
  'content' => '',
  'button_link' => '',
  'category' => '',
  'image_id' => get_post_thumbnail_id() ?: null,
])

<article
  data-tags="{{ implode(' ', wp_get_post_tags($post->ID, ['fields' => 'slugs'])) }}"
  class="group relative flex h-full flex-col items-start justify-between overflow-hidden rounded-xl bg-white transition duration-500"
>
  <div
    class="bg-sand relative aspect-16/9 w-full overflow-hidden rounded-t-lg"
  >
    @if ($image_id)
      {!! App\get_picture([$image_id], 'full', false, ['class' => 'w-full h-full object-cover aspect-16/9']) !!}
    @else
      {!! App\get_picture([444], 'full', false, ['class' => 'w-full h-full object-cover aspect-16/9']) !!}
    @endif
  </div>

  <div class="flex w-full grow flex-col gap-y-6 px-6 pt-10 pb-6">
    <div class="flex grow flex-col gap-2">
      @if ($category)
        <div>
          <a
            class="bg-sand relative z-10 rounded-full px-3 py-1.5 text-xs tracking-widest uppercase"
          >
            {{ $category }}
          </a>
        </div>
      @endif

      @if ($title)
        <h3 class="text-3xl-fluid leading-tight">
          <a href="{{ get_the_permalink() }}">
            {!! $title !!}
          </a>
        </h3>
      @endif

      @if ($content)
        <p class="line-clamp-3 min-h-[75px]">
          {!! $content !!}
        </p>
      @endif
    </div>

    <div>
      @if ($button_link)
        <a href="{{ $button_link }}" class="stretched-link">
          <span class="btn btn-outline">Read More</span>
        </a>
      @endif
    </div>
  </div>
</article>
