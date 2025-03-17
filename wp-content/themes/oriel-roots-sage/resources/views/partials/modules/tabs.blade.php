@props([
  'tabs' => [
    [
      'label' => 'MBA',
      'active' => true,
      'accent_color' => '#D32F2F',
      'template_part' => 'template-parts/tabs/mba',
    ],
    [
      'label' => 'Masters Admissions',
      'active' => false,
      'accent_color' => '#1976D2',
      'template_part' => 'template-parts/tabs/masters-admissions',
    ],
  ],
])

@php
  // Determine the default active tab index
  $defaultActive = 0;
  foreach ($tabs as $i => $tab) {
    if ($tab['active']) {
      $defaultActive = $i;
      break;
    }
  }
@endphp

<div
  x-data="{ selectedTab: {{ $defaultActive }} }"
  x-tabs
  :selected="selectedTab"
  class="full-width content-grid bg-chalk"
>
  <!-- Tab List -->
  <div
    x-tabs:list
    class="divide-keyline/80 breakout full-width flex items-stretch divide-x"
  >
    @foreach ($tabs as $tab)
      <button
        x-tabs:tab
        type="button"
        :class="$tab.isSelected ? 'border-b-[var(--tab-accent)]' : 'border-b-keyline/80'"
        class="bg-sand/20 inline-flex w-full cursor-pointer justify-center border-b-2 p-7 text-center text-2xl transition duration-300 focus:outline-none"
        style="--tab-accent: {{ $tab['accent_color'] }}"
      >
        {{ $tab['label'] }}
      </button>
    @endforeach
  </div>

  <!-- Tab Panels -->
  <div x-tabs:panels class="tab-contents breakout">
    <section x-tabs:panel class="tab-content">
      <div class="relative py-24 md:py-40">
        <div class="relative z-10 mx-auto px-4">
          <div class="-mx-4 flex flex-wrap items-center">
            <div class="mb-16 w-full px-4 md:mb-0 md:w-1/2">
              <div
                class="space-y-12 text-center md:mx-auto md:max-w-111 md:text-left"
              >
                <h2 class="text-fluid-104px">MBA Admissions Consulting</h2>
                <p class="text-2xl">
                  We support applicants applying to full-time MBA programs,
                  part-time MBA programs, and executive MBA programs in the US
                  and Europe.
                </p>

                <a href="/contact" class="btn btn-primary">Contact Us</a>
              </div>
            </div>
            <div class="w-full px-4 md:w-1/2">
              {!!
                App\get_picture([81], 'full', false, [
                  'class' => 'rounded-xl w-full',
                ])
              !!}
            </div>
          </div>
        </div>
      </div>

      <div class="content-grid">
        <h2 class="text-6xl-fluid text-center">
          Our all-inclusive packages include:
        </h2>
        <div class="py-12 md:py-30">
          <x-accordion
            heading="Application Strategy & Program Selection"
            :summary_classes="'text-3xl-fluid py-12 leading-tight'"
          >
            <p class="text-lg">
              Through in-depth conversations, we take the time to understand
              your unique interests, strengths, and long-term goals. Our
              admissions consultants collaborate with you to develop a tailored
              application strategy, ensuring every element of your candidacy is
              thoughtfully presented. We will help refine your list of business
              programs to focus on the schools that best align with your
              profile, maximizing your chances of success.
            </p>
          </x-accordion>

          <x-accordion
            heading="Letter of Recommendation Support"
            :summary_classes="'text-3xl-fluid py-12 leading-tight'"
          >
            <p class="text-lg">
              The letters of recommendation are a key but often overlooked part
              of an application. We work closely with you to identify the best
              recommenders and guide them in showcasing your unique attributes
              and accomplishments. Through strategic preparation, we ensure that
              your recommendations will elevate your candidacy.
            </p>
          </x-accordion>

          <x-accordion
            heading="Resume Crafting"
            :summary_classes="'text-3xl-fluid py-12 leading-tight'"
          >
            <p class="text-lg">
              It is important to differentiate your business school resume from
              your professional resume. They are not one and the same! Our team
              would help you craft a polished, compelling resume, with a focus
              on leadership and impact. By framing your experiences in a way
              that resonates with an admissions committee, we would ensure your
              resume tells a powerful story about your potential as a future
              leader.
            </p>
          </x-accordion>

          <x-accordion
            heading="Essay Development"
            :summary_classes="'text-3xl-fluid py-12 leading-tight'"
          >
            <p class="text-lg">
              Essays are the heart of your application and the portion of the
              application where we will spend the most time. We will work with
              you to brainstorm captivating topics, to determine a structure for
              your essays, and revise and provide feedback along the way. With
              our personalized support, we will ensure your voice comes through
              and that you are leaving a lasting impression.
            </p>
          </x-accordion>

          <x-accordion
            heading="All-inclusive Application Support"
            :summary_classes="'text-3xl-fluid py-12 leading-tight'"
          >
            <p class="text-lg">
              Once you start filling out an application, there will always be
              other questions that arise, and we are here to ensure a seamless
              application process. Our comprehensive support covers every
              detail, so nothing gets overlooked, giving you confidence and
              peace of mind as you devote time to your applications.
            </p>
          </x-accordion>

          <x-accordion
            heading="Interview Preparation"
            :summary_classes="'text-3xl-fluid py-12 leading-tight'"
          >
            <p class="text-lg">
              Interviews are your chance to bring your application to life. By
              completing mock interviews, receiving personalized feedback, and
              unlimited practice, we will help you to build your confidence and
              articulate your story.
            </p>
          </x-accordion>
        </div>
      </div>
    </section>

    <section x-tabs:panel class="tab-content">
      <div class="relative py-24 md:py-40">
        <div class="relative z-10 mx-auto px-4">
          <div class="-mx-4 flex flex-wrap items-center">
            <div class="mb-16 w-full px-4 md:mb-0 md:w-1/2">
              <div
                class="space-y-12 text-center md:mx-auto md:max-w-111 md:text-left"
              >
                <h2 class="text-fluid-104px">
                  Masters Program Admissions Consulting
                </h2>
                <p class="text-2xl">
                  Looking for support applying to a Masters program?
                </p>
                <a href="/contact" class="btn btn-ivy">Contact Us</a>
              </div>
            </div>
            <div class="w-full px-4 md:w-1/2">
              {!!
                App\get_picture([22], 'full', false, [
                  'class' => 'rounded-xl w-full',
                ])
              !!}
            </div>
          </div>
        </div>
      </div>

      <div class="content-grid space-y-24">
        <h2 class="text-5xl-fluid text-center">
          We have a
          <span class="text-ivy">proven track record</span>
          of assisting with applications to a wide range of Masters programs
          including:
        </h2>
        <ul role="list" class="grid grid-cols-1 md:grid-cols-2">
          <li class="border-b-keyline flex items-center border-b py-8 text-2xl">
            <svg
              class="text-ivy me-2 h-6 w-6 shrink-0"
              aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg"
              fill="currentColor"
              viewBox="0 0 20 20"
            >
              <path
                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"
              />
            </svg>
            <span>Masters in Management</span>
          </li>
          <li class="border-b-keyline flex items-center border-b py-8 text-2xl">
            <svg
              class="text-ivy me-2 h-6 w-6 shrink-0"
              aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg"
              fill="currentColor"
              viewBox="0 0 20 20"
            >
              <path
                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"
              />
            </svg>
            <span>Masters in Real Estate</span>
          </li>
          <li class="border-b-keyline flex items-center border-b py-8 text-2xl">
            <svg
              class="text-ivy me-2 h-6 w-6 shrink-0"
              aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg"
              fill="currentColor"
              viewBox="0 0 20 20"
            >
              <path
                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"
              />
            </svg>
            <span>Masters in Financial Economics</span>
          </li>
          <li class="border-b-keyline flex items-center border-b py-8 text-2xl">
            <svg
              class="text-ivy me-2 h-6 w-6 shrink-0"
              aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg"
              fill="currentColor"
              viewBox="0 0 20 20"
            >
              <path
                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"
              />
            </svg>
            <span>Masters in Public Policy</span>
          </li>
          <li class="border-b-keyline flex items-center border-b py-8 text-2xl">
            <svg
              class="text-ivy me-2 h-6 w-6 shrink-0"
              aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg"
              fill="currentColor"
              viewBox="0 0 20 20"
            >
              <path
                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"
              />
            </svg>
            <span>Masters in Finance</span>
          </li>
          <li class="border-b-keyline flex items-center border-b py-8 text-2xl">
            <svg
              class="text-ivy me-2 h-6 w-6 shrink-0"
              aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg"
              fill="currentColor"
              viewBox="0 0 20 20"
            >
              <path
                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"
              />
            </svg>
            <span>Masters in Computer Science</span>
          </li>
          <li class="border-b-keyline flex items-center border-b py-8 text-2xl">
            <svg
              class="text-ivy me-2 h-6 w-6 shrink-0"
              aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg"
              fill="currentColor"
              viewBox="0 0 20 20"
            >
              <path
                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"
              />
            </svg>
            <span>Masters in Data Analytics</span>
          </li>
          <li class="border-b-keyline flex items-center border-b py-8 text-2xl">
            <svg
              class="text-ivy me-2 h-6 w-6 shrink-0"
              aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg"
              fill="currentColor"
              viewBox="0 0 20 20"
            >
              <path
                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"
              />
            </svg>
            <span>Masters in Marketing</span>
          </li>
        </ul>
        <div class="">
          <h2 class="text-6xl-fluid text-center">
            Our all-inclusive packages include:
          </h2>
          <div class="py-12 md:py-30">
            <x-accordion
              heading="Application Strategy & Program Selection"
              :summary_classes="'text-3xl-fluid py-12 leading-tight'"
              :accent_color="'#5D6720'"
            >
              <p class="text-lg">
                Through in-depth conversations, we take the time to understand
                your unique interests, strengths, and long-term goals. Our
                admissions consultants collaborate with you to develop a
                tailored application strategy, ensuring every element of your
                candidacy is thoughtfully presented. We will help refine your
                list of business programs to focus on the schools that best
                align with your profile, maximizing your chances of success.
              </p>
            </x-accordion>

            <x-accordion
              heading="Letter of Recommendation Support"
              :summary_classes="'text-3xl-fluid py-12 leading-tight'"
              :accent_color="'#5D6720'"
            >
              <p class="text-lg">
                The letters of recommendation are a key but often overlooked
                part of an application. We work closely with you to identify the
                best recommenders and guide them in showcasing your unique
                attributes and accomplishments. Through strategic preparation,
                we ensure that your recommendations will elevate your candidacy.
              </p>
            </x-accordion>

            <x-accordion
              heading="Resume Crafting"
              :summary_classes="'text-3xl-fluid py-12 leading-tight'"
              :accent_color="'#5D6720'"
            >
              <p class="text-lg">
                It is important to differentiate your business school resume
                from your professional resume. They are not one and the same!
                Our team would help you craft a polished, compelling resume,
                with a focus on leadership and impact. By framing your
                experiences in a way that resonates with an admissions
                committee, we would ensure your resume tells a powerful story
                about your potential as a future leader.
              </p>
            </x-accordion>

            <x-accordion
              heading="Essay Development"
              :summary_classes="'text-3xl-fluid py-12 leading-tight'"
              :accent_color="'#5D6720'"
            >
              <p class="text-lg">
                Essays are the heart of your application and the portion of the
                application where we will spend the most time. We will work with
                you to brainstorm captivating topics, to determine a structure
                for your essays, and revise and provide feedback along the way.
                With our personalized support, we will ensure your voice comes
                through and that you are leaving a lasting impression.
              </p>
            </x-accordion>

            <x-accordion
              heading="All-inclusive Application Support"
              :summary_classes="'text-3xl-fluid py-12 leading-tight'"
              :accent_color="'#5D6720'"
            >
              <p class="text-lg">
                Once you start filling out an application, there will always be
                other questions that arise, and we are here to ensure a seamless
                application process. Our comprehensive support covers every
                detail, so nothing gets overlooked, giving you confidence and
                peace of mind as you devote time to your applications.
              </p>
            </x-accordion>

            <x-accordion
              heading="Interview Preparation"
              :summary_classes="'text-3xl-fluid py-12 leading-tight'"
              :accent_color="'#5D6720'"
            >
              <p class="text-lg">
                Interviews are your chance to bring your application to life. By
                completing mock interviews, receiving personalized feedback, and
                unlimited practice, we will help you to build your confidence
                and articulate your story.
              </p>
            </x-accordion>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>
