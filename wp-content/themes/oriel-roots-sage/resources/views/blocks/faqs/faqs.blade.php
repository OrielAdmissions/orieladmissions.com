@php
  $faqs = get_field('faqs');
  $title = get_field('title');
@endphp

<section class="faq-section breakout py-20">
  <div class="grid grid-cols-12 place-content-center content-center gap-x-4 gap-y-20">
    <div class="md:col-span-6 lg:col-span-5 col-span-full lg:col-start-2">
      <div class="pin-content">
        @if ($title)
          <h2 class="mb-10 max-w-113 font-serif text-5xl leading-tight font-light">{!! $title !!}</h2>
        @endif
        <p class="faqStickyText max-w-42">
          Don’t see your questions?
          <br />
          <a class="text-oriel animate-underline" href="/contact/">Get in touch</a>
          to learn more.
          <br />
          We would be happy to help!
        </p>
      </div>
    </div>

    <div class="long-content md:col-span-6 lg:col-span-5 col-span-full">
      @if ($faqs)
        @foreach ($faqs as $faq)
          <x-accordion :heading="get_the_title($faq)">
            {!! apply_filters('the_content', $faq->post_content) !!}
          </x-accordion>
        @endforeach
      @endif
    </div>
  </div>
</section>
