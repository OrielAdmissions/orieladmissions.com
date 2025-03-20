@extends('layouts.app')

@section('content')
  @php
    $colleges = [
      [
        'college_name' => 'Brown',
        'description' => "Brown University, an Ivy League institution in Providence, Rhode Island, is best known for its open curriculum, which allows students to explore their academic interests without general education requirements. It excels in liberal arts, computer science, applied mathematics, economics, international relations, and biomedical sciences. The Warren Alpert Medical School is highly regarded for its medical education and research. Brown is also known for its emphasis on interdisciplinary studies, student-driven learning, and a collaborative academic culture, making it a leader in innovative and flexible education.",
        'acceptance_rate' => 5.2,
        'applicants' => '',
        'applicants_accepted_percentage' => '18.5%',
        'applicants_accepted_total' => '48,904',
        'applicants_admitted_percentage' => '52%',
        'applicants_admitted_total' => '898',
        'button_text' => '',
        'button_link' => '',
      ],
      [
        'college_name' => 'Columbia',
      'description' => "Renowned for its rigorous Core Curriculum, which emphasizes a strong foundation in the humanities, philosophy, and sciences. It is best known for its prestigious schools, including Columbia Law School, Columbia Business School, the Mailman School of Public Health, and the School of International and Public Affairs. The university is a global leader in journalism (home to the Pulitzer Prize), finance, medicine, and engineering. Its strong research output, urban setting, and deep industry connections make it a hub for innovation in fields like technology, public policy, and the arts.",
        'acceptance_rate' => 3.9,
        'applicants' => '',
        'applicants_accepted_percentage' => '',
        'applicants_accepted_total' => '',
        'applicants_admitted_percentage' => '25.9%',
        'applicants_admitted_total' => '60,248',
],
      [
        'college_name' => 'Cornell',
        'description' => "Known for its unique blend of Ivy League academics and public service as part of its land-grant mission. It is best recognized for its engineering, computer science, business (SC Johnson College of Business), hotel administration (Cornell School of Hotel Administration), agriculture, veterinary medicine, and architecture programs. The Cornell Law School and Weill Cornell Medicine are also highly prestigious. With a strong focus on research, interdisciplinary collaboration, and innovation, Cornell excels in fields ranging from life sciences to technology and public policy.",
        'acceptance_rate' => 8.4,
        'applicants' => '',
        'applicants_accepted_percentage' => '11.9',
        'applicants_accepted_total' => '65,582',
        'applicants_admitted_percentage' => '32.9%',
        'applicants_admitted_total' => '1,161',
],
      [
        'college_name' => 'Dartmouth',
        'description' => "Known for its strong liberal arts focus and close-knit academic community. It excels in government, economics, engineering (Thayer School of Engineering), business (Tuck School of Business), and medicine (Geisel School of Medicine). Dartmouth is also renowned for its undergraduate teaching, emphasis on research opportunities, and leadership in the humanities and social sciences. With a distinctive focus on outdoor education and a unique D-Plan academic calendar, Dartmouth fosters a flexible and immersive learning experience.",
        'acceptance_rate' => 5.4,
        'applicants' => '',
        'applicants_accepted_percentage' => '18.5%',
        'applicants_accepted_total' => '31,656',
        'applicants_admitted_percentage' => '49%',
        'applicants_admitted_total' => '606',
],      [
        'college_name' => 'Duke',
        'description' => "Known for its strong research focus and interdisciplinary approach to education. It excels in business (Fuqua School of Business), law (Duke Law School), medicine (Duke University School of Medicine), engineering (Pratt School of Engineering), and public policy (Sanford School of Public Policy). Duke is also recognized for its top-tier programs in biomedical sciences, environmental science, and political science. With a strong emphasis on innovation, entrepreneurship, and global engagement, Duke combines rigorous academics with a collaborative and dynamic learning environment.",
        'acceptance_rate' => 5.4,
        'applicants' => '',
        'applicants_accepted_percentage' => '18.5%',
        'applicants_accepted_total' => '54,194',
        'applicants_admitted_percentage' => '46.4%',
        'applicants_admitted_total' => '806',
],      [
        'college_name' => 'Harvard',
        'description' => "The oldest Ivy League institution, is renowned for its world-class faculty, groundbreaking research, and extensive academic resources. It excels in law (Harvard Law School), business (Harvard Business School), medicine (Harvard Medical School), government (Harvard Kennedy School), and education (Harvard Graduate School of Education). Harvard is also highly regarded for its programs in economics, computer science, biology, and the humanities. With its influential alumni network, vast library system, and strong emphasis on leadership and innovation, Harvard remains a global leader in higher education and research.",
        'acceptance_rate' => 3.7,
        'applicants' => '',
        'applicants_accepted_percentage' => '27.4%',
        'applicants_accepted_total' => '54,008',
        'applicants_admitted_percentage' => '42%',
        'applicants_admitted_total' => '692',
],      [
        'college_name' => 'MIT',
        'description' => "The Massachusetts Institute of Technology (MIT) is a world-renowned research university known for its cutting-edge innovation in science, technology, and engineering. It excels in computer science, artificial intelligence, robotics, aerospace engineering, physics, mathematics, and economics. MIT’s School of Engineering is consistently ranked among the best in the world, and the Sloan School of Management is highly regarded for business and entrepreneurship. With a strong emphasis on interdisciplinary research, hands-on learning (MIT’s \"mens et manus\" philosophy), and startup culture, MIT continues to drive advancements in technology, medicine, and sustainability.",
        'acceptance_rate' => 4.5,
        'applicants' => '',
        'applicants_accepted_percentage' => '22%',
        'applicants_accepted_total' => '28,232',
        'applicants_admitted_percentage' => '41.5%',
        'applicants_admitted_total' => '61',
],      [
        'college_name' => 'Penn',
        'description' => "The University of Pennsylvania (Penn) is known for its strong emphasis on interdisciplinary education and research. It excels in business (Wharton School), law (Penn Law), medicine (Perelman School of Medicine), and engineering (School of Engineering and Applied Science). Penn is also highly regarded for its programs in nursing, social sciences, and humanities, and is a leader in entrepreneurship and innovation. Known for its integration of academic disciplines with real-world applications, Penn fosters collaboration across fields and encourages students to engage with both academia and industry.",
        'acceptance_rate' => 5.4,
        'applicants' => '',
        'applicants_accepted_percentage' => '18.5%',
        'applicants_accepted_total' => '65,236',
        'applicants_admitted_percentage' => '~50%',
        'applicants_admitted_total' => '',
],
      [
        'college_name' => 'Princeton',
        'description' => "Recognized for its focus on undergraduate education and close faculty-student interactions. It excels in mathematics, physics, economics, computer science, and the humanities, and is particularly renowned for its research in theoretical physics, economics, and public policy. Princeton's Woodrow Wilson School of Public and International Affairs is highly regarded, as is its Department of Philosophy. With a commitment to rigorous academic programs, a strong emphasis on independent research, and a close-knit intellectual community, Princeton remains one of the leading institutions in the world for academic excellence.",
        'acceptance_rate' => 4.5,
        'applicants' => '',
        'applicants_accepted_percentage' => '22.2%',
        'applicants_accepted_total' => '39,644',
        'applicants_admitted_percentage' => '',
        'applicants_admitted_total' => '',
],
 [
        'college_name' => 'Sanford',
        'description' => "Renowned for its cutting-edge research and innovation in fields like computer science, engineering, artificial intelligence, and biotechnology. It is also highly regarded for its business (Stanford Graduate School of Business), law (Stanford Law School), and medical (Stanford School of Medicine) schools. Stanford is a leader in entrepreneurship, with strong ties to Silicon Valley, and is known for fostering startup culture and interdisciplinary collaboration. Its emphasis on scientific research, technology, and global impact makes it one of the world’s top academic institutions.",
        'acceptance_rate' => 3.6,
        'applicants' => '',
        'applicants_accepted_percentage' => '27.7%',
        'applicants_accepted_total' => '57,326',
        'applicants_admitted_percentage' => '',
        'applicants_admitted_total' => '',
], [
        'college_name' => 'Yale',
        'description' => "Highly recognized for its prestigious law school (Yale Law School), strong programs in the humanities, and world-class research. It excels in political science, history, economics, psychology, and the arts, and is particularly renowned for its School of Drama and School of Music. Yale is also recognized for its interdisciplinary approach to education, its research contributions in the life sciences, and its close-knit academic community. With a focus on public service, leadership, and intellectual curiosity, Yale continues to shape leaders across a range of fields.",
        'acceptance_rate' => 3.9,
        'applicants' => '',
        'applicants_accepted_percentage' => '26.8%',
        'applicants_accepted_total' => '57,465',
        'applicants_admitted_percentage' => '46%',
        'applicants_admitted_total' => '709',
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
                :applicants_accepted_percentage="$college_data['applicants_accepted_percentage']"
                :applicants_accepted_total="$college_data['applicants_accepted_total']"
                :applicants_admitted_percentage="$college_data['applicants_admitted_percentage']"
                :applicants_admitted_total="$college_data['applicants_admitted_total']"
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
