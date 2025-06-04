@php
  $headline_1 = get_field('headline_1');
  $content_1 = get_field('content_1');
  $image_1 = get_field('image_1'); // top-left image
  $image_2 = get_field('image_2'); // parallax overlay image

  $headline_2 = get_field('headline_2');
  $content_2 = get_field('content_2');
  $image_3 = get_field('image_3'); // image beside headline_2

  $image_4 = get_field('image_4'); // second parallax image in content_2

  $headline_3 = get_field('headline_3');
  $content_3 = get_field('content_3');
  $image_5 = get_field('image_5'); // far left image in section 3
@endphp

<div class="breakout relative space-y-12 py-12 md:py-30">
  <h2 class="text-6xl-fluid mx-auto max-w-4xl text-center font-serif">
    {!! $headline_1 !!}
  </h2>
  <div class="flex justify-center gap-8 max-lg:flex-col">
    <div class="lg:basis-[550px]">
      @if ($image_1)
        {!! wp_get_attachment_image($image_1, 'full', false, ['class' => 'w-full h-auto object-cover rounded-xl']) !!}
      @endif
    </div>
    <div class="lg:basis-[550px]">
      <div class="md:text-lg">
        {!! $content_1 !!}
      </div>
    </div>
  </div>
  <div class="parallax right-12 bottom-0 mx-auto lg:absolute" data-speed="1.1">
    <div class="relative">
      @if ($image_2)
        {!! wp_get_attachment_image($image_2, 'full', false, ['class' => 'object-cover max-lg:w-full mx-auto rounded-xl']) !!}
      @endif
      {!! get_svg('images.window-full', 'max-lg:hidden stroke-cardinal/40 scale-y-75 text-transparent absolute h-auto w-[500px] left-1/2 top-1/2 -translate-1/2') !!}
    </div>
  </div>
</div>

<div class="bg-sand full-width-constrained">
  <div class="breakout py-12 lg:py-30">
    <h2 class="text-6xl-fluid mb-12 md:mb-30 max-w-2xl max-lg:text-center">
      {!! $headline_2 !!}
    </h2>
    <div class="flex justify-center gap-8 max-lg:flex-col">
      <div class="basis-7/12 max-lg:order-last">
        @if ($image_3)
          {!! wp_get_attachment_image($image_3, 'full', false, ['class' => 'w-full h-auto object-cover rounded-xl']) !!}
        @endif
      </div>
      <div class="basis-5/12">
        <div class="mx-auto space-y-8 md:text-lg lg:max-w-md">
          {!! $content_2 !!}
        </div>
      </div>
    </div>
    @if ($image_4)
      <div class="mt-24 max-lg:hidden">
        {!! wp_get_attachment_image($image_4, 'full', false, [
          'class' => 'w-full h-auto object-cover relative rounded-xl',
          'data-speed' => '1.05',
        ]) !!}
      </div>
    @endif
  </div>
</div>

<div class="bg-sand full-width content-grid pb-12 lg:pb-30">
  <div class="breakout">
    <div class="grid gap-8 lg:grid-cols-12">
      <div class="col-start-1 max-lg:order-last lg:col-span-3">
        @if ($image_5)
          {!! wp_get_attachment_image($image_5, 'full', false, [
            'class' => 'w-full h-auto object-cover rounded-xl',
            'data-speed' => '1.1',
          ]) !!}
        @endif
      </div>
      <div class="lg:col-span-6 lg:col-start-5">
        <div class="mx-auto space-y-10 lg:max-w-2xl">
          <h2 class="text-6xl-fluid leading-none">
            {!! $headline_3 !!}
          </h2>
          <div class="md:text-lg space-y-6">
            {!! $content_3 !!}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
