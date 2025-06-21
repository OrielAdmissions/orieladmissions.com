<article @php(post_class('h-entry full-width-constrained'))>
  <header class="text-center">
    <div class="pt-20 md:py-30">
      @if (is_singular('post'))
        <a href="/blog/">
          {!! get_svg('images.chevron-left', 'inline-block mr-2') !!}
          <span class="animate-underline">Back</span> </a>
      @elseif (is_singular('case_study'))
        <a href="/case-studies/">
          {!! get_svg('images.chevron-left', 'inline-block mr-2') !!}
          <span class="animate-underline">Back</span> </a>
      @elseif (is_singular('college'))
        <a href="/resources/insights/">
          {!! get_svg('images.chevron-left', 'inline-block mr-2') !!}
          <span class="animate-underline">Back</span> </a>
      @endif


      <h1 class="p-name fade-in-bottom text-6xl-fluid py-12 font-serif">
        {!! $title !!}
      </h1>
      @if (!is_singular('case_study'))
        <div class="divide-keyline/80 flex items-center justify-center divide-x text-[19px]">
          @include('partials.entry-meta')
        </div>
      @endif
    </div>
  </header>
  <div class="full-width pb-12">
    {!! wp_get_attachment_image(get_post_thumbnail_id(), 'full', false, ['class' => 'w-screen-lg object-cover max-h-125 mx-auto rounded-xl img-grow']) !!}
  </div>

  <div class="e-content full-width-constrained lg:text-lg">
      @php(the_content())
      <div class="text-center mt-12">
        <a href="/contact/" class="btn btn-primary">Contact Us</a>
    </div>
  </div>

  @if ($pagination)
    <footer>
      <nav class="page-nav" aria-label="Page">
        {!! $pagination !!}
      </nav>
    </footer>
  @endif

  {{-- @php(comments_template()) --}}
  <hr class="border-keyline/80 mt-12"/>
</article>
