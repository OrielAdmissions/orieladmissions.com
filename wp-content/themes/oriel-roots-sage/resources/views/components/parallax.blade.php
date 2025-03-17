@props([
  'images',
])

<section class="img-container relative">
  <div class="flex justify-between">
    @foreach ($images as $index => $image)
      {!! \App\get_picture([$image['id']], 'full', false, ['loading' => false, 'class' => 'parallax-img relative', 'data-index' => $index]) !!}
    @endforeach

    <h2>Motion.dev Parallax</h2>
  </div>
</section>
