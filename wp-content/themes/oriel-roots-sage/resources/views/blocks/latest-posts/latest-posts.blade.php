<div class="full-width overflow-x-clip py-14 md:py-25">
  <div class="grid grid-cols-1 gap-8">
    <div class="col-start-1 row-start-1">
      <div class="content-grid" id="card-slider">
        <div class="flex items-center justify-between">
          <h2 class="text-3xl md:text-5xl">Latest Posts</h2>
          <a href="/blog" class="btn btn-outline sm:hidden">Show all</a>
        </div>
      </div>
    </div>
    <div class="content-grid overflow-hidden">
      <div>
        @php
          $args = [
            'post_type' => 'post',
            'posts_per_page' => 8,
          ];

          $latest_query = new WP_Query($args);
        @endphp

        @if ($latest_query->have_posts())
          <div id="cardSlider" class="swiper !overflow-visible">
            <div class="swiper-wrapper">
              @while ($latest_query->have_posts())
                @php($latest_query->the_post())
                <div class="swiper-slide !h-auto md:max-w-[400px] md:grow">
                  <x-post-card
                    :title="get_the_title()"
                    :content="get_the_excerpt()"
                    :button_link="get_the_permalink()"
                  ></x-post-card>
                </div>
              @endwhile
            </div>
          </div>
          <div class="relative mx-auto flex w-36">
            <div
              class="swiper-pagination-4 text-white"
              style="--swiper-theme-color: var(--color-black)"
            ></div>
          </div>
        @endif

        @php(wp_reset_postdata())
      </div>
    </div>
    <div class="col-start-1 max-sm:hidden md:row-start-1">
      <div class="content-grid">
        <div class="relative flex items-center justify-end gap-x-4">
          <a href="/blog" class="btn btn-outline">Show all</a>
          <x-button-round
            direction="left"
            classes="swiper-button-prev--chevron"
          ></x-button-round>
          <x-button-round
            classes="swiper-button-next--chevron"
          ></x-button-round>
        </div>
      </div>
    </div>
  </div>
</div>
