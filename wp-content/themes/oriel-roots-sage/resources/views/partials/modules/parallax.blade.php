@props(['images'])

<section class="relative w-full h-screen overflow-hidden">
  <div class="absolute top-0 left-0 w-full h-full z-0">
    @foreach ($images as $index => $image)
      <div
        class="parallax-img absolute inset-0 w-full h-full bg-cover bg-center"
        style="background-image: url('{{ $image['src'] }}'); z-index: {{ count($images) - $index }};"
        data-speed="{{ 0.2 + ($index * 0.05) }}">
      </div>
    @endforeach
  </div>

  <div class="relative z-10 flex flex-col items-center justify-center h-full text-white text-5xl font-bold">
    <h1>Motion.dev Parallax</h1>
  </div>
</section>

