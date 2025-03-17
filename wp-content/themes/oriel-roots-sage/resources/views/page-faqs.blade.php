@extends('layouts.app')

@section('content')
  <x-faq-section title="Explore our FAQs here.">
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
      <p>
        However, we can also support students in the later stages of their high
        school experience and often engage with students who are rising into
        their senior year or who may need assistance improving their
        applications while in their senior year.
      </p>
    </x-accordion>

    <x-accordion heading="What does a Strategic Roadmap typically include?">
      <p class="mb-4">
        The Strategic Roadmap combines academic planning with extracurricular
        and leadership development and we create them when we begin working with
        students between 8th grade and 10th grade or in early 11th grade. All
        Strategic Roadmaps are completely personalized to the student and no two
        are alike!
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

    <x-accordion heading="What does your 360-degree approach mean?">
      <p class="mb-4">
        Our unique 360-degree approach to counseling is how we provide students
        and families with the most comprehensive level of support, allowing
        students to develop the skills that they need to be successful in high
        school, in college, and beyond.
      </p>
      <p class="mb-4">
        The student will have a primary college counselor who will meet with
        them on a regular basis for advising sessions (8th, 9th and 10th grade)
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
      <ul class="list-disc space-y-4 pl-4">
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
    </x-accordion>

    <x-accordion
      heading="Will my child work with the same counselor during the entire process?"
    >
      <p class="mb-4">
        All students will have a primary college counselor as well as a team of
        professionals available to support them. The Oriel Admissions team
        includes SAT and ACT tutors, academic tutors, career coaches, project
        mentors, and writing coaches who will work with students to build a
        holistic set of skills.
      </p>
      <p>
        Oriel Admissions goes above and beyond to ensure that each student is
        paired with a college counselor who aligns with their unique needs. If a
        student ever feels the need for a different fit, the team is committed
        to facilitating a seamless transition to another counselor. The same is
        applicable for the other members of the Oriel Admissions team.
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
        and private high schools. Additionally, we are well versed in the
        educational systems of the countries that commonly send their students
        to study in the US.
      </p>
      <p>
        Even if we have not worked with a student from your district before, we
        will quickly familiarize ourselves with your school and what makes it
        unique.
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
        understanding of the world around them.
      </p>
      <p>
        We also work with students who are passionate about STEM subjects and
        are driven to build quantitative skills in fields like engineering,
        computer science, and medicine.
      </p>
    </x-accordion>

    <x-accordion heading="Do you provide pro bono services?">
      <p>
        Our counselors are committed to giving back by offering their expertise
        through pro bono counseling opportunities. Many of our counselors
        volunteer their time with programs like the Matchlighters Scholars
        Program and local Community-Based Organizations.
      </p>
    </x-accordion>
  </x-faq-section>

  @include('partials.modules.latest-posts')
@endsection
