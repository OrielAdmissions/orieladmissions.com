@extends('layouts.app')
@section('content')
  <div
    class="flex min-h-svh flex-col items-center justify-center overflow-hidden py-24 text-center"
  >
    <h2 class="fade-in-bottom text-8xl-fluid mb-4">
      We are
      <span
        x-data="textCycler()"
        x-ref="text"
        data-words="Passionate,Student-centric,Admissions-obsessed,Detail-oriented,Perfectionists,Creative thinkers,Your college experts"
        class="text-oriel block"
      >
        Passionate
      </span>
    </h2>
    <p class="mx-auto mb-4 max-w-md font-serif text-[32px]/tight font-light">
      And, collectively, we have reviewed thousands of applications!
    </p>
    <a href="/contact/" class="btn btn-primary">Contact Us</a>
  </div>
  <div class="full-width">
    <?php
    echo App\get_picture([21], 'full', false, [
      'class' =>
        'object-cover object-right mx-auto rounded-xl img-grow w-screen-xl',
    ]); ?>
  </div>
  <div class="breakout">
    <div class="relative overflow-hidden pt-18 pb-47 lg:pt-30 lg:pb-70">
      <div class="grid gap-4 gap-x-6 max-lg:text-center lg:grid-cols-12">
        <div class="lg:col-span-5 lg:col-start-2">
          <h2 class="text-6xl-fluid max-w-130 max-lg:mx-auto">
            The Oriel Admissions team are
            <span class="text-oriel">experts</span>
            in our fields.
          </h2>
        </div>
        <p class="text-xl lg:col-span-3 lg:col-start-9">
          We are former admissions officers, dedicated college counselors,
          creative writing specialists, academic tutors, project mentors, and
          more.
        </p>
      </div>
      {!! get_svg('images.oriel-shape-outline', 'absolute bottom-0 max-lg:translate-y-[84%] translate-y-[70%] max-w-full h-auto right-0 left-0 mx-auto text-cardinal/40') !!}
    </div>
  </div>
  <section class="bg-cardinal full-width content-grid">
    <div class="breakout mx-auto py-20 text-white lg:pt-24 lg:pb-4">
      <h2 class="text-6xl-fluid mb-10 md:mb-30 md:text-center">
        Meet our founder
      </h2>

      <div class="grid grid-cols-12 gap-x-4 gap-y-6">
        <div class="col-span-full lg:col-span-7">
          <div class="">
            <?php
            echo App\get_picture([76], 'full', false, [
              'class' => 'object-cover object-right w-full rounded-xl',
            ]); ?>
          </div>
        </div>
        <div class="col-span-full lg:col-span-4 lg:col-start-9">
          <div class="space-y-8 font-normal xl:max-w-[400px]">
            <p class="text-xl">
              Rona, the founder of Oriel Admissions, is dedicated to providing
              students and families with the knowledge and support that they
              need to navigate the complex process of college admissions. Rona
              started her admissions journey by working with the MBA admissions
              team at the Said Business School, the University of Oxford. Since
              then, she has amassed a wealth of experience working with hundreds
              of students and families on their own college and post-graduate
              journeys.
            </p>

            <p class="text-xl">
              Rona loves to bring a sense of creativity, entrepreneurship, and
              purpose to guiding students to explore their interests in
              authentic and meaningful ways, infusing individuality into the
              application process.
            </p>

            <p class="text-xl">
              Rona holds a Master of Business Administration from the Said
              Business School, the University of Oxford, a Master of Arts in
              Economics from New York University, and a Bachelor of Arts in
              Economics from Brandeis University.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
    @php
      $teamQuery = new WP_Query([
        'post_type'      => 'team_member',
        'posts_per_page' => -1,
        'orderby'        => 'menu_order', // Orders by the explicit order set in page attributes
        'order'          => 'ASC'         // Change to 'DESC' if needed
      ]);
    @endphp

    @if($teamQuery->have_posts())
      <div class="breakout py-12 md:py-30">
        <h2 class="text-6xl-fluid mx-auto mb-12 md:mb-30 max-w-screen-sm text-center">
          Our team
        </h2>
        <div class="breakout">
          <div class="mx-auto grid grid-cols-[repeat(auto-fill,_minmax(min(275px,_300px),_1fr))] gap-4">
            @while($teamQuery->have_posts())
              @php $teamQuery->the_post(); @endphp
              <x-team-card
                :name="get_the_title()"
                :role="get_field('role')"
                :education="get_field('education')"
                :link="get_field('link_text')"
                :bio="get_the_content()"
              >
                <x-slot:image>
                  {!! get_the_post_thumbnail(null, 'full', [
                    'class' => 'team-card__image object-center mx-auto aspect-square h-auto w-full max-w-full object-cover'
                  ]) !!}
                </x-slot>
              </x-team-card>
            @endwhile
          </div>
        </div>
      </div>
      @php wp_reset_postdata(); @endphp
    @endif



  <x-faq-section title="Need some more help? Here are some answers.">
    <x-accordion
      heading="Will my child work with the same counselor during the entire process?"
    >
      <p>
        All students will have a primary college counselor as well as a team of
        professionals available to support them. The Oriel Admissions team
        includes SAT and ACT tutors, academic tutors, career coaches, project
        mentors, and writing coaches who will work with students to build a
        holistic set of skills. Oriel Admissions goes above and beyond to ensure
        that each student is paired with a college counselor who aligns with
        their unique needs. If a student ever feels the need for a different
        fit, the team is committed to facilitating a seamless transition to
        another counselor. The same is applicable for the other members of the
        Oriel Admissions team.
      </p>
    </x-accordion>
    <x-accordion heading="How many students do your counselors work with?">
      <p class="mb-4">
        Our counselors intentionally limit the number of students they work with
        to ensure each student receives the highest level of personalized
        support. A counselor will only take on a new student if they have
        sufficient time in their schedule and will refrain from accepting
        additional students once their capacity is reached.
      </p>
    </x-accordion>

    <x-accordion
      heading="How is Oriel Admissions different from other college counseling firms?"
    >
      <p class="mb-4">
        Oriel Admissions provides a highly personalized, boutique service to
        students and families. We care deeply about building relationships and
        we keep in touch with many of our clients, even after they have begun
        their college careers.
      </p>
      <p class="mb-4">
        Our approach to college counseling mirrors the holistic nature of the
        application evaluation process. We want students to build a wide range
        of skills so that they are better prepared to succeed in high school, in
        college, and beyond. With our full suite of services, we are well
        equipped to help students excel throughout their educational journeys.
      </p>
      <p class="mb-4">
        For students targeting selective colleges, students are expected to dive
        deep into a field of interest and we specialize in finding ways for
        students to stand out. We advise on pursuing entrepreneurial projects,
        passion projects, self-directed research, finding internships, and other
        unique opportunities.
      </p>
      <p class="mb-4">
        Our team is another factor that sets us apart. All team members are
        carefully selected for their extensive experience and passion for
        working with students. Our team members are not only experts in their
        fields but also highly responsive and approachable. They are strong
        communicators who take the time to get to know each student personally.
      </p>
      <p>
        Students benefit from the collective insights of multiple team members,
        each bringing a unique perspective and skill set to the table. This
        team-based approach allows us to offer well-rounded guidance that helps
        students feel confident and prepared.Our team’s dedication to student
        success is at the heart of our work and we are proud to support students
        and families through this important journey.
      </p>
    </x-accordion>
  </x-faq-section>
@endsection
