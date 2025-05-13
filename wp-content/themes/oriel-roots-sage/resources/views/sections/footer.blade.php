<section class="content-grid py-12 sm:py-21 md:bg-[#E8D6C9]">
  <div class="breakout grid grid-cols-12 items-center gap-4">
    <div class="col-span-12 md:col-span-5">
      <h3 class="text-center font-sans text-2xl font-normal md:text-left">
        Sign up for our newsletter </h3>
    </div>
    <div class="col-span-12 md:col-span-7">
      <div class="mx-auto md:mr-0">
        <div class="flex flex-wrap">

          <div
            class="border-keyline/80 relative w-full rounded-full border bg-white px-6 leading-tight text-black h-20">
            {!! do_shortcode('[forminator_form id="465"]') !!}
            {!! get_svg('images.chevron-right', 'absolute right-6 top-1/2 -translate-y-1/2') !!}
          </div>

        </div>
      </div>
    </div>
  </div>
</section>

<footer class="content-grid bg-sand relative" role="contentinfo">
  <div class="breakout">
    {!! get_svg('images.footer-window', 'absolute top-0 right-8 w-1/3 max-sm:hidden text-cardinal/40') !!}
    <section class="overflow-hidden">
      <div class="pb-6 lg:pb-37">
        <div class="flex flex-wrap pt-6 md:pt-13 lg:items-center">
          <div class="w-full md:w-2/3">
            <h2 class="text-6xl-fluid mb-8 max-w-100">
              Admissions Help That’s Anything but Ordinary </h2>
            <div class="flex flex-wrap gap-8 md:mb-0 md:gap-x-22">
              <div class="w-full md:w-auto">
                <?php
                wp_nav_menu([
                  'theme_location' => 'footer_menu',
                  'container' => false,
                  'menu_class' => 'space-y-2',
                  'fallback_cb' => false,
                  'link_before' => '<span class="animate-underline inline-block">',
                  'link_after' => '</span>',
                ]);
                ?>
              </div>

              <div class="w-full max-md:order-last md:w-auto">
                <h6 class="mb-2 text-black/40">Address</h6>
                <?php if (have_rows('footer_addresses', 'option')) : ?>

                  <?php while (have_rows('footer_addresses', 'option')) : the_row(); ?>
                <address class="leading-relaxed not-italic mb-4">
                  {!! nl2br(esc_html(get_sub_field('address_text'))) !!}
                </address>
                <?php endwhile; ?><?php endif; ?>
              </div>

              <div class="w-full md:w-auto">
                <h6 class="mb-2 text-black/40">Testimonials</h6>
                <?php if (have_rows('footer_social_links', 'option')) : ?>
                <ul class="space-y-2">
                    <?php while (have_rows('footer_social_links', 'option')) : the_row(); ?><?php $link = get_sub_field('link'); ?><?php if ($link) : ?>
                  <li>
                    <a class="animate-underline group relative inline-flex items-center justify-center"
                       href="{!! esc_url($link['url']) !!}" target="{{ $link['target'] ?? '_self' }}">
                      {!! esc_html($link['title']) !!}
                      <div class="relative ml-1 inline-block h-5 w-5 overflow-hidden">
                        <div
                          class="absolute transition-all duration-200 group-hover:-translate-y-5 group-hover:translate-x-4">
                          <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"
                               class="h-5 w-5">
                            <path
                              d="M3.64645 11.3536C3.45118 11.1583 3.45118 10.8417 3.64645 10.6465L10.2929 4L6 4C5.72386 4 5.5 3.77614 5.5 3.5C5.5 3.22386 5.72386 3 6 3L11.5 3C11.6326 3 11.7598 3.05268 11.8536 3.14645C11.9473 3.24022 12 3.36739 12 3.5L12 9.00001C12 9.27615 11.7761 9.50001 11.5 9.50001C11.2239 9.50001 11 9.27615 11 9.00001V4.70711L4.35355 11.3536C4.15829 11.5488 3.84171 11.5488 3.64645 11.3536Z"
                              fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path>
                          </svg>
                          <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"
                               class="h-5 w-5 -translate-x-4">
                            <path
                              d="M3.64645 11.3536C3.45118 11.1583 3.45118 10.8417 3.64645 10.6465L10.2929 4L6 4C5.72386 4 5.5 3.77614 5.5 3.5C5.5 3.22386 5.72386 3 6 3L11.5 3C11.6326 3 11.7598 3.05268 11.8536 3.14645C11.9473 3.24022 12 3.36739 12 3.5L12 9.00001C12 9.27615 11.7761 9.50001 11.5 9.50001C11.2239 9.50001 11 9.27615 11 9.00001V4.70711L4.35355 11.3536C4.15829 11.5488 3.84171 11.5488 3.64645 11.3536Z"
                              fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path>
                          </svg>
                        </div>
                      </div>
                    </a>
                  </li>
                  <?php endif; ?><?php endwhile; ?>
                </ul>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="max-lg:pt-6">
        <div class="text-oriel">
          <a href="{{ home_url('/') }}">
            {!! get_svg('images.logo-large', 'max-w-full h-auto') !!}
          </a>
        </div>
        <div class="flex flex-wrap items-center pt-6 pb-5 max-lg:gap-4">
          <div class="w-full max-lg:order-last lg:w-1/2">
            <p class="text-sm">
              ©{{ get_bloginfo('name') }} {{ date('Y') }}. All Rights Reserved </p>
          </div>
          <div class="w-full lg:w-1/2">
            <div class="flex flex-wrap justify-end max-md:space-y-4 md:gap-6">
              @if (has_nav_menu('footer_legal_menu'))
                {!! wp_nav_menu([
                  'theme_location' => 'footer_legal_menu',
                  'container' => false,
                  'menu_class' => 'flex flex-wrap justify-end max-md:space-y-4 md:gap-6',
                  'fallback_cb' => false,
                  'depth' => 1,
                  'link_before' => '<span class="animate-underline inline-block text-sm font-light">',
                  'link_after' => '</span>',
                  'echo' => false
                ]) !!}
              @endif
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</footer>
