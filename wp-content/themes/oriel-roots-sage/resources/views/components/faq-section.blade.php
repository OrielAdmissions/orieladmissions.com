@props([
  'title',
  'isFaqPage' => is_page('faqs'),
])

<section class="faq-section breakout {{ $isFaqPage ? 'mt-30' : '' }} py-20">
  <div
    class="grid grid-cols-12 place-content-center content-center gap-x-4 gap-y-20"
  >
    <div
      class="{{ $isFaqPage ? 'md:col-span-4 lg:col-span-3' : 'md:col-span-6 lg:col-span-5' }} col-span-full lg:col-start-2"
    >
      <div class="pin-content">
        <h2
          class="{{ $isFaqPage ? 'max-w-80' : 'mb-10 max-w-113' }} font-serif text-5xl leading-tight font-light"
        >
          {!! $title !!}
        </h2>
        @unless ($isFaqPage)
          <a href="/admissions-counseling/faqs/" class="btn btn-primary mb-10">
            View all FAQs
          </a>
        @endunless

        <p class="faqStickyText max-w-42">
          Don’t see your questions?
          <br />
          <a class="text-oriel animate-underline" href="/contact">
            Get in touch
          </a>
          to learn more.
          <br />
          We would be happy to help!
        </p>
      </div>
    </div>

    <div
      class="long-content {{ $isFaqPage ? 'md:col-span-8 lg:col-span-7' : 'md:col-span-6 lg:col-span-5' }} col-span-full"
    >
      {{ $slot }}
    </div>
  </div>
</section>
