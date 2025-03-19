@extends('layouts.app')

@section('content')
  @include('partials.page-header')
  <div class="full-width content-grid">
    <div class="postContainer pb-12">
      @if (! have_posts())
        <x-alert type="warning">
          {!! __('Sorry, no results were found.', 'sage') !!}
        </x-alert>
        {!! get_search_form(false) !!}
      @endif

      @php
        // Set current page and max pages from the main query.
        global $wp_query;
  $current_page = max(1, get_query_var('paged'));
        $max_pages = $wp_query->max_num_pages;

        $current_post_type = get_query_var('post_type') ?: 'post';
      @endphp
      <div class="postContainerContent"
           x-data="filterPosts('<?php echo admin_url('admin-ajax.php'); ?>', 'numbered', { initialPage:{{$current_page}}, maxPages:{{$max_pages}}, postType:'{{$current_post_type}}' })"
           x-init="initPagination()"
      >

        <div class="overflow-x-clip">
          @php
            // Get categories and filter out Uncategorized
            $categories = get_categories();
            $filteredCategories = array_filter($categories, function($cat) {
              return $cat->name !== 'Uncategorized';
            });
          @endphp

          @if (!empty($filteredCategories))
            <ul class="flex gap-4 py-12 overflow-x-auto">
              <li>
                <button
                  @click="filterPosts(null)"
                  :class="!category ? 'bg-cardinal text-white' : 'bg-white text-black'"
                  class="hover:bg-cardinal hover:border-cardinal min-w-48 cursor-pointer rounded-full border border-keyline/80 py-4 text-center leading-tight transition duration-300 hover:text-white"
                >
                  All Posts
                </button>
              </li>
              @foreach ($filteredCategories as $category)
                <li>
                  <button
                    @click="filterPosts({{ $category->term_id }})"
                    :class="category == {{ $category->term_id }} ? 'bg-cardinal text-white' : 'bg-white text-black'"
                    class="hover:bg-cardinal hover:border-cardinal min-w-48 cursor-pointer rounded-full border border-keyline/80 py-4 text-center leading-tight transition duration-300 hover:text-white"
                  >
                    {{ esc_html($category->name) }}
                  </button>
                </li>
              @endforeach
            </ul>
          @endif

        </div>
        <!-- Default posts (server-rendered on initial load) -->
        <div x-show="showDefault" class="grid grid-cols-1 md:grid-cols-2 gap-6">
          @while (have_posts())
            @php(the_post())
            @includeFirst(['partials.content-' . get_post_type(), 'partials.content'])
          @endwhile
        </div>

        <!-- Skeleton Loader -->
        <div x-show="loading" class="grid grid-cols-1 md:grid-cols-2 gap-6">
          <template x-for="i in limit" :key="i">
            <div class="smooth-pulse">
              <div
                class="group relative flex h-full flex-col items-start justify-between overflow-hidden rounded-xl bg-white transition duration-500 ">
                <div class="relative w-full overflow-clip">
                  <div class="w-full object-cover rounded-t-lg aspect-16/9 bg-sand/80"></div>
                </div>
                <div class="flex w-full grow flex-col gap-y-6 px-6 pt-10 pb-6">
                  <div class="flex grow flex-col">
                    <div>
                      <div class="w-20 h-7 bg-sand/80 rounded-full"></div>
                    </div>
                    <div class="mt-3 h-36 font-serif text-3xl bg-sand/80 rounded w-full"></div>
                  </div>
                  <div>
                    <div class="h-12 w-42 bg-sand/80 rounded-full">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </template>
        </div>

        <!-- AJAX posts container for filtered or paginated requests -->
        <div x-show="!loading" x-show="!showDefault" class="grid grid-cols-1 md:grid-cols-2 gap-6" x-html="posts"></div>
        @if ($max_pages > 1)
          <nav class="py-12 flex items-center space-x-2 justify-center">
            <!-- Left Chevron -->
            <button
              @click="changePage(page - 1)"
              :disabled="page === 1"
              class="p-2 sm:h-15 sm:w-15 h-10 w-10 rounded-full flex items-center justify-center hover:bg-cardinal hover:text-white bg-white border-keyline/80 border disabled:opacity-50 duration-300 cursor-pointer transition-colors"
            >
              {!! get_svg('images.chevron-left') !!}
            </button>

            <!-- Page Numbers -->
            <template x-for="(pageNumber, index) in getVisiblePages()" :key="index">
              <template x-if="pageNumber">
                <button
                  @click="changePage(pageNumber)"
                  :class="{
        'active bg-cardinal text-white': page === pageNumber,
        'bg-white text-black': page !== pageNumber
      }"
                  class="border-keyline/80 border flex sm:h-15 sm:w-15 h-10 w-10 items-center justify-center cursor-pointer rounded-full hover:bg-cardinal hover:text-white duration-300 transition-colors"
                >
                  <span x-text="pageNumber"></span>
                </button>
              </template>
              <template x-if="!pageNumber">
                <!-- Ellipses -->
                <span class="px-3">…</span>
              </template>
            </template>


            <!-- Right Chevron -->
            <button
              @click="changePage(page + 1)"
              :disabled="page === maxPages"
              class="p-2 rounded-full flex items-center justify-center sm:h-15 sm:w-15 h-10 w-10 hover:bg-cardinal border-keyline/80 border bg-white hover:text-white disabled:opacity-50 duration-300 transition-colors cursor-pointer"
            >
              {!! get_svg('images.chevron-right') !!}
            </button>
          </nav>
        @endif
      </div>
    </div>
@endsection
