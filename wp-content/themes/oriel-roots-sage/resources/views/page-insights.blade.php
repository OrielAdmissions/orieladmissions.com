@extends('layouts.app')

@section('content')
  @php
    $colleges = get_posts([
      'post_type' => 'college',
      'posts_per_page' => -1,
      'orderby' => 'title',
      'order' => 'ASC'
    ]);
  @endphp

  @include('partials.page-header')
  <div class="bg-chalk breakout">
    <section class="pb-30">
      <div class="grid gap-x-8 md:grid-cols-12">
        <!-- Sticky Sidebar -->
        <aside
          id="college-nav"
          class="md:border-keyline/80 h-fit py-6 md:col-span-3 md:border-t md:py-10"
        >
          <ul class="pin-content space-y-2 max-md:hidden">
            @foreach ($colleges as $college)
              @php
    $id = Str::kebab($college->post_title);
              @endphp

              <li>
                <a
                  href="#{{ $id }}"
                  class="hover:text-oriel text-xl transition"
                >
      {{ $college->post_title }}
                </a>
              </li>
            @endforeach
          </ul>
          <!-- Mobile Dropdown -->
          <div class="dropdown-wrapper flex justify-center md:hidden">
            <div
              x-data="dropdown({ links: {!! collect($colleges)->map(fn($c) => [ 'href' => '#' . Str::kebab($c->post_title), 'text' => $c->post_title ])->toJson() !!}})"
              x-on:keydown.escape.prevent.stop="close($refs.button)"
              x-on:focusin.window="! $refs.panel.contains($event.target) && close()"
              x-id="['dropdown-button']"
              class="relative z-50 w-full"
            >
              <!-- Button -->
              <button
                x-ref="button"
                x-on:click="toggle()"
                :aria-expanded="open"
                :aria-controls="$id('dropdown-button')"
                type="button"
                class="relative block flex w-full cursor-pointer items-center justify-between gap-2 rounded-full border border-transparent bg-white px-4 py-5 text-xs whitespace-nowrap text-black uppercase"
              >
                <span>Jump to School</span>
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 16 16"
                  fill="currentColor"
                  class="size-4"
                >
                  <path
                    fill-rule="evenodd"
                    d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z"
                    clip-rule="evenodd"
                  />
                </svg>
              </button>

              <!-- Panel -->
              <div
                x-ref="panel"
                x-show="open"
                x-transition.origin.top.left
                x-on:click.outside="close($refs.button)"
                :id="$id('dropdown-button')"
                x-cloak
                class="absolute left-0 z-10 mt-2 w-full min-w-48 origin-top-left rounded-lg border border-gray-200 bg-white p-1.5 shadow-sm outline-none"
              >
                <template x-for="link in links" :key="link.href">
                  <a
                    :href="link.href"
                    x-text="link.text"
                    x-on:click="close()"
                    class="flex w-full items-center rounded-md px-2 py-2 text-left text-gray-800 transition-colors hover:bg-gray-50 focus-visible:bg-gray-50 lg:py-1.5"
                  ></a>
                </template>
              </div>
            </div>
          </div>
        </aside>

        <!-- College Cards -->
        <div
          class="md:border-keyline/80 long-content insight-cards__container space-y-8 md:col-span-9 md:border-t md:pt-10"
        >
          @foreach ($colleges as $college)
  @php
    $id = Str::kebab($college->post_title);
    $description = apply_filters('the_excerpt', $college->post_excerpt);

    $acceptance_rate = get_field('acceptance_rate', $college->ID);
    $applicants = get_field('applicants', $college->ID);
    $applicants_accepted_percentage = get_field('applicants_accepted_percentage', $college->ID);
    $applicants_accepted_total = get_field('applicants_accepted_total', $college->ID);
    $applicants_admitted_percentage = get_field('applicants_admitted_percentage', $college->ID);
    $applicants_admitted_total = get_field('applicants_admitted_total', $college->ID);
    $button_text = "Read More";
    $button_link = get_permalink($college->ID);
  @endphp

  <div id="{{ $id }}">
              <x-college-card
      :college_name="$college->post_title"
      :description="$description"
      :acceptance_rate="$acceptance_rate"
      :applicants="$applicants"
      :applicants_accepted_percentage="$applicants_accepted_percentage"
      :applicants_accepted_total="$applicants_accepted_total"
      :applicants_admitted_percentage="$applicants_admitted_percentage"
      :applicants_admitted_total="$applicants_admitted_total"
      :button_text="$button_text"
      :button_link="$button_link"
              />
            </div>
          @endforeach
        </div>
      </div>
    </section>
  </div>
@endsection
