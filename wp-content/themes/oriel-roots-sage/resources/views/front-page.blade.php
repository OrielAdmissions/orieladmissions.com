@extends('layouts.app')

@section('content')
  <div class="full-width">
    <div class="the-stack">
      <div class="overflow-hidden h-svh min-h-[500px]">
        @if (has_post_thumbnail(get_the_ID()))
          {!! App\get_picture([get_post_thumbnail_id(get_the_ID())], 'full', false, ['loading' => false, 'class' => 'w-full h-full  object-cover']) !!}
        @endif
      </div>
      <div class="hero__window-overlay relative bg-[black] opacity-50"></div>
      <div class="content-grid">
        <div class="breakout relative flex flex-col justify-center">
            <div class="relative py-8 fade-in-bottom items-center">
              <h1 class="max-w-225 text-8xl-fluid text-center mx-auto text-white">
                Your Trusted Authority in Admissions.
              </h1>
            </div>

        </div>
      </div>
    </div>
  </div>

{{--  @include('partials.modules.rona')--}}

  <div class="breakout">
    <div class="py-12 md:py-30">
      <div
        class="grid gap-8 grid-cols-12 max-md:text-center"
      >
        <div class="md:col-start-2 md:col-span-7 col-span-full">
          <h2 class="text-6xl-fluid mb-8">
            Our
            <span class="text-oriel text-6xl-fluid">360 degree approach</span>
            to college counseling.
          </h2>

          <a href="/why-us" class="btn btn-outline">Learn More</a>
        </div>
        <div class="col-span-full md:col-start-9 lg:col-span-2 md:col-span-3">
          <p class="text-lg-fluid">
            Our team of experts provides personalized and high-touch support at
            every stage of the college application process.
          </p>
        </div>
      </div>
    </div>
  </div>

  @include('partials.modules.oriel-slider')
  @include('partials.modules.block-links')
  @include('partials.modules.logo-marquee')

  <div class="pt-24 pb-12">
    <div class="grid grid-cols-12 items-center gap-y-8 md:gap-x-8">
      <div class="col-span-12 text-center">
        <h2
          class="text-8xl-fluid mx-auto mb-8 max-w-175 text-center"
        >
          Explore the Oriel Admissions Edge.
        </h2>
        <p class="text-xl mb-12">
          93% of our students are admitted to one of their top 3 college
          choices.
        </p>
        <div class="inline-flex flex-col mx-auto">
          <div class="flex items-center gap-3">
            <div class="bg-keyline size-3 rounded-full"></div>
            <div>National Acceptance Rate</div>
          </div>
          <div class="flex items-center gap-3">
            <div class="bg-oriel size-3 rounded-full"></div>
            <div>Oriel Admissions Acceptance Rate</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="full-width !block">
    @include('components.college-graph')
  </div>
  @include('partials.modules.bio-slider')

  <x-faq-section title="Need help? <br> Start Here.">
    <x-accordion
      heading="When should my student start working with a college counselor?"
    >
      <p class="mb-4">
        The earlier that you begin your engagement with Oriel Admissions, the
        greater impact that we can have on your child’s admissions chances. A
        student’s curriculum in middle school will often determine their
        academic profile in high school. Starting as early as 8th grade can
        allow us to set your student on the path for academic success.
      </p>
      <p class="mb-4">
        For our long-term counseling engagements, we create a Strategic Roadmap
        that is personalized to each student and is designed to provide guidance
        for how a student spends their time in high school. We can build this
        roadmap for our students as early as 8th grade up to as late as the
        first portion of 11th grade.
      </p>
      <p class="mb-4">
        However, we can also support students in the later stages of their high
        school experience and often engage with students who are rising into
        their senior year or who may need assistance improving their
        applications while in their senior year.
      </p>
    </x-accordion>

    <x-accordion heading="What does your 360-degree approach mean?">
      <p class="mb-4">
        Our unique 360-degree approach to counseling is how we provide students
        and families with the most comprehensive level of support, allowing
        students to develop the skills that they need to be successful in high
        school, in college, and beyond.
      </p>
      <p class="mb-4">
        The student will have a primary college counselor who will meet with
        them on a regular basis for advising sessions (8th, 9th, and 10th grade)
        or who will work directly with them on their application (11th and 12th
        grade).
      </p>
      <p class="mb-4">
        In addition to their college counselor, the student will be supported by
        academic tutors, SAT/ACT tutors, a career coach, a writing coach, and
        project mentors, as needed.
      </p>
      <p>
        Rona Aydin, the founder of Oriel Admissions, is involved with every
        family as well. Rona will meet quarterly with the student to check on
        their progress and is always available to provide support and strategic
        direction as needed.
      </p>
    </x-accordion>

    <x-accordion
      heading="What is the full range of college counseling services that you offer?"
    >
      <p class="mb-4">
        We offer comprehensive advising and planning services beginning as early
        as 8th grade, helping students navigate every stage of their academic
        and personal development.
      </p>
      <ul class="mb-4 list-disc space-y-4 pl-4">
        <li>
          High School Roadmap Preparation: A tailored plan to guide students
          through their high school journey.
        </li>
        <li>
          Summer Programs Application Support: Assistance with identifying and
          applying to summer programs including preparing essays.
        </li>
        <li>
          Career Exploration & Resume Building: Support in exploring career
          paths, identifying relevant experiences, and crafting a strong resume.
        </li>
        <li>
          Passion Projects: Guidance on launching creative, entrepreneurial, or
          self-directed projects to showcase individual interests and strengths
          with knowledgeable project mentors.
        </li>
        <li>
          Research Mentorship: With our Oriel Ignite Research Program, students
          have the opportunity to conduct college-level research into an area
          that they are passionate about.
        </li>
        <li>
          Tutoring: Our expert tutors can assist students with academic
          readiness and SAT/ACT preparation.
        </li>
        <li>
          Advising Sessions: During these sessions, students will meet with
          their college counselor in order to discuss a wide range of topics
          related to applying to college.
        </li>
      </ul>
      <p class="mb-4">
        As students transition into the college application process in their
        junior and senior years, we provide:
      </p>
      <ul class="list-disc space-y-4 pl-4">
        <li>
          College List Building: Identifying best-fit colleges depending on a
          student’s profiles and their expectations for their college
          experience.
        </li>
        <li>
          Application Support: Comprehensive guidance on preparing all elements
          of the college application including brainstorming essay topics and
          all revisions and edits to an essay.
        </li>
        <li>
          Interview Preparation: Coaching to help students excel in interviews.
        </li>
        <li>
          Application Evaluation: Feedback on a nearly completed application,
          prior to submission in order to identify opportunities for improvement
          by a former admissions officer.
        </li>
        <li>
          Post Early Decision Evaluations: Strategic advice for improving
          applications after the Early Decision round.
        </li>
        <li>
          Letters of Continued Interest: Assistance in crafting compelling
          letters to demonstrate ongoing enthusiasm and updates to colleges.
        </li>
      </ul>
    </x-accordion>

    <x-accordion heading="What geographic regions do your students come from?">
      <p class="mb-4">
        Our students come from all over the country and from all around the
        world. Our students attend public high schools, charter high schools,
        and private high schools. Additionally, we are well-versed in the
        educational systems of the countries that commonly send their students
        to study in the US.
      </p>
      <p>
        Even if we have not worked with a student from your district before, we
        will quickly familiarize ourselves with your school and what makes it
        unique. After all, there are over 20,000 institutions providing a high
        school education in the US and we have not yet had the opportunity to
        work with students from all of them!
      </p>
    </x-accordion>

    <x-accordion heading="What subjects do your students plan to major in?">
      <p class="mb-4">
        We guide students with diverse academic backgrounds. Our students are
        incredibly diverse in their interests and passions. They are creative
        thinkers, aspiring designers, and artists eager to explore innovative
        fields.
      </p>
      <p class="mb-4">
        Many of our students are drawn to the humanities, seeking a broad and
        interdisciplinary education that fosters critical thinking and a deeper
        understanding of the world around them. We also work with students who
        are passionate about STEM subjects and are driven to build quantitative
        skills in fields like engineering, computer science, and medicine.
      </p>
      <p class="mb-4">
        What sets many of our students apart is their desire to pursue dual
        interests. We encourage them to use their time in high school to explore
        these parallel passions, crafting a unique academic narrative that
        reflects their individuality.
      </p>
      <p>
        Our students apply to a wide variety of colleges and programs. From Ivy
        League universities and small liberal arts colleges to large public
        flagship institutions, they seek out schools that align with their goals
        and aspirations. They apply to specialized programs such as arts and
        design schools, engineering and computer science departments, business
        programs, and even competitive BS/MD programs. No matter the path, we
        help our students present their best selves and achieve success across a
        broad spectrum of academic disciplines.
      </p>
    </x-accordion>

    <x-accordion heading="What colleges do your students apply to?">
      <p class="mb-4">
        Our students apply to every imaginable college in the US, Canada, the
        UK, and other countries throughout the world. Many of our students are
        targeting Ivy League and other highly selective colleges. We are equally
        prepared to support students with diverse goals and college preferences,
        tailoring our guidance to meet their unique aspirations.
      </p>
      <p>
        We recognize that no two students are the same, and we are equally
        prepared to support those pursuing a variety of goals and college
        preferences. Our team tailors guidance to each student's unique
        aspirations, ensuring they find the best-fit schools where they will
        thrive both academically and personally.
      </p>
    </x-accordion>
  </x-faq-section>

  @include('partials.modules.latest-posts')
@endsection
