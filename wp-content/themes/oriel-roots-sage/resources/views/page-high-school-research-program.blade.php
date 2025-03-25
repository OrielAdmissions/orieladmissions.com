@extends('layouts.app')

@section('content')
  <div class="bg-oriel full-width relative">
    <div class="full-width">
      {!! get_svg('images.window-full', 'absolute -bottom-[30vw] md:-bottom-[180px] mx-auto left-0 right-0 text-oriel w-full md:w-[500px] stroke-oriel md:stroke-white/20 max-w-2xl h-auto') !!}
    </div>
    <div
      class="relative flex min-h-svh flex-col items-center justify-center px-4 py-30 text-center"
    >
      <h2
        class="fade-in-bottom text-8xl-fluid mx-auto mb-6 max-w-200 text-center text-white"
      >
        Explore your passion through research.
      </h2>
      <a href="/contact" class="btn btn-white hidden">Contact Us</a>
    </div>
  </div>

  <div class="full-width">
    <?php
    $image_id = get_post_thumbnail_id();
    echo App\get_picture([$image_id], 'full', false, [
      'class' => 'w-full h-auto min-h-96 object-cover',
    ]); ?>
  </div>

  <div class="breakout relative space-y-12 py-12 md:py-30">
    <h2
      class="text-6xl-fluid mx-auto max-w-4xl text-center font-serif"
    >
      A
      <span class="text-oriel">virtual research program</span>
      for high school students.
    </h2>
    <div class="flex justify-center gap-8 max-lg:flex-col">
      <div class="lg:basis-[550px]">
        <?php
        $image_id = get_post_thumbnail_id();
        echo App\get_picture([268], 'full', false, [
          'class' => 'w-full h-auto object-cover rounded-xl',
        ]); ?>
      </div>
      <div class="lg:basis-[550px]">
        <p class="md:text-lg">
          The Oriel Ignite Research Program provides high school students with
          the opportunity to develop college-level research skills. Under
          personalized mentorship from PhD candidates, students explore their
          chosen research topics while mastering the academic research process,
          fostering critical thinking and intellectual growth.
        </p>
      </div>
    </div>
    <div
      class="parallax right-12 bottom-0 mx-auto lg:absolute"
      data-speed="1.1"
    >
      <div class="relative">
        {!!
          App\get_picture([273], 'full', false, [
            'class' => 'object-cover max-lg:w-full mx-auto rounded-xl',
          ])
        !!}
        {!! get_svg('images.window-full', 'max-lg:hidden stroke-cardinal/40 scale-y-75 text-transparent absolute h-auto w-[500px] left-1/2 top-1/2 -translate-1/2') !!}
      </div>
    </div>
  </div>

  <div class="bg-sand full-width-constrained">
    <div class="breakout py-12 lg:py-30">
      <h2
        class="text-6xl-fluid mb-12 md:mb-30 max-w-2xl max-lg:text-center"
      >
        Why complete research?
      </h2>
      <div class="flex justify-center gap-8 max-lg:flex-col">
        <div class="basis-7/12 max-lg:order-last">
          {!!
            App\get_picture([270], 'full', false, [
              'class' => 'w-full h-auto object-cover rounded-xl',
            ])
          !!}
        </div>
        <div class="basis-5/12">
          <div class="mx-auto space-y-8 md:text-lg lg:max-w-md">
            <p>
              There are over 146 institutions classified as R1*, the highest
              designation for research activity in the United States. This
              prestigious group includes Ivy League universities, as well as
              world-renowned institutions like MIT, Stanford University, and
              Johns Hopkins University.
            </p>
            <p>
              Public universities such as the University of Michigan, UVA, the
              University of Florida, and UCLA are also among the top-tier
              research institutions. Once on campus, students have numerous
              opportunities to engage in hands-on research, gaining valuable
              experience and contributing to groundbreaking discoveries.
            </p>
            <p>
              Students who have prior research experience demonstrate
              exceptional intellectual curiosity, positioning themselves to make
              meaningful contributions and a lasting impact on their campus
              communities.
            </p>
            <small>
              *The classification is made by the Carnegie Classification.
            </small>
            {!!
              App\get_picture([272], 'full', false, [
                'class' => 'w-full h-auto object-cover relative top-24 max-lg:hidden rounded-xl',
                'data-speed' => '1.05',
              ])
            !!}
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="bg-sand full-width content-grid pb-12 lg:pb-30">
    <div class="breakout">
      <div class="grid gap-8 lg:grid-cols-12">
        <div class="col-start-1 max-lg:order-last lg:col-span-3">
          {!!
            App\get_picture([271], 'full', false, [
              'class' => 'w-full h-auto object-cover rounded-xl',
              'data-speed' => '1.1',
            ])
          !!}
        </div>
        <div class="lg:col-span-6 lg:col-start-5">
          <div class="mx-auto space-y-10 lg:max-w-2xl">
            <h2 class="text-6xl-fluid leading-none">
              Why the
              <span class="text-oriel">Oriel Ignite</span>
              Research Program?
            </h2>
            <p class="md:text-lg">
              Our PhD mentors, coming from top-tier universities, are incredibly
              passionate about working with high school students. Our mentors
              provide individualized support, ensuring students have the tools
              to succeed with their research. Students are encouraged to explore
              various data-collection methodologies, including original
              approaches such as conducting surveys or performing lab-based
              experiments.
            </p>
            <p class="md:text-lg">
              As an extension, as part of our Research Program+, we also assist
              students in preparing their research for publication in scientific
              journals or submission to competitions, helping them showcase
              their work and make a meaningful impact.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="breakout mb-20 space-y-12 pt-12 md:pt-30">
    <div class="grid grid-cols-12 gap-x-4 gap-y-6">
      <div
        class="col-span-full flex max-w-lg flex-col gap-y-12 lg:col-span-4 lg:col-start-2 xl:pt-16"
      >
        <h2 class="text-6xl-fluid">
          We offer
          <span class="text-oriel">2</span>
          program options
        </h2>
        <p class="text-lg">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
          minim veniam, quis nostrud exercitation ullamco laboris nisi ut
          aliquip ex ea commodo consequat. Duis aute irure dolor
        </p>
      </div>
      <div class="col-span-full grid grid-cols-12 gap-6 lg:col-span-7">
        <div
          class="bg-sand col-span-full flex flex-col items-start justify-center gap-8 overflow-hidden rounded-xl p-6 sm:col-span-6"
        >
          <div>
            <h3 class="text-3xl-fluid inline-block leading-tight">
              Oriel Ignite
              <br class="max-xl:hidden" />
              Research program
            </h3>
          </div>
          <div class="grow">
            <x-list
              type="ul"
              list-classes="divide-keyline/40 divide-y text-lg"
              item-classes="flex items-center gap-x-8 py-3"
              :icon="get_svg('images.icon-checkmark', 'text-oriel')"
              :items="[
                'Academic mentor meetings',
                '2 writing and editing sessions',
                'Paper or project submission',
                ['classes' => 'text-black/50', 'content' => 'Journals and competitions','icon' => get_svg('images.icon-close')],
                ['content' => '3-5 hours a week','icon' => get_svg('images.icon-calendar', 'text-oriel')],
                ['content' => '5-6 month duration','icon' => get_svg('images.icon-clock', 'text-oriel')],
              ]"
            />
          </div>
          <a href="/contact" class="btn btn-primary text-center max-sm:w-full">
            Get Started
          </a>
        </div>
        <div
          class="bg-oriel col-span-full flex flex-col items-start justify-center gap-8 overflow-hidden rounded-xl p-6 sm:col-span-6"
        >
          <div>
            <h3 class="text-3xl-fluid inline-block leading-tight text-white">
              Oriel Ignite
              <br class="max-xl:hidden" />
              Research program
              <span class="pill bg-cardinal ml-2 text-white">+PLUS</span>
            </h3>
          </div>
          <div class="grow">
            <x-list
              type="ul"
              list-classes="divide-keyline/40 divide-y text-lg text-white"
              item-classes="flex items-center gap-x-8 py-3"
              :icon="get_svg('images.icon-checkmark')"
              :items="[
                'Academic mentor meetings',
                '5 writing and editing sessions',
                'Paper or project submission',
                'Journals and competitions',
                ['content' => '3-5 hours a week','icon' => get_svg('images.icon-calendar')],
                ['content' => '5-6 month duration','icon' => get_svg('images.icon-clock')],
              ]"
            />
          </div>

          <a href="/contact" class="btn btn-white text-center max-sm:w-full">
            Get Started
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="breakout mb-12 md:mb-30">
    <div class="grid grid-cols-12 gap-x-4 gap-y-6">
      <div
        class="col-span-full flex max-w-lg flex-col gap-y-12 lg:col-span-4 lg:col-start-2"
      >
        <h3 class="text-2xl-fluid py-6 font-sans">Project Areas</h3>
      </div>
      <div class="col-span-full lg:col-span-7">
        <x-accordion heading="Humanities" summary_classes="text-2xl-fluid py-6">
          <ul class="grid list-none gap-4 pl-4 md:grid-cols-2">
            @foreach ([
                'Anthropology',
                'Art History',
                'Economics',
                'English Literature',
                'Environmental Studies',
                'History',
                'Linguistics and Languages',
                'Philosophy',
                'Political Science',
                'Psychology',
                'Sociology'
              ]
              as $subject)
              <li class="flex items-center gap-2">
                {!! get_svg('images.chevron-right', 'text-oriel size-4 flex-shrink-0') !!}
                <span>{{ $subject }}</span>
              </li>
            @endforeach
          </ul>
        </x-accordion>
        <x-accordion heading="STEM" summary_classes="text-2xl-fluid py-6">
          <ul class="grid list-none gap-4 pl-4 md:grid-cols-2">
            @foreach ([
                'Astrophysics',
                'Biochemistry',
                'Biology',
                'Chemistry',
                'Computer Science',
                'Engineering',
                'Genetics',
                'Mathematics',
                'Neuroscience',
                'Physics',
                'Public Health'
              ]
              as $subject)
              <li class="flex items-center gap-2">
                {!! get_svg('images.chevron-right', 'text-oriel size-4 flex-shrink-0') !!}
                <span>{{ $subject }}</span>
              </li>
            @endforeach
          </ul>
        </x-accordion>
      </div>
    </div>
  </div>
  <div class="bg-cardinal full-width py-12 md:py-30">
    <div class="breakout">
      <div class="">
        <h2
          class="fade-in-bottom text-6xl-fluid text-center text-white max-md:mb-6 md:-mb-16"
        >
          Ready to Apply?
        </h2>
      </div>
      <div class="max-md:hidden">
        {!! get_svg('images.steps-arrow', 'w-full') !!}
      </div>
      <div class="">
        <ul
          class="divide-keyline/10 flex text-white max-md:flex-col max-md:divide-y md:divide-x"
        >
          <li class="basis-1/4 space-y-4 px-4 py-6 text-center">
            <span class="pill bg-sand text-black">step 1</span>
            <p class="text-2xl-fluid font-medium">Fill out the application</p>
          </li>
          <li class="basis-1/4 space-y-4 px-4 py-6 text-center">
            <span class="pill bg-[#F6ADAE] text-black">step 2</span>
            <p class="text-2xl-fluid font-medium">Complete an interview</p>
            <p>Within 1 week</p>
          </li>
          <li class="basis-1/4 space-y-4 px-4 py-6 text-center">
            <span class="pill bg-[#F07677] text-black">step 3</span>
            <p class="text-2xl-fluid font-medium">Get your decision</p>
            <p>Within 1-2 weeks</p>
          </li>
          <li class="basis-1/4 space-y-4 px-4 py-6 text-center">
            <span class="pill bg-oriel">step 4</span>
            <p class="text-2xl-fluid font-medium">Begin your research</p>
            <p>Within 1 month</p>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <div class="bg-sand full-width-constrained">
    <div class="breakout space-y-8 py-12 md:py-30">
      <h2 @class(['text-6xl-fluid mb-12 md:bb-30 text-center'])>
        Student Stories
      </h2>
      <div class="spiral-binding relative overflow-hidden rounded-md shadow-[0_3px_3px_0_rgba(0,0,0,0.06)]">
        <div class="bg-chalk/70 relative grid grid-cols-12 py-6 lg:py-15">


          <div class="col-span-full lg:col-start-2">
            <div class="px-6">

              <h3 class="text-2xl-fluid mb-4">
            <span class="text-oriel">
            Madison had wanted to become a doctor since elementary school.
          </span>
                Determined to achieve her goal, she set her sights on competitive
                BS/MD programs, which offer direct entry into medical school. Knowing
                that these programs value candidates with robust research experience,
                Madison applied to the Oriel Ignite Research Program.
              </h3>

              <div class="space-y-6 text-xl">
                <p>
                  In order to explore her passion in public health, Madison
                  collaborated with her mentor to explore healthcare inequalities in
                  her city. She began by analyzing publicly available data and soon
                  realized the importance of incorporating primary research into her
                  study. Eager to gain firsthand insights, Madison identified several
                  local programs addressing healthcare disparities and reached out to
                  their administrators. Several were willing to share their
                  experiences and perspectives, which significantly enriched her
                  research.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="spiral-binding relative overflow-hidden rounded-md shadow-[0_3px_3px_0_rgba(0,0,0,0.06)]">


        <div class="bg-chalk/70 relative grid grid-cols-12 py-6 lg:py-15">

          <div class="col-span-full lg:col-start-2">
            <div class="px-6">

              <h3 class="text-2xl-fluid mb-4">
            <span class="text-oriel">
            Alex's passion for astrophysics led him to embark on an ambitious
            research project that combined his curiosity with hands-on
            scientific discovery.
          </span>
                Guided by a mentor with expertise in astrophysics, Alex identified a
                project focused on analyzing light curves from stars to detect
                potential exoplanets (planets orbiting stars beyond our solar system).
              </h3>

              <div class="space-y-6 text-xl">
                <p>
                  This project provided an invaluable opportunity for Alex to
                  strengthen his computer programming skills while applying his
                  academic knowledge to a real-world scientific challenge. This
                  project not only deepened Alex's understanding of astrophysics but
                  also equipped him with valuable skills in data analysis and coding.
                  It served as a stepping stone toward further exploration in the
                  field.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

