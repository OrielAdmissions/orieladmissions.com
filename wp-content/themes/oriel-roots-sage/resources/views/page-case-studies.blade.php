@extends('layouts.app')

@section('content')
  @include('partials.page-header')
  <div class="full-width content-grid">
    <div class="postContainer pb-12">
      @php
        $args = [
          'post_type' => 'case_study',
          'posts_per_page' => 8,
          'paged' => max(1, get_query_var('paged')),
        ];
        $wp_query = new WP_Query($args);
        $current_page = max(1, get_query_var('paged'));
        $max_pages = $wp_query->max_num_pages;
        $current_post_type = 'case_study';
      @endphp

      @if (! $wp_query->have_posts())
        <x-alert type="warning">
          {!! __('Sorry, no results were found.', 'sage') !!}
        </x-alert>
        {!! get_search_form(false) !!}
      @else
        <div
          class="postContainerContent"
          x-data="filterPosts('{{ admin_url('admin-ajax.php') }}', 'numbered', {
                    initialPage: {{ $current_page }},
                    maxPages: {{ $max_pages }},
                    postType: '{{ $current_post_type }}',
                  })"
          x-init="initPagination()"
        >
          <div>
            @php
              // Check if at least one post has a category (excluding Uncategorized)
              $has_categories = false;
              foreach ($wp_query->posts as $post) {
                $terms = get_the_terms($post->ID, 'category');
                if (! empty($terms) && ! is_wp_error($terms)) {
                  $filtered = array_filter($terms, function ($term) {
                    return $term->name !== 'Uncategorized';
                  });
                  if (! empty($filtered)) {
                    $has_categories = true;
                    break;
                  }
                }
              }
            @endphp

            @if ($has_categories)
              <ul class="flex gap-4 overflow-x-auto py-12">
                <li>
                  <button
                    @click="filterPosts(null)"
                    :class="!category ? 'bg-cardinal text-white' : 'bg-white text-black'"
                    class="hover:bg-cardinal hover:border-cardinal border-keyline/80 min-w-48 cursor-pointer rounded-full border py-4 text-center leading-tight transition duration-300 hover:text-white"
                  >
                    All Posts
                  </button>
                </li>
                @foreach (get_categories(['taxonomy' => 'category', 'hide_empty' => true]) as $cat)
                  @if ($cat->name === 'Uncategorized')
                    @continue
                  @endif

                  <li>
                    <button
                      @click="filterPosts({{ $cat->term_id }})"
                      :class="category == {{ $cat->term_id }} ? 'bg-cardinal text-white' : 'bg-white text-black'"
                      class="hover:bg-cardinal hover:border-cardinal border-keyline/80 min-w-48 cursor-pointer rounded-full border py-4 text-center leading-tight transition duration-300 hover:text-white"
                    >
                      {{ esc_html($cat->name) }}
                    </button>
                  </li>
                @endforeach
              </ul>
            @endif
          </div>
          <!-- Default posts (server-rendered on initial load) -->
          <div
            x-show="showDefault"
            class="grid grid-cols-1 gap-6 md:grid-cols-2"
          >
            @foreach ($wp_query->posts as $post)
              @php
                setup_postdata($post);
              @endphp

              @includeFirst(['partials.content-case_study', 'partials.content'])
            @endforeach

            @php
              wp_reset_postdata();
            @endphp
          </div>

          <!-- Skeleton Loader -->
          <div
            x-show="loading"
            class="grid grid-cols-1 gap-6 md:grid-cols-2"
          >
            <template x-for="i in limit" :key="i">
              <div class="smooth-pulse">
                <div
                  class="group relative flex h-full flex-col items-start justify-between overflow-hidden rounded-xl bg-white transition duration-500"
                >
                  <div class="relative w-full overflow-clip">
                    <div
                      class="bg-sand/80 aspect-16/9 w-full rounded-t-lg object-cover"
                    ></div>
                  </div>
                  <div
                    class="flex w-full grow flex-col gap-y-6 px-6 pt-10 pb-6"
                  >
                    <div class="flex grow flex-col">
                      <div>
                        <div class="bg-sand/80 h-7 w-20 rounded-full"></div>
                      </div>
                      <div
                        class="bg-sand/80 text-3xl-fluid mt-3 h-36 w-full rounded leading-tight"
                      ></div>
                    </div>
                    <div>
                      <div class="bg-sand/80 h-12 w-42 rounded-full"></div>
                    </div>
                  </div>
                </div>
              </div>
            </template>
          </div>

          <!-- AJAX posts container for filtered or paginated requests -->
          <div
            x-show="!loading && !showDefault"
            class="grid grid-cols-1 gap-6 md:grid-cols-2"
            x-html="posts"
          ></div>
          @if ($max_pages > 1)
            <nav class="flex items-center justify-center space-x-2 py-12">
              <!-- Left Chevron -->
              <button
                @click="changePage(page - 1)"
                :disabled="page === 1"
                class="hover:bg-cardinal border-keyline/80 flex h-15 w-15 cursor-pointer items-center justify-center rounded-full border bg-white p-2 transition-colors duration-300 hover:text-white disabled:opacity-50"
              >
                {!! get_svg('images.chevron-left') !!}
              </button>

              <!-- Page Numbers -->
              <template
                x-for="pageNumber in Array.from({ length: maxPages }, (v, i) => i + 1)"
                :key="pageNumber"
              >
                <button
                  @click="changePage(pageNumber)"
                  :class="{
        'active bg-cardinal text-white': page === pageNumber,
        'bg-white text-black': page !== pageNumber
      }"
                  class="border-keyline/80 hover:bg-cardinal flex h-15 w-15 cursor-pointer items-center justify-center rounded-full border transition-colors duration-300 hover:text-white"
                >
                  <span x-text="pageNumber"></span>
                </button>
              </template>

              <!-- Right Chevron -->
              <button
                @click="changePage(page + 1)"
                :disabled="page === maxPages"
                class="hover:bg-cardinal border-keyline/80 flex h-15 w-15 cursor-pointer items-center justify-center rounded-full border bg-white p-2 transition-colors duration-300 hover:text-white disabled:opacity-50"
              >
                {!! get_svg('images.chevron-right') !!}
              </button>
            </nav>
          @endif
        </div>
      @endif
    </div>
  </div>
@endsection
