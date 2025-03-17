<div class="bg-sand full-width py-12 md:py-30">
  <div class="grid grid-cols-1 gap-8">
    <div class="col-start-1 row-start-1">
      <div class="content-grid">
        <h2 class="fade-in-bottom text-6xl-fluid">
          <span class="text-oriel">Additional</span>
          Stand Alone Services
        </h2>
      </div>
    </div>
    @php
      // Define an array of card data
      $cards = [
        [
          'title' => 'Passion Project Development',
          'content' => 'We help students identify, develop, and excel in activities that showcase their passions and leadership potential. We match students with project mentors who are experts in their fields. Under their guidance, students are able to focus more deeply on their interests. These projects allow students to build a compelling narrative that stands out in college applications and aligns with their long-term goals.',
          'button_link' => '#',
          'image' => '',
        ],
        [
          'title' => 'Summer Program Application',
          'content' => 'To make the most of summer break, we identify meaningful opportunities aligned with a student’s academic interests and career goals. Our team creates a tailored list of summer programs and provides expert support in crafting compelling essays and application materials,  ensuring students are well-prepared to pursue enriching summer experiences that foster growth.',
          'button_link' => '#',
          'image' => '',
        ],
        [
          'title' => 'College List Building',
          'content' => 'We curate a personalized list of colleges tailored to a student’s goals, preferences, and strengths. We help the student to identify schools that will be a strong fit and that they would be genuinely excited to attend. All college lists will include a balance between realistic schools, target schools, and dream schools to maximize a student’s chances of success.',
          'button_link' => '#',
          'image' => '',
        ],
        [
          'title' => 'Interview Preparation',
          'content' => 'Through our personalized coaching, students will go into every college interview well prepared. We will help to hone answers and practice delivery, completing mock interviews to allow students to communicate their stories confidently and authentically, leaving a positive impression.',
          'button_link' => '#',
          'image' => '',
        ],
        [
          'title' => 'Career Coaching and Resume Creation',
          'content' => 'We guide students around exploring career interests and building essential professional skills. We assist with identifying internships and leadership experiences and we support students with their applications for these opportunities. We also assist with crafting professional, stand out resumes and aligning student’s high school experiences with future career aspirations.',
          'button_link' => '#',
          'image' => '',
        ],
      ];
    @endphp

    <div class="content-grid overflow-x-clip">
      <div class="">
        <div id="servicesSwiper" class="swiper !overflow-visible">
          <div class="swiper-wrapper">
            @foreach ($cards as $card)
              <div
                class="swiper-slide !h-auto max-md:px-4 md:max-w-[400px] md:grow"
              >
                <x-services-card-2
                  :title="$card['title']"
                  :content="$card['content']"
                />
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
    <div class="content-grid col-start-1 md:row-start-1">
      <div
        class="relative flex items-center justify-center gap-x-4 md:justify-end"
      >
        <x-button-round
          direction="left"
          classes="swiper-button-prev--chevron bg-white"
        ></x-button-round>
        <x-button-round
          classes="swiper-button-next--chevron bg-white"
        ></x-button-round>
      </div>
    </div>
  </div>
</div>
