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
  @if ($image_id)
    <div class="relative w-full overflow-clip">
      {!! App\get_picture([$image_id], 'full', false, ['class' => 'w-full object-cover rounded-t-lg  aspect-16/9']) !!}
    </div>

  @else
    <div class="relative w-full overflow-clip">
      {!! get_svg('images.featured-image-placeholder', 'w-full object-cover rounded-t-lg  aspect-16/9') !!}
    </div>
  @endif

  <div class="flex w-full grow flex-col gap-y-6 px-6 pt-10 pb-6">
    <div class="flex grow flex-col">
      @if ($title)
        <h3 class="text-3xl-fluid mb-6 leading-tight">
          {!! $title !!}
        </h3>
      @endif

      @if ($content)
        <p class="min-h-[75px]">
          {!! $content !!}
        </p>
      @endif
    </div>
  </div>
</article>
