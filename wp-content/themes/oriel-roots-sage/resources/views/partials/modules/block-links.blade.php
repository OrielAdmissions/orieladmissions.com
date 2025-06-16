<section class="full-width content-grid bg-[#FBF8F6] py-12 md:py-30">
  <h2 class="text-6xl-fluid mx-auto mb-12 md:mb-32 max-w-150 text-center">
    Our Services </h2>
  <div class="breakout">
    <div class="grid grid-cols-12 gap-4">
      <div class="col-span-full md:col-span-6 lg:col-span-4 lg:col-start-2">
        <div class="pin-content md:pr-10">
          {!! wp_get_attachment_image( 22, 'full', false, [ 'class' => 'object-cover object-right w-full rounded-xl' ] ) !!}
        </div>
      </div>
      <div class="long-content col-span-full md:col-span-6 lg:col-span-6">
        @php
          $block_links = [
            [
              'link' => '/admissions-counseling/college',
              'headline' => 'Early Start Counseling',
              'tag' => 'Grade 8-10',
              'content' => '<p class="">These formative years are important for building a strong foundation for success. We will assess a student’s unique strengths, passions, and goals and will design a personalized, strategic roadmap. This roadmap will cover all aspects of a student’s high school journey and we will provide guidance for executing each step of that plan.</p>',
            ],
            [
              'link' => '/admissions-counseling/college',
              'headline' => 'College Application Preparation',
              'tag' => 'Grade 11',
              'content' => '<p class="">During this critical year, we provide holistic support as a student prepares to apply to college. We provide advice on leadership building, extracurricular development, summer planning, college list building, and more. We also offer work closely with students through all aspects of preparing their applications.</p>',
            ],
            [
              'link' => '/admissions-counseling/college',
              'headline' => 'Late-Stage Application Support',
              'tag' => 'Grade 12',
              'content' => '<p class="">Regardless of where you are with preparing your applications, we are ready to jump in! Our team are experts at identifying a student’s strengths and crafting their compelling narrative. We offer tailored suggestions and work with you to execute them, ensuring a refined application.</p>',
            ],
            [
              'link' => '/admissions-counseling/college',
              'headline' => 'Applying to the UK University System',
              'tag' => 'Grade 10-12',
              'content' => '<p class="">If you are considering studying in the UK, our team can help! With a proven track record of assisting students as they apply to college in the UK, we will advise on best-fit programs and guide you through every step of the application process.</p>',
            ],

            [
              'link' => '/high-school-research-program/',
              'headline' => 'Oriel Ignite Research Program',
              'tag' => 'Grade 9-12',
              'content' => '<p class="">Through this stand alone, virtual research program, we match high school students with PhD candidates from top research universities. Students will complete the valuable process of selecting a research topic, collecting and analyzing data, and producing a final paper or project as they dive deeper into their passions.</p>',
            ],
            [
              'link' => '/admissions-counseling/college',
              'headline' => 'Academic Tutoring and Test Prep',
              'tag' => 'Grade 9-12',
              'content' => '<p class="">Our team of tutors support students in preparation for the SAT and the ACT as well as all academic areas. They have the expertise to effectively guide students through all standardized testing, including AP exams, ensuring that students are maintaining their academic profiles.</p>',
            ],
            [
              'link' => '/admissions-counseling/masters-mba/',
              'headline' => "MBA & Master's Admissions",
              'tag' => '',
              'content' => '<p class="">Applying to graduate school is competitive so don’t leave your application to chance. We have the expertise across a wide range of graduate programs and we will work with you to discover the best programs for your goals and to craft tailored applications, geared towards each of your individual schools.</p>',
            ],
          ];
        @endphp

        @foreach ($block_links as $block)
          <div class="hover:bg-sand relative overflow-hidden rounded-xl transition-colors">
            <div class="border-keyline border-b px-6 py-12 pr-10 lg:pr-32">
              <div class="mb-4 inline-flex items-start gap-4 max-lg:flex-col lg:items-center">
                <h3 class="inline-block font-sans text-2xl">
                  {!! $block['headline'] !!}
                </h3>
                <div class="shrink-0">
                  @if ($block['tag'])
                    <div
                      class="bg-oriel mr-4 inline-block rounded-full px-3 py-1.5 text-xs tracking-widest text-white uppercase">
                      {{ $block['tag'] }}
                    </div>
                  @endif

                  @if ($block['link'])
                    <a href="{{ $block['link'] }}" class="stretched-link">
                      {!! get_svg('images.chevron-right', 'inline-block size-6 absolute top-14 right-4 lg:top-1/2 lg:-translate-y-1/2') !!}
                    </a>
                  @endif
                </div>
              </div>

              <p class="">{!! $block['content'] !!}</p>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</section>
