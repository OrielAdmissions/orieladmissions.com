@extends('layouts.app')

@section('content')
  <x-hero>
    <x-slot name="headline">
      <h1
        class="fade-in-bottom text-8xl-fluid justify-self-center mx-auto max-w-200 text-center text-white"
      >
        Join Our Team
      </h1>
    </x-slot>
  </x-hero>


  <div class="">
    <div class="grid grid-cols-12 gap-y-8 md:gap-x-8 py-12 md:py-30 items-center">
      <div class="col-span-12 md:col-span-6">
        {!! App\get_picture([394], 'full', false, ['class' => 'object-cover object-right w-full rounded-xl']) !!}
      </div>
      <div class="col-span-12 md:col-span-6">
        <h2 class="leading-tight text-5xl-fluid">We are a team of highly motivated individuals who <span class="text-oriel">love working with students</span> in
          order to ensure their success in the college application process.</h2>
      </div>
    </div>
  </div>

  <div class="">
    <x-accordion
      heading="College Counselor"
      summary_classes="text-5xl-fluid py-12 font-serif font-light"
    >
      <div class="space-y-8">

        <p class="text-lg md:text-xl">
          Oriel Admissions is seeking a dedicated and experienced College
          Counselor to join our team. The ideal candidate is passionate about
          education and has a proven track record of supporting students
          through the college admissions process. As a College Counselor, you
          will provide personalized, step-by-step guidance to high school
          students and their families, helping them navigate academic
          planning, extracurricular involvement, and the development of
          competitive college applications.
        </p>

        <div class="space-y-4">
          <div class="rounded-xl bg-white p-6 md:p-10">
            <h6 class="mb-4 font-sans font-medium text-lg md:text-xl">Responsibilities</h6>
            <ul class="list-disc pl-4 md:text-lg">
              <li>
                Provide one-on-one counseling to students as early as 8th grade,
                through their senior year, helping them to develop personalized
                academic and extracurricular plans.
              </li>
              <li>
                Guide students through the college application process,
                including building a college list, managing deadlines, and
                preparing application materials.
              </li>
              <li>
                Assist students in crafting compelling personal statements and
                supplemental essays that reflect their unique experiences and
                aspirations.
              </li>
              <li>
                Advise students on how to maximize their high school
                experiences, including identifying meaningful extracurricular
                activities, leadership roles, and internships.
              </li>
              <li>
                Provide regular updates to families on student progress and
                offer actionable feedback to improve outcomes.
              </li>
              <li>
                Collaborate with Career Coaches, Writing Coaches, Project
                Mentors, and Tutors to ensure a holistic approach to each
                student’s development.
              </li>
            </ul>
          </div>
          <div class="rounded-xl bg-white p-6 md:p-10">
            <h6 class="mb-4 font-sans font-medium text-lg md:text-xl">Qualifications</h6>
            <ul class="list-disc pl-4 md:text-lg">
              <li>
                Former admissions officer or admissions reader at a selective
                college or university is strongly preferred.
              </li>
              <li>
                Over 3 years of experience in college counseling or college
                admissions.
              </li>
              <li>
                Deep understanding of the college admissions process, including
                what admissions committees look for in applicants.
              </li>
              <li>
                Exceptional writing and editing skills to assist with essay
                development.
              </li>
              <li>
                Empathetic and patient communicator with a passion for student
                success.
              </li>
              <li>
                Ability to manage multiple students and deadlines with great
                attention to detail.
              </li>
            </ul>
          </div>
        </div>
      </div>
    </x-accordion>

    <x-accordion
      heading="MBA Admissions Counselor"
      summary_classes="text-5xl-fluid py-12 font-serif font-light"
    >
      <div class="space-y-8">

        <p class="text-lg md:text-xl">
          We are seeking an experienced MBA Admissions Consultant to join our
          growing team. You would work directly with clients to provide
          end-to-end support throughout the MBA admissions process. This
          includes evaluating client profiles, helping them define their
          personal and professional stories, advising on program selection,
          reviewing application materials (including essays, resumes, and
          recommendation letters), and preparing clients for interviews. You
          will play a key role in helping clients present themselves as
          strong, distinctive candidates to top MBA programs worldwide.
        </p>

        <div class="space-y-4">
          <div class="rounded-xl bg-white p-6 md:p-10">
            <h6 class="mb-4 font-sans font-medium text-lg md:text-xl">Responsibilities</h6>
            <ul class="list-disc pl-4 md:text-lg">
              <li>
                Conduct initial consultations to assess clients' academic and
                professional backgrounds, career goals, and MBA program
                preferences.
              </li>
              <li>
                Provide personalized admissions strategies tailored to each
                client’s unique profile and target schools.
              </li>
              <li>
                Assist clients with program selection, identifying business
                schools that align with their career goals and interests.
              </li>
              <li>
                Guide clients through the process of crafting compelling essays,
                resumes, and personal statements that highlight their
                leadership, impact, and career trajectory.
              </li>
              <li>
                Review letters of recommendation and provide guidance to clients
                on how to maximize their impact.
              </li>
              <li>
                Conduct mock interviews to prepare clients for MBA admissions
                interviews, providing feedback on communication style,
                storytelling, and confidence-building.
              </li>
              <li>
                Offer insights on admissions trends and program-specific nuances
                to help clients tailor their applications.
              </li>
              <li>
                Provide ongoing support and feedback throughout the application
                process, ensuring clients meet deadlines and produce
                high-quality materials.
              </li>
            </ul>
          </div>
          <div class="rounded-xl bg-white p-6 md:p-10">
            <h6 class="mb-4 font-sans font-medium text-lg md:text-xl">Qualifications</h6>
            <ul class="list-disc pl-4 md:text-lg">
              <li>
                Former MBA admissions officer, reader, or experienced MBA
                admissions consultant.
              </li>
              <li>
                In-depth knowledge of the MBA admissions process and what top
                business schools seek in applicants.
              </li>
              <li>
                Strong understanding of leadership, impact, and career
                progression in the context of MBA applications.
              </li>
              <li>
                Excellent writing and communication skills with the ability to
                provide clear, actionable feedback on application materials.
              </li>
              <li>
                Experience working with clients from diverse backgrounds and
                industries.
              </li>
              <li>
                Ability to guide clients in crafting their personal brand and
                narrative for business school applications.
              </li>
            </ul>
          </div>
        </div>
      </div>
    </x-accordion>

    <x-accordion
      heading="Academic or SAT/ACT Tutor"
      summary_classes="text-5xl-fluid py-12 font-serif font-light"
    >
      <div class="space-y-8">

        <p class="text-lg md:text-xl">
          As a Tutor at Oriel Admissions, you will work one-on-one with
          students to help them achieve academic excellence and improve their
          test scores. Tutors can specialize in academic subjects (such as
          math, science, humanities, or foreign languages), test preparation
          (such as SAT, ACT, or AP exams), or both. You will develop
          personalized strategies to meet each student’s unique learning
          needs, providing them with the tools and confidence to succeed.
        </p>

        <div class="space-y-4">
          <div class="rounded-xl bg-white p-6 md:p-10">
            <h6 class="mb-4 font-sans font-medium text-lg md:text-xl">Responsibilities</h6>
            <ul class="list-disc pl-4 md:text-lg">
              <li>
                Provide one-on-one virtual tutoring in your area of expertise
                (academic subjects, test prep, or both).
              </li>
              <li>
                Develop customized lesson plans tailored to each student's
                learning style, goals, and areas of improvement.
              </li>
              <li>
                Support students in building subject knowledge, critical
                thinking skills, and test-taking strategies.
              </li>
              <li>
                Assist with homework, projects, exam preparation, and study
                planning.
              </li>
              <li>
                Provide guidance on time management and effective study
                techniques.
              </li>
              <li>
                Track student progress and adjust lessons accordingly to
                maximize learning outcomes.
              </li>
              <li>
                Communicate with parents and Oriel counselors to provide regular
                updates on student performance.
              </li>
            </ul>
          </div>
          <div class="rounded-xl bg-white p-6 md:p-10">
            <h6 class="mb-4 font-sans font-medium text-lg md:text-xl">Qualifications</h6>
            <ul class="list-disc pl-4 md:text-lg">
              <li>
                Bachelor’s degree in a relevant field (Master’s degree
                preferred).
              </li>
              <li>
                Experience in teaching or tutoring at the high school level.
              </li>
              <li>
                Familiarity with college admissions requirements and how
                standardized tests impact applications.
              </li>
              <li>
                Strong understanding of test prep strategies and content for
                SAT/ACT/AP exams.
              </li>
              <li>
                Ability to adapt teaching methods to meet the individual needs
                of students.
              </li>
              <li>Excellent communication and interpersonal skills.</li>
              <li>
                Organized, reliable, and able to manage multiple students and
                schedules.
              </li>
            </ul>
          </div>
        </div>
      </div>
    </x-accordion>

    <x-accordion
      heading="Project Mentor"
      summary_classes="text-5xl-fluid py-12 font-serif font-light"
    >
      <div class="space-y-8">

        <p class="text-lg md:text-xl">
          As a Project Mentor, you will work with students on self-directed
          projects in your area of expertise. These projects can range from
          research papers and creative portfolios to business plans and
          technical builds. Your role is to provide guidance, feedback, and
          accountability throughout the project, helping students refine their
          ideas, overcome challenges, and produce high-quality, meaningful
          work.
        </p>

        <div class="space-y-4">
          <div class="rounded-xl bg-white p-6 md:p-10">
            <h6 class="mb-4 font-sans font-medium text-lg md:text-xl">Responsibilities</h6>
            <ul class="list-disc pl-4 md:text-lg">
              <li>
                Guide students in selecting and refining their project ideas
                based on their interests and goals.
              </li>
              <li>
                Provide subject matter expertise in your field to help students
                develop their projects.
              </li>
              <li>
                Offer regular feedback and support to ensure students stay on
                track and produce high-quality work.
              </li>
              <li>
                Help students develop time management and problem-solving skills
                as they work through their projects.
              </li>
              <li>
                Encourage students to take ownership and initiative, fostering
                independence and creativity.
              </li>
              <li>
                Assist students in framing their projects for portfolios,
                college applications, or public presentations.
              </li>
              <li>
                Provide accountability checkpoints to help students meet project
                milestones and deadlines.
              </li>
            </ul>
          </div>
          <div class="rounded-xl bg-white p-6 md:p-10">
            <h6 class="mb-4 font-sans font-medium text-lg md:text-xl">Qualifications</h6>
            <ul class="list-disc pl-4 md:text-lg">
              <li>
                Expertise in a specific academic or professional field (e.g.,
                computer science, business, humanities, arts, sciences).
              </li>
              <li>
                Experience in mentoring, teaching, or coaching students in a
                one-on-one setting.
              </li>
              <li>
                Strong communication skills with the ability to provide
                constructive, actionable feedback.
              </li>
              <li>
                Ability to guide students through a project lifecycle — from
                idea generation to final presentation.
              </li>
              <li>
                Passion for working with high school students and helping them
                succeed in independent learning.
              </li>
              <li>
                Highly organized and dependable, with the ability to track
                progress and meet deadlines.
              </li>
            </ul>
          </div>
        </div>
      </div>
    </x-accordion>

    <x-accordion
      heading="Application Evaluators"
      summary_classes="text-5xl-fluid py-12 font-serif font-light"
    >
      <div class="space-y-8">

        <p class="text-lg md:text-xl">
          We are seeking Application Evaluators with direct experience in
          college admissions to join our team. The ideal candidate is a former
          admissions officer or admissions reader with a deep understanding of
          what selective universities look for in applicants. This role is
          pivotal in providing students with actionable feedback to enhance
          their application materials.
        </p>

        <div class="space-y-4">
          <div class="rounded-xl bg-white p-6 md:p-10">
            <h6 class="mb-4 font-sans font-medium text-lg md:text-xl">Responsibilities</h6>
            <ul class="list-disc pl-4 md:text-lg">
              <li>
                Conduct comprehensive reviews of students' profiles and complete
                college applications.
              </li>
              <li>
                Provide detailed feedback on personal statements, supplemental
                essays, activity lists, and resumes.
              </li>
              <li>
                Identify areas of strength in the application and provide
                specific, actionable suggestions for improvement.
              </li>
              <li>
                Evaluate the overall cohesiveness of the application and offer
                guidance to ensure the student's story is compelling and
                well-structured.
              </li>
              <li>
                Communicate feedback clearly and professionally in a way that is
                actionable for both the students and counselors.
              </li>
              <li>
                Collaborate with Oriel Admissions college counselors as needed
                to ensure consistency and quality in feedback.
              </li>
            </ul>
          </div>
          <div class="rounded-xl bg-white p-6 md:p-10">
            <h6 class="mb-4 font-sans font-medium text-lg md:text-xl">Qualifications</h6>
            <ul class="list-disc pl-4 md:text-lg">
              <li>
                Former admissions officer or admissions reader at a selective
                college or university.
              </li>
              <li>
                Deep understanding of the college admissions process, including
                what admissions committees look for in applicants.
              </li>
              <li>
                Strong writing and communication skills with the ability to
                provide clear, actionable feedback.
              </li>
              <li>
                Ability to evaluate application materials holistically and
                identify ways to strengthen the student’s overall narrative.
              </li>
              <li>
                Detail-oriented and organized, with the ability to meet
                deadlines and manage multiple evaluations.
              </li>
            </ul>
          </div>
        </div>
      </div>
    </x-accordion>
  </div>
@endsection
