@extends('layouts.app')

@section('content')
  @php
    $colleges = [
      [
        'college_name' => 'Amherst College',
        'description' => 'Unlike its primary historical rival, Williams College, Amherst has no core curriculum. It instead encourages a “flexibility and independence” to coursework that is guided by faculty advisers. Not only does Amherst offer 41 majors, but the college was one of the first to pioneer interdisciplinary fields of study, allowing students to submit proposals for independent interdisciplinary pursuits or to join unorthodox discipline-bending departments such as Law, Jurisprudence & Social Thought or American Studies.',
        'acceptance_rate' => '98',
        'applicants' => '2405',
        'lorems' => '6',
        'button_text' => 'Read more',
        'button_link' => '#',
      ],
      [
        'college_name' => 'Barnard College',
        'description' => 'Unlike its primary historical rival, Williams College, Amherst has no core curriculum. It instead encourages a “flexibility and independence” to coursework that is guided by faculty advisers. Not only does Amherst offer 41 majors, but the college was one of the first to pioneer interdisciplinary fields of study, allowing students to submit proposals for independent interdisciplinary pursuits or to join unorthodox discipline-bending departments such as Law, Jurisprudence & Social Thought or American Studies.',
        'acceptance_rate' => '98',
        'applicants' => '2200',
        'lorems' => '5',
        'button_text' => 'Read more',
        'button_link' => '#',
      ],
      [
        'college_name' => 'Boston College',
        'description' => 'Unlike its primary historical rival, Williams College, Amherst has no core curriculum. It instead encourages a “flexibility and independence” to coursework that is guided by faculty advisers. Not only does Amherst offer 41 majors, but the college was one of the first to pioneer interdisciplinary fields of study, allowing students to submit proposals for independent interdisciplinary pursuits or to join unorthodox discipline-bending departments such as Law, Jurisprudence & Social Thought or American Studies.',
        'acceptance_rate' => '98',
        'applicants' => '3000',
        'lorems' => '4',
        'button_text' => 'Read more',
        'button_link' => '#',
      ],
      [
        'college_name' => 'Brown University',
        'description' => 'Unlike its primary historical rival, Williams College, Amherst has no core curriculum. It instead encourages a “flexibility and independence” to coursework that is guided by faculty advisers. Not only does Amherst offer 41 majors, but the college was one of the first to pioneer interdisciplinary fields of study, allowing students to submit proposals for independent interdisciplinary pursuits or to join unorthodox discipline-bending departments such as Law, Jurisprudence & Social Thought or American Studies.',
        'acceptance_rate' => '98',
        'applicants' => '2800',
        'lorems' => '7',
        'button_text' => 'Read more',
        'button_link' => '#',
      ],
      [
        'college_name' => 'California Institute of Technology',
        'description' => 'Unlike its primary historical rival, Williams College, Amherst has no core curriculum. It instead encourages a “flexibility and independence” to coursework that is guided by faculty advisers. Not only does Amherst offer 41 majors, but the college was one of the first to pioneer interdisciplinary fields of study, allowing students to submit proposals for independent interdisciplinary pursuits or to join unorthodox discipline-bending departments such as Law, Jurisprudence & Social Thought or American Studies.',
        'acceptance_rate' => '98',
        'applicants' => '1800',
        'lorems' => '3',
        'button_text' => 'Read more',
        'button_link' => '#',
      ],
    ];
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
                $id = Str::kebab($college['college_name']);
              @endphp

              <li>
                <a
                  href="#{{ $id }}"
                  class="hover:text-oriel text-xl transition"
                >
                  {{ $college['college_name'] }}
                </a>
              </li>
            @endforeach
          </ul>
          <!-- Mobile Dropdown -->
          <div class="dropdown-wrapper flex justify-center md:hidden">
            <div
              x-data="dropdown({
                        links:
                          {{ json_encode(array_map(fn ($c) => ['href' => '#' . Str::kebab($c['college_name']), 'text' => $c['college_name']], $colleges)) }},
                      })"
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
          @foreach ($colleges as $college_data)
            <div id="{{ Str::kebab($college_data['college_name']) }}">
              <x-college-card
                :college_name="$college_data['college_name']"
                :description="$college_data['description']"
                :acceptance_rate="$college_data['acceptance_rate']"
                :applicants="$college_data['applicants']"
                :lorems="$college_data['lorems']"
                :button_text="$college_data['button_text']"
                :button_link="$college_data['button_link']"
              />
            </div>
          @endforeach
        </div>
      </div>
    </section>
  </div>
@endsection
