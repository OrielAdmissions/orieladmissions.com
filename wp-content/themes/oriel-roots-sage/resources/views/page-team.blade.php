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
    <a href="/contact" class="btn btn-primary">Contact Us</a>
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
  <div class="breakout py-12 md:py-30">
    <h2
      class="text-6xl-fluid mx-auto mb-12 md:mb-30 max-w-screen-sm text-center"
    >
      Our team
    </h2>
    @php
      $teamMembers = [
        [
          'name' => 'Alyssa',
          'role' => 'Student Success Manager',
          'education' => 'Boston University',
          'image_file_name' => 'Alyssa-Headshot.jpg',
          'image_class' => 'object-center',
          'link_text' => 'Meet Alyssa',
          'bio' => "<p>Alyssa has over 12 years of account management experience, spending the first half of her career in digital marketing and advertising, developing large scale campaigns for major brands. She then transitioned into the education technology sector, working for General Assembly, a digital and technical skills training provider. Alyssa has partnered with companies including Walmart, Prudential, Google, and many others to create immersive training programs tailored towards meeting their critical learning and development goals. She is passionate about the transformative power of training and education to advance careers. <br><br>Alyssa holds a Bachelor's degree from Boston University. Alyssa is also a holder of multiple certificates from General Assembly programs including in Data Analytics and AI.
                                                                                                                                                                                                                                                                        </p>",
        ],
        [
          'name' => 'Clarissa',
          'role' => 'College Counselor',
          'education' => 'Dartmouth College',
          'image_file_name' => 'Clarissa-Headshot.jpg',
          'image_class' => 'object-top',
          'link_text' => 'Meet Clarissa',
          'bio' => '<p>Clarissa is a dedicated admissions professional committed to helping students craft compelling college applications that authentically reflect their voices, values, and aspirations. Previously, Clarissa served as an Admissions Officer at Dartmouth College, covering multiple territories including Connecticut, Maryland, and New Jersey and reading and evaluating over 1000 applications. At Dartmouth, Clarissa was also involved in shaping the Office of Undergraduate Admissions’ strategic communications. <br><br>
                                                                                                                                                                                                                                                                              Clarissa graduated from Vassar College with a Bachelor of Arts degree in English and a minor in Hispanic Studies.
                                                                                                                                                                                                                                                                              </p>',
        ],
        [
          'name' => 'Rita',
          'role' => 'College Counselor',
          'education' => 'Johns Hopkins University',
          'image_file_name' => 'Rita-Headshot.jpg',
          'image_class' => 'object-center',
          'link_text' => 'Meet Rita',
          'bio' => "<p>Rita has nearly 10 years of experience working in admissions at Johns Hopkins University. Throughout her experience, Rita has evaluated hundreds of applications annually, and has assisted high school students with college preparation and readiness, including review of personal statements, application essays, scholarship essays, and resumes. Before working at Johns Hopkins University, Rita worked at NAFSA: Association of International Educators, a nonprofit dedicated to international education and cultural exchange.
                                                                                                                                                                                                                                                                   <br><br>
                                                                                                                                                                                                                                                                  Rita is an alumnus of University of Pittsburgh where she completed her undergraduate degree, and Johns Hopkins University where she completed her masters degree.
                                                                                                                                                                                                                                                                  </p>",
        ],
        [
          'name' => 'Dejuanna',
          'role' => 'College Counselor',
          'education' => 'Johns Hopkins University',
          'image_file_name' => 'Dejuanna-Headshot.jpg',
          'image_class' => 'object-center',
          'link_text' => 'Meet Dejuanna',
          'bio' => "<p>Dejuanna is a dedicated higher education professional with a strong passion for empowering students to reach their full academic potential. She graduated from Radford University in 2019, earning her Bachelor’s degree in Interdisciplinary Studies. Following her commitment to personal and professional growth, Dejuanna pursued a Master's in Education Leadership from Old Dominion University, which she completed in 2023.
                                                                                                                                                                                                                                                            <br><br>With six years of experience in higher education, Dejuanna has worked at prestigious institutions including the University of Virginia, the University of Illinois Urbana-Champaign, and Johns Hopkins Carey Business School. Throughout her career, she has contributed to fostering student success, collaborating with academic teams, and implementing programs that support student development.
                                                                                                                                                                                                                                                            <br><br>Dejuanna's career reflects her deep belief in helping students overcome obstacles and unlock their potential. Whether guiding students through academic challenges or providing mentorship, she strives to create environments that are inclusive and supportive, helping students set and achieve their personal and academic goals. She remains committed to advancing educational equity, making a lasting impact on the institutions and students she serves.
                                                                                                                                                                                                                                                            </p>",
        ],
        [
          'name' => 'Joy',
          'role' => 'College Counselor',
          'education' => 'Washington University in St. Louis',
          'image_file_name' => 'Joy-Headshot.jpg',
          'image_class' => 'object-center',
          'link_text' => 'Meet Joy',
          'bio' => "<p>Joy is a highly accomplished admissions coach with over six years of counseling experience. Her college counseling specialties include business, social sciences, and the humanities. Joy earned her Bachelor of Arts in English from Nanjing University and completed her master's degree at Washington University in St. Louis on a full scholarship, later pursuing an MBA there. Her professional background includes working in international marketing and serving as a project manager for a creative agency, working with Fortune 100 clients. Additionally, Joy has experience advising students on applications to leading institutions in the UK, Canada, Japan, and Hong Kong. Joy is also fluent in English and Mandarin.</p>",
        ],
        [
          'name' => 'Jessie',
          'role' => 'Writing Coach',
          'education' => 'New York University',
          'image_file_name' => 'Jessie-Headshot.jpg',
          'image_class' => 'object-center',
          'link_text' => 'Meet Jessie',
          'bio' => "<p>Jessie is a writer, author, and educator with over eight years of experience teaching creative writing and leading workshops in both large classroom and small group settings with an emphasis on individualized mentorship. She is skilled at creating interactive, play-forward, and supportive environments where students feel empowered to explore new ideas and express themselves confidently. Also the author of six middle-grade novels, all published by Scholastic, Jessie brings a storyteller’s perspective to every session. Jessie holds a Bachelor of Fine Art from NYU's Tisch School of the Arts and a Master of Fine Arts in Writing for Children from The New School.</p>",
        ],
        [
          'name' => 'Thea',
          'role' => 'Writing Coach',
          'education' => 'University of Michigan',
          'image_file_name' => 'Thea-Headshot.jpg',
          'image_class' => 'object-center',
          'link_text' => 'Meet Thea',
          'bio' => "<p>Thea is a writer, teacher, and editor based in the Bay Area. She received her Bachelor of Arts in English from Mills College and a Master of Fine Arts in fiction writing from the University of Michigan's Helen Zell Writers' Program, where she was a 2019-2020 Postgraduate Zell Fellow. As a teacher, she has taught writing at the professional level at the Attic Institute in Portland, Oregon and the University of Michigan. She has been the recipient of the Henfield Prize, a Hopwood Award, the Kadsan Scholarship in Creative Writing, and Michigan Quarterly Review's 2024 Lawrence Foundation Prize; as well as fellowships and scholarships from Yaddo, In Cahoots, and the Bread Loaf Writer's Conference. Her short stories appear or are forthcoming in the Southern Review, Michigan Quarterly Review, the Missouri Review, Hopkins Review, and Indiana Review. She is currently a 2024-2025 Steinbeck Fellow at San Jose State University.</p>",
        ],
        [
          'name' => 'Kendra',
          'role' => 'Writing Coach',
          'education' => 'University of Pennsylvania',
          'image_file_name' => 'Kendra-Headshot.jpg',
          'image_class' => 'object-center',
          'link_text' => 'Meet Kendra',
          'bio' => "<p>Kendra is a writing coach based in Philadelphia with over ten years of experience working in higher education admissions. She has worked with students in various roles at the University of Pennsylvania, the University of Pittsburgh, Drexel University, and Saint Joseph's University. A passionate writer since childhood, Kendra loves helping others refine their essays and prepare successful higher education applications. Kendra holds a Bachelor of Arts in English Nonfiction Writing and a Master of Education in Higher Education Administration, both from the University of Pittsburgh. </p>",
        ],
        [
          'name' => 'Lindsey',
          'role' => 'Application Evaluator and Project Mentor',
          'education' => 'Cornell University',
          'image_file_name' => 'Lindsey-Headshot.jpg',
          'image_class' => 'object-center',
          'link_text' => 'Meet Lindsey',
          'bio' => "<p>Lindsey is a former reader for Cornell University College of Engineering. In her role, she evaluated hundreds of applications and candidates across the United States. She has also served as an interviewer for undergraduate candidates to the university. She received her Bachelor of Science in Operations Research Engineering from Cornell, her Master of Science in Computer Science from the University of Chicago, and her MBA from the University of Chicago Booth School of Business.
                                                                                                                                            <br><br>
                                                                                                                                            Lindsey is currently a Vice President at The Stephens Group, a private equity firm and family office with over $1B in assets under management. She brings over a decade of experience driving operational excellence and value creation with portfolio companies, focusing on industrial distribution, manufacturing, and SaaS businesses. In her role, she leads initiatives to enhance organizational performance, increase profitability, and unlock growth across the firm’s investments. Prior to her current role, Lindsey spent seven years as a consultant at BCG, Accenture Strategy, and Kurt Salmon, serving Fortune 500 clients in the retail, food and beverage, and pharmaceutical industries.
                                                                                                                                            <br><br>
                                                                                                                                            Originally from Princeton, NJ, Lindsey graduated from West Windsor-Plainsboro High School South. She enjoys reading, watching tennis, diving, and traveling the world!
                                                                                                                                            </p>",
        ],
        [
          'name' => 'Zoe',
          'role' => 'Academic and Test Prep Tutor',
          'education' => 'Harvard University, Caltech',
          'image_file_name' => 'Zoe-Headshot.jpg',
          'image_class' => 'object-center',
          'link_text' => 'Meet Zoe',
          'bio' => '<p>Zoe is a passionate tutor specializing in SAT and ACT preparation as well as tutoring in all levels of math and science. She has ten years of tutoring experience and has worked with hundreds of students to improve their standardized test scores. Zoe graduated from the California Institute of Technology (Caltech) with a Bachelor of Science in Biology and is currently completing a PhD in Neuroscience at Harvard University. </p>',
        ],
        [
          'name' => 'Ellie',
          'role' => 'Academic and Test Prep Tutor',
          'education' => 'University of California, Berkeley',
          'image_file_name' => 'Ellie-Headshot.jpg',
          'image_class' => 'object-center',
          'link_text' => 'Meet Ellie',
          'bio' => "<p>Ellie is a graduate of the University of California, Berkeley with a Bachelor of Arts degree in Global Studies and Spanish & Portuguese. With nine years of teaching and tutoring experience, Ellie has dedicated her career to helping students excel academically and develop lifelong learning skills. As an online SAT and AP test prep instructor, Ellie has successfully guided hundreds of students in SAT preparation as well as in AP English, AP History, and AP Spanish courses.
                                                                                                                                    <br><br>
                                                                                                                                    Graduating from Canyon Crest Academy, a nationally ranked high school in San Diego, Ellie completed 13 AP classes, including AP Calculus BC and AP Art History, and scored 1510 on the SAT. This intensive high school experience has not only equipped her to tutor AP subjects effectively but has also helped her empathize with students' challenges and aspirations. Ellie believes in fostering not only academic success but also essential skills such as effective study habits and time management. Her approach to tutoring empowers students to not only thrive in advanced high school courses but also to excel in college and beyond.
                                                                                                                                    </p>",
        ],
        [
          'name' => 'Tanner',
          'role' => 'Academic and Test Prep Tutor',
          'education' => 'University of Texas at Austin',
          'image_file_name' => 'Tanner-Headshot.jpg',
          'image_class' => 'object-center',
          'link_text' => 'Meet Tanner',
          'bio' => '<p>    Academic and Test Prep Tutor Tanner College: University of Texas at Austin A
                                                                                                    thoughtful and deliberate tutor, Tanner is open and honest in his
                                                                                                    communication and genuinely enjoys helping others succeed. He holds a
                                                                                                    Bachelor of Art in geology from Gustavus Adolphus College, a Master of
                                                                                                    Science in geological sciences from East Carolina University, and a
                                                                                                    certificate degree in environmental geology and hydrology from East Carolina
                                                                                                    University. He was the recipient of the Chester Johnson Honors Geology
                                                                                                    Scholarship and a research grant award from the Geological Society of
                                                                                                    America, as well as named president of Sigma Gamma Epsilon. After earning
                                                                                                    his Masters, Tanner spent 6 months at sea aboard an oceanic research
                                                                                                    expedition exploring volcanism and seismology in the north Pacific and
                                                                                                    Antarctica. He is continuing this work as he pursues his PhD from the
                                                                                                    University of Texas at Austin. <br><br> Tanner has been a private tutor since 2017,
                                                                                                    working with high school students on ACT/SAT prep, AP physics, AP chemistry,
                                                                                                    and a variety of other math and science subjects. Tanner’s tutoring style
                                                                                                    promotes the critical thinking and problem-solving strategies required to
                                                                                                    work through any problem independently and helps students to grow in their
                                                                                                    confidence.</p>',
        ],
        [
          'name' => 'Alison',
          'role' => 'Wellness Coach',
          'image_file_name' => 'Alison-Headshot.jpg',
          'image_class' => 'object-center',
          'link_text' => 'Meet Alison',
          'bio' => '<p>Alison specializes in helping students manage stress, anxiety, and test performance to reach their full potential. With over 2,000 hours of training in functional health coaching, breathwork education, and life coaching, she provides personalized, science-backed strategies to enhance focus, emotional regulation, and resilience. By integrating evidence-based breathwork, nervous system regulation, and holistic wellness practices, Alison equips students with the tools they need to stay calm, confident, and perform at their best—both academically and personally.</p>',
        ],
        [
          'name' => 'Carrie',
          'role' => 'Career Coach',
          'image_file_name' => 'Carrie-Headshot.jpg',
          'image_class' => 'object-center',
          'link_text' => 'Meet Carrie',
          'bio' => '<p>Carrie is a personal and professional development coach who brings over 20 years
                                                                            of corporate experience in hiring and career development to her collaborative coaching
                                                                            approach. Ms. Morris has worked with some of Fortune 500’s leading companies,
                                                                            advising them on best hiring practices and the competitive candidate landscape.
                                                                            Ms. Morris has extensive experience in understanding the results of neuropsychological
                                                                            and psycho-educational evaluations, using these results to engage in targeted career
                                                                            design, while incorporating the results of career centered assessments to carefully
                                                                            pinpoint career paths that match abilities, interests, personalities and values.
                                                                            She has a passion partnering with college-bound and graduate students helping them
                                                                            better navigate the organizational & career exploration process, with an understanding
                                                                            and appreciation for their preferred learning style, agility and most authentic expression
                                                                            of their developing leadership style in the workplace.</p>',
        ],
        [
          'name' => 'Becky',
          'role' => 'Career Coach',
          'image_file_name' => 'Becky-Headshot.jpg',
          'image_class' => 'object-center',
          'link_text' => 'Meet Becky',
          'bio' => '<p>With over 20 years of experience in career coaching, job search strategy, career and job counseling, work life and wellness, Becky is passionate about coaching individuals toward achieving success, balance and fulfillment in their lives and careers. Throughout her career, she has helped hundreds of coaching clients. Becky’s approach to coaching is to serve as a thinking partner to individuals wanting to improve their path forward. With a goal-oriented approach, Becky enjoys working with students to discover their strengths and to translate them into a career path.</p>',
        ],
        [
          'name' => 'Julia',
          'role' => 'Career Coach',
          'image_file_name' => 'Julia-Headshot.jpg',
          'image_class' => 'object-center',
          'link_text' => 'Meet Julia',
          'bio' => '<p>Julia MS, CPCC is your resident Career Clarity Coach. A counselor by trade, a corporate trainer by choice, and a mentor by calling, she has spent over 20 years observing human behavior in the workplace. Leading talent, hiring talent, training talent, and now as the head of Purpose Geek Solutions LLC, it is her passion and purpose to help people find career fulfillment at every age and stage, from just discovering their path to experienced professionals looking for change.</p>',
        ],
      ];
    @endphp

    <div class="breakout">
      <div
        class="mx-auto grid grid-cols-[repeat(auto-fill,_minmax(min(275px,_300px),_1fr))] gap-4"
      >
        @foreach ($teamMembers as $member)
          <x-team-card
            :name="$member['name']"
            :role="$member['role']"
            :education="$member['education']"
            :image_file_name="$member['image_file_name']"
            :link="$member['link_text']"
            :bio="$member['bio']"
          >
            <x-slot:image>
              <img
                src="{{ Vite::asset('resources/images/Headshots/' . $member['image_file_name']) }}"
                alt="{{ $member['name'] }}"
                class="team-card__image {{ $member['image_class'] }} mx-auto aspect-square h-auto w-full max-w-full object-cover"
              />
            </x-slot>
          </x-team-card>
        @endforeach
      </div>
    </div>
  </div>

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
