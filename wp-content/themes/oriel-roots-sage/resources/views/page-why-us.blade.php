@extends('layouts.app')

@section('content')
  <x-hero>
    <x-slot name="headline">
      <h1
        class="fade-in-bottom text-8xl-fluid justify-self-center text-center text-white"
      >
        Why work with us
      </h1>
    </x-slot>
  </x-hero>

  <div class="full-width bg-sand full-width !block pt-30">
    <div class="md:the-stack">
      <div class="content-grid">
        <div class="max-w-175">
          <h2 class="text-8xl-fluid mb-6">
            Why work with a
            <span class="text-oriel">college counselor?</span>
          </h2>
          <p class="max-w-80 text-lg lg:text-xl">
            Ivy League institutions have seen a
            <span class="text-oriel text-xl lg:text-2xl">150%</span>
            increase in applications in 8 years.
          </p>
        </div>
      </div>
      {!! get_svg('images.application-graph', 'w-full h-auto max-md:hidden') !!}
      {!! get_svg('images.mobile-line-graph', 'w-full md:hidden h-full mt-8') !!}
    </div>
    <div class="content-grid">
      <div class="mx-auto max-w-4xl pt-20 md:pt-44">
        <h2 class="text-6xl-fluid mb-12 text-center">
          We go above and beyond what high school guidance counselors provide.
        </h2>
        <p class="mb-24 text-center text-lg lg:text-xl">
          The majority of high school counselors are not trained to be college
          counselors.
        </p>
      </div>
      <div
        x-data="counter()"
        x-init="init()"
        data-percentage="50"
        data-students="482"
        class="breakout grid grid-cols-[repeat(auto-fit,minmax(min(400px,100%),1fr))] gap-4"
      >
        <div class="bg-chalk space-y-6 rounded-lg p-6 text-center shadow-md">
          <p class="text-lg lg:text-xl">
            <span class="font-medium">
              High School Guidance Counselors Spend
            </span>
          </p>
          <span
            class="text-oriel text-8xl-fluid align-text-bottom font-serif font-light"
          >
            <span
              class="align-text-bottom"
              x-text="Math.round(percentage)"
            ></span>
            %
          </span>
          <p class="text-lg lg:text-xl">
            of their time on
            <span class="font-medium">
              2 tasks:
              <br />
              Personal counseling & course scheduling.
            </span>
          </p>
        </div>

        <div class="bg-chalk space-y-6 rounded-lg p-6 text-center shadow-md">
          <p class="text-lg lg:text-xl">
            <span class="font-medium">
              On average, 1 counselor is assigned to a caseload of
            </span>
          </p>
          <span
            class="text-oriel text-8xl-fluid align-text-bottom font-serif font-light"
          >
            <span
              class="align-text-bottom"
              x-text="Math.round(students)"
            ></span>
          </span>
          <p class="mx-auto max-w-sm text-lg lg:text-xl">
            <span class="font-medium">students</span>
            making it
            <span class="font-medium">nearly impossible</span>
            to effectively assist with applications.
          </p>
        </div>
      </div>
      <div class="py-6 text-center font-light text-black/70">Source: NACAC</div>
    </div>
  </div>

  <div class="full-width content-grid py-12 md:py-30">
    <div class="grid grid-cols-1 gap-8 pb-12 md:pb-30 md:grid-cols-2">
      <div>
        <h2 class="text-6xl-fluid">
          Working with Oriel Admissions
          <span class="text-oriel">Makes an Impact</span>
          for Students
        </h2>
      </div>
      <div class="md:pl-16">
        <p class="max-w-md text-lg text-black/90 lg:text-xl">
          Our students receive holistic support to build skills and experiences
          before they begin applying to college.
        </p>
      </div>
    </div>
  </div>

  <div class="full-width">
    @include('partials.modules.oriel-slider')
  </div>

  <section class="full-width content-grid bg-sand py-12 md:py-30">
    <div class="breakout">
      <h2
        class="text-6xl-fluid mx-auto mb-12 md:mb-30 max-w-125 text-center"
      >
        We estimate that our students spend over:
      </h2>
      <div class="grid gap-4 md:grid-cols-12 md:gap-x-21">
        <div class="md:col-span-4 lg:col-start-2">
          <div class="pin-content">
            {!! App\get_picture([22], 'full', false, ['class' => 'object-cover object-right max-md:w-full']) !!}
          </div>
        </div>
        <div
          class="divide-keyline/80 long-content divide-y md:col-span-6 lg:col-span-5"
        >
          <div class="py-12">
            <h3 class="text-oriel text-6xl-fluid">12 hours</h3>
            <p class="text-lg font-medium">
              Writing and revising their personal statement
            </p>
          </div>
          <div class="py-12">
            <h3 class="text-oriel text-6xl-fluid">5 hours</h3>
            <p class="text-lg font-medium">Preparing a professional resume</p>
          </div>

          <div class="py-12">
            <h3 class="text-oriel text-6xl-fluid">3 hours</h3>
            <p class="text-lg font-medium">
              Describing their activities 6 hours Completing all portions of
              their Common App
            </p>
          </div>
          <div class="py-12">
            <h3 class="text-oriel text-6xl-fluid">20+ hours</h3>
            <p class="mb-4 text-lg font-medium">
              Writing additional supplemental essays*
            </p>
            <p class="text-sm font-light">
              *(required for the majority of colleges, especially Ivy League
              schools and Honors Colleges)
            </p>
          </div>
          <div class="py-12">
            <h3 class="text-oriel text-6xl-fluid">4-10 minutes.</h3>
            <p class="text-lg font-medium">
              Admissions officers are able to make a decision on an application
              Source Inside HighEd
            </p>
          </div>
          <div class="py-12">
            <p class="text-lg">
              Source
              <a href="/" class="text-oriel animate-underline font-medium">
                Inside HighEd
              </a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div
    class="bg-cardinal full-width relative overflow-hidden py-12 text-center md:py-30"
  >
    {!! get_svg('images.oriel-shape-outline', 'absolute top-0 right-0 left-0 mx-auto max-sm:hidden text-white/40') !!}
    {!! get_svg('images.oriel-shape', 'text-white mx-auto mb-8') !!}
    <h2 class="text-5xl-fluid fade-in-bottom mx-auto max-w-200 text-white">
      Oriel Admissions counselors are
      <span class="text-oriel">involved in every step of this process</span>
      , spending countless hours supporting their students because applications
      need to be well thought through and perfectly polished before submissions.
    </h2>
  </div>
@endsection
