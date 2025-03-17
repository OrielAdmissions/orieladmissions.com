<article @php(post_class('h-entry full-width-constrained'))>
  <header class="text-center">
    <div class="py-20 md:py-30">
      @if (is_single())
        <div class="py-10 text-center">
          <a href="/blog">
            {!! get_svg('images.chevron-left', 'inline-block mr-2') !!}
            <span class="animate-underline">Back</span>
          </a>
        </div>
      @endif

      <h1 class="p-name fade-in-bottom text-6xl-fluid py-12 font-serif">
        {!! $title !!}
      </h1>
    </div>
    <div
      class="divide-keyline/80 flex hidden items-center justify-center divide-x text-[19px]"
    >
      @include('partials.entry-meta')
    </div>
  </header>
  <div class="full-width py-12">
    {!! App\get_picture([get_post_thumbnail_id()], 'full', false, ['class' => 'w-screen-xl mx-auto rounded-xl img-grow']) !!}
  </div>

  <div class="e-content content-grid lg:text-lg">
    @php(the_content())
  </div>

  @if ($pagination)
    <footer>
      <nav class="page-nav" aria-label="Page">
        {!! $pagination !!}
      </nav>
    </footer>
  @endif

  {{-- @php(comments_template()) --}}
  <hr class="border-keyline/80 mt-12" />
</article>