{{--      <x-testimonial--}}
{{--        :profile_image_id="74"--}}
{{--        location="Texas"--}}
{{--        major="Technology"--}}
{{--        name="Kellogg School of Management"--}}
{{--        image_position="bottom"--}}
{{--        testimonial_type="student"--}}
{{--      >--}}
{{--        <x-slot:profile_image>--}}
{{--          <img--}}
{{--            src="{{ Vite::asset('resources/images/student-story.jpeg') }}"--}}
{{--            alt="Student Story placeholder image"--}}
{{--            height="400"--}}
{{--            width="600"--}}
{{--            loading="lazy"--}}
{{--            class="h-auto w-full max-w-sm rounded-xl"--}}
{{--          />--}}
{{--        </x-slot>--}}
{{--        <x-slot:title>--}}
{{--          <span class="text-oriel">--}}
{{--            Madison had wanted to become a doctor since elementary school.--}}
{{--          </span>--}}
{{--          Determined to achieve her goal, she set her sights on competitive--}}
{{--          BS/MD programs, which offer direct entry into medical school. Knowing--}}
{{--          that these programs value candidates with robust research experience,--}}
{{--          Madison applied to the Oriel Ignite Research Program.--}}
{{--        </x-slot>--}}

{{--        <x-slot:description>--}}
{{--          <p>--}}
{{--            In order to explore her passion in public health, Madison--}}
{{--            collaborated with her mentor to explore healthcare inequalities in--}}
{{--            her city. She began by analyzing publicly available data and soon--}}
{{--            realized the importance of incorporating primary research into her--}}
{{--            study. Eager to gain firsthand insights, Madison identified several--}}
{{--            local programs addressing healthcare disparities and reached out to--}}
{{--            their administrators. Several were willing to share their--}}
{{--            experiences and perspectives, which significantly enriched her--}}
{{--            research.--}}
{{--          </p>--}}
{{--        </x-slot>--}}
{{--      </x-testimonial>--}}
{{--      <x-testimonial--}}
{{--        :profile_image_id="74"--}}
{{--        location="Texas"--}}
{{--        major="Technology"--}}
{{--        name="Kellogg School of Management"--}}
{{--        image_position="bottom"--}}
{{--        testimonial_type="student"--}}
{{--      >--}}
{{--        <x-slot:profile_image>--}}
{{--          <img--}}
{{--            src="{{ Vite::asset('resources/images/student-story.jpeg') }}"--}}
{{--            alt="Student Story placeholder image"--}}
{{--            height="400"--}}
{{--            width="600"--}}
{{--            loading="lazy"--}}
{{--            class="h-auto w-full max-w-sm rounded-xl"--}}
{{--          />--}}
{{--        </x-slot>--}}
{{--        <x-slot:title>--}}
{{--          <span class="text-oriel">--}}
{{--            Alex's passion for astrophysics led him to embark on an ambitious--}}
{{--            research project that combined his curiosity with hands-on--}}
{{--            scientific discovery.--}}
{{--          </span>--}}
{{--          Guided by a mentor with expertise in astrophysics, Alex identified a--}}
{{--          project focused on analyzing light curves from stars to detect--}}
{{--          potential exoplanets (planets orbiting stars beyond our solar system).--}}
{{--        </x-slot>--}}

{{--        <x-slot:description>--}}
{{--          <p>--}}
{{--            This project provided an invaluable opportunity for Alex to--}}
{{--            strengthen his computer programming skills while applying his--}}
{{--            academic knowledge to a real-world scientific challenge. This--}}
{{--            project not only deepened Alex's understanding of astrophysics but--}}
{{--            also equipped him with valuable skills in data analysis and coding.--}}
{{--            It served as a stepping stone toward further exploration in the--}}
{{--            field.--}}
{{--          </p>--}}
{{--        </x-slot>--}}
{{--      </x-testimonial>--}}
    </div>
  </div>

  <x-faq-section title="Need some more help? Here are some answers.">
    <x-accordion
      heading="When can you begin the Oriel Ignite Research Program?"
    >
      <p>
        The Oriel Ignite Research Program can begin at any time of the year. We
        work with students to accommodate their schedules and academic
        calendars, ensuring they can start their research journey when it best
        suits them.
      </p>
    </x-accordion>
    <x-accordion
      heading="Why should I complete the Oriel Ignite Research Program?"
    >
      <p class="mb-4">
        Completing the Oriel Ignite Research Program provides students with
        valuable research experience, skills that colleges are increasingly
        looking for in applicants. Completing research demonstrates intellectual
        curiosity, initiative, and the ability to engage deeply with a topic of
        interest, which are all qualities that stand out in the admissions
        process. The program also allows students to develop academic literature
        review skills, critical thinking and analysis skills, and computer
        programming skills (either in R or Python).
      </p>
    </x-accordion>

    <x-accordion heading="How are students matched with their mentor?">
      <p class="mb-4">
        Students are matched with their mentor based on mutual interests and
        areas of academic focus. We take the time to understand each student’s
        passions and goals, then pair them with a mentor who has expertise in
        that particular field. This personalized matching process ensures that
        students work with mentors who can provide meaningful guidance and help
        them explore their chosen topic in depth.
      </p>
    </x-accordion>

    <x-accordion
      heading="What is the time commitment required for the Oriel Ignite Research Program?"
    >
      <p class="mb-4">
        The Oriel Ignite Research Program requires a one-hour virtual meeting
        with a mentor each week, during which students receive guidance on their
        project. In addition to these meetings, students are expected to
        dedicate several hours of independent work each week to complete tasks
        discussed during the mentorship meetings.
      </p>
    </x-accordion>
  </x-faq-section>
@endsection
