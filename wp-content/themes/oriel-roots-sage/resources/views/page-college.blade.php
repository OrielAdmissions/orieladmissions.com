@extends('layouts.app')

@section('content')


  <x-hero>
    <x-slot name="headline">
      <h1
        class="fade-in-bottom text-8xl-fluid justify-self-center mx-auto max-w-200 text-center text-white"
      >
        We are with you every step of the way.
      </h1>
    </x-slot>
  </x-hero>

  <div class="space-y-8 py-12 md:py-30">
    <h2 class="text-6xl-fluid text-center">
      Our
      <span class="text-oriel">comprehensive</span>
      services
    </h2>

    <?php

    $services = [
      [
        'image_id' => 97,
        'grade' => 'Grades 8-10',
        'title' => 'Early Start Counseling',
        'description' =>
          'These years are all about discovery, planning, and careful execution. We start each engagement by crafting a personalized, strategic roadmap that aligns with a student’s passions and goals. With this strategy in place, we will work with students to provide the right guidance throughout high school, making tweaks or adjustments along the way.',
        'accordion' => [
          'heading' => 'What do packages include?',
          'content' =>
            '<p>We provide expert strategy to highlight your strengths in college applications.</p>',
        ],
      ],
      [
        'image_id' => 93,
        'grade' => 'Grade 11',
        'title' => 'College Application Preparation',
        'description' =>
          '11th grade is the time to refine, perfect, and to begin planning for college applications. We meticulously support students through this critical year, advising about the best academic and leadership experiences to pursue and helping students to build a list of best-fit colleges. For applications, we help students to identify their compelling narrative and guide them through all of the components of the application, from essay writing to interview preparation.',
        'accordion' => [
          'heading' => 'What do packages include?',
          'content' =>
            '<p>We provide expert strategy to highlight your strengths in college applications.</p>',
        ],
      ],
      [
        'image_id' => 94,
        'grade' => 'Grade 12',
        'title' => 'Late-Stage Application Support',
        'description' =>
          'For students in the final stretch of the application process, we are great at polishing applications. We will help you to highlight your strengths and unique story, brainstorming essay topics, improving resumes, and refining your writing until your application is absolutely perfect.',
        'accordion' => [
          'heading' => 'What do packages include?',
          'content' =>
            '<p>We provide expert strategy to highlight your strengths in college applications.</p>',
        ],
      ],
      [
        'image_id' => 95,
        'grade' => 'Grades 10-12',
        'title' => 'Applying to the UK University System',
        'description' =>
          'Colleges in the UK have their own unique set of expectations and we will help you to navigate them! We will walk you through the UCAS system, help you to select the perfect programs, and assist in developing a standout personal statement. We will ensure that you have the knowledge and expert guidance to make applying to UK colleges stress-free.',
        'accordion' => [
          'heading' => 'What do packages include?',
          'content' =>
            '<p>We provide expert strategy to highlight your strengths in college applications.</p>',
        ],
      ],
      [
        'image_id' => 97, // New service
        'grade' => 'All Grades',
        'title' => 'Academic Tutoring and Test Prep',
        'description' =>
          'Maintaining a strong academic profile is critical when applying to college. As part of the counseling process, your counselor will advise if a student needs any additional academic or test prep support. Our team of tutors will coordinate with the counselor to provide expert guidance on the SAT, ACT, AP exams, or any other academic needs, allowing students to reach their full potential.',
        'accordion' => [
          'heading' => 'What do packages include?',
          'content' =>
            '<p>We provide expert tutoring and test prep to maximize academic success.</p>',
        ],
      ],
      [
        'image_id' => 96,
        'grade' => 'Grades 9-12',
        'title' => 'Support for International Students',
        'description' =>
          'At Oriel Admissions, we have the expertise to support international students to navigate the complex process of applying to US colleges and universities. We have an in-depth knowledge of diverse international academic systems and we offer highly personalized guidance tailored to your unique aspirations. Our expertise is designed to maximize your chances of success and help you stand out in the competitive college admissions process.',
        'accordion' => [
          'heading' => 'What do packages include?',
          'content' =>
            '<p>We provide expert guidance for international students applying to US colleges.</p>',
        ],
      ],
    ];

    ?>
    <x-services-card
      grade="Grades 8-10"
      title="Early Start Counseling"
      description="These years are all about discovery, planning, and careful execution. We start each engagement by crafting a personalized, strategic roadmap that aligns with a student’s passions and goals. With this strategy in place, we will work with students to provide the right guidance throughout high school, making tweaks or adjustments along the way."
      image_id="97"
    >
      <x-slot name="accordion">
        <x-accordion heading="What do packages include?">
          <ul class="grid list-image-(--red-chevron) pl-3 gap-4 md:grid-cols-2">
            @foreach ([
                'Creation of a Strategic Roadmap',
                'Advising Sessions',
                'Course Selection Support',
                'Extracurricular Planning',
                'Leadership Development',
                'Identify Summer Programs',
                'Applying to Summer Program',
                'Support for Passion Projects',
                'College List Building',
                'Professional Resume'
              ]
              as $subject)
              <li class="text-sm pl-1">

                <span>{{ $subject }}</span>
              </li>
            @endforeach
          </ul>
        </x-accordion>
      </x-slot>
    </x-services-card>

    <x-services-card
      grade="Grade 11"
      title="College Application Preparation"
      description="11th grade is the time to refine, perfect, and to begin planning for college applications. We meticulously support students through this critical year, advising about the best academic and leadership experiences to pursue and helping students to build a list of best-fit colleges. For applications, we help students to identify their compelling narrative and guide them through all of the components of the application, from essay writing to interview preparation."
      image_id="93"
    >
      <x-slot name="accordion">
        <x-accordion heading="What do packages include?">
          <ul class="grid list-image-(--red-chevron) pl-3 gap-4 md:grid-cols-2">
            @foreach ([
              'Application Strategy',
              'College List Building',
              'Creative Writing Development',
              'Professional Resume',
              'Brainstorming for the Personal Statement and Comprehensive Revision Support',
              'Revising and Editing College-Specific Supplemental Essays',
              'Revising and Editing the Additional Information Essay',
              'All Other Application Support',
              'Independent Review of the Application by a Former Admissions Officer and Feedback'
            ] as $item)
              <li class="text-sm pl-1">

                <span>{{ $item }}</span>
              </li>
            @endforeach
          </ul>

        </x-accordion>
      </x-slot>
    </x-services-card>

    <x-services-card
      grade="Grade 12"
      title="Late-Stage Application Support"
      description="For students in the final stretch of the application process, we are great at polishing applications. We will help you to highlight your strengths and unique story, brainstorming essay topics, improving resumes, and refining your writing until your application is absolutely perfect."
      image_id="94"
    >
      <x-slot name="accordion">
        <x-accordion heading="What do packages include?">
          <ul class="grid list-image-(--red-chevron) pl-3 gap-4 md:grid-cols-2">
            @foreach ([
              'Full Review of the Common App',
              'Refinement of the Application Narrative',
              'Actionable Suggestions and Direction for Improving the Application'
            ] as $item)
              <li class="text-sm pl-1">

                <span>{{ $item }}</span>
              </li>
            @endforeach
          </ul>

        </x-accordion>
      </x-slot>
    </x-services-card>

    <x-services-card
      grade="Grades 10-12"
      title="Applying to the UK University System"
      description="Colleges in the UK have their own unique set of expectations and we will help you to navigate them! We will walk you through the UCAS system, help you to select the perfect programs, and assist in developing a standout personal statement. We will ensure that you have the knowledge and expert guidance to make applying to UK colleges stress-free."
      image_id="95"
    >
      <x-slot name="accordion">
        <x-accordion heading="What do packages include?">
          <ul class="grid list-image-(--red-chevron) pl-3 gap-4 md:grid-cols-2">
            @foreach ([
              'College List Building Specifically for UK Universities',
              'Brainstorming for the Personal Statement and Comprehensive Revision Support',
              'Support in completing the UCAS Application',
              'Expert Advice for Applying to Oxford or Cambridge'
            ] as $item)
              <li class="text-sm pl-1">

                <span>{{ $item }}</span>
              </li>
            @endforeach
          </ul>

        </x-accordion>
      </x-slot>
    </x-services-card>

    <x-services-card
      grade="All Grades"
      title="Academic Tutoring and Test Prep"
      description="Maintaining a strong academic profile is critical when applying to college. As part of the counseling process, your counselor will advise if a student needs any additional academic or test prep support. Our team of tutors will coordinate with the counselor to provide expert guidance on the SAT, ACT, AP exams, or any other academic needs, allowing students to reach their full potential."
      image_id="97"
    >
      <x-slot name="accordion">
        <x-accordion heading="What do packages include?">
          <ul class="grid list-image-(--red-chevron) pl-3 gap-4 md:grid-cols-2">
            @foreach ([
              'Personalized SAT Test Prep',
              'Personalized ACT Test Prep',
              'Academic Tutoring across all subjects',
              'AP Exams'
            ] as $item)
              <li class="text-sm pl-1">

                <span>{{ $item }}</span>
              </li>
            @endforeach
          </ul>

        </x-accordion>
      </x-slot>
    </x-services-card>

    <x-services-card
      grade="Grades 9-12"
      title="Support for International Students"
      description="At Oriel Admissions, we have the expertise to support international students to navigate the complex process of applying to US colleges and universities. We have an in-depth knowledge of diverse international academic systems and we offer highly personalized guidance tailored to your unique aspirations. Our expertise is designed to maximize your chances of success and help you stand out in the competitive college admissions process."
      image_id="96"
    >
      <x-slot name="accordion">
        <x-accordion heading="What do packages include?">
          <ul class="grid list-image-(--red-chevron) pl-3 gap-4 md:grid-cols-2 grid-flow-row auto-rows-auto">
            @foreach ([
              'Creation of a Strategic Roadmap with your Educational System in Mind',
              'Advising Sessions',
              'Course Selection Support',
              'Extracurricular Planning',
              'Leadership Development',
              'Identify Summer Programs',
              'Applying to Summer Program',
              'Support for Passion Projects',
              'College List Building',
              'Professional Resume',
              'Comprehensive Support for Completing the Common App and/or other Applications'
            ] as $item)
              <li class="text-sm pl-1">
                <span>{{ $item }}</span>
              </li>
            @endforeach
          </ul>

        </x-accordion>
      </x-slot>
    </x-services-card>

  </div>

  @include('partials.modules.services-slider')

  <x-faq-section title="Need some more help? Here are some answers.">
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
      <p>
        For our long-term counseling engagements, we create a Strategic Roadmap
        that is personalized to each student and is designed to provide guidance
        for how a student spends their time in high school. We can build this
        roadmap for our students as early as 8th grade up to as late as the
        first portion of 11th grade.
      </p>
    </x-accordion>

    <x-accordion heading="What does a Strategic Roadmap typically include?">
      <p class="mb-4">
        The Strategic Roadmap combines academic planning with extracurricular
        and leadership development. However, all Strategic Roadmaps are
        completely personalized to the student and no two are alike!
      </p>
      <p>
        The Strategic Roadmap will take into consideration the academic
        trajectory of a student and where they might need to double up on
        coursework or build new academic skill sets. The extracurricular and
        leadership development portion of the roadmap will provide guidance on
        the numerous ways in which a student may explore their budding interests
        and will make suggestions for finding meaningful ways to develop those
        passions and to make an impact in their community.
      </p>
    </x-accordion>

    <x-accordion
      heading="Will my child work with the same person during the entire process?"
    >
      <p class="mb-4">
        All students will have a primary college counselor as well as a team of
        professionals available to support them. The Oriel Admissions team
        includes SAT and ACT tutors, academic tutors, PhD research mentors,
        career coaches, executive functioning coaches, project mentors, and
        writing coaches who will work with students to build a holistic set of
        skills.
      </p>
      <p>
        Oriel Admissions goes above and beyond to ensure that each student is
        paired with a college counselor who aligns with their unique needs. If a
        student ever feels the need for a different fit, the team is fully
        committed to facilitating a seamless transition to another counselor.
        The same is applicable for the other members of the Oriel Admissions
        team.
      </p>
    </x-accordion>

    <x-accordion heading="How many students do your counselors work with?">
      <p>
        Our counselors intentionally limit the number of students they work with
        to ensure each student receives the highest level of personalized
        support. A counselor will only take on a new student if they have
        sufficient time in their schedule and will refrain from accepting
        additional students once their capacity is reached.
      </p>
    </x-accordion>

    <x-accordion heading="What geographic regions do your students come from?">
      <p class="mb-4">
        Our students come from all over the country and from all around the
        world. Our students attend public high schools, charter high schools,
        and private high schools. We are well versed in the educational systems
        of the countries that commonly send their students to study in the US.
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
        creative, love the humanities, and are passionate about STEM subjects.
        They are interested in applying to small liberal arts colleges, arts
        programs, engineering departments, computer science, business schools,
        BS/MD programs, and everything in between.
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
    </x-accordion>
  </x-faq-section>
@endsection
