@extends('layouts.app')
@section('content')
  <x-hero>
    <x-slot name="headline">
      <h1
        class="fade-in-bottom text-8xl-fluid mx-auto mb-4 max-w-160 text-center text-white"
      >
        Testimonials from our
        <span class="text-oriel">students</span>
      </h1>
    </x-slot>
  </x-hero>

  <div class="bg-sand full-width-constrained">
    <div class="breakout space-y-8 py-12 md:py-21">
      <x-testimonial
        category="undergrad"
        profile_image_id="74"
        location="New Jersey"
        major="Chemistry"
        degree="Research/PhD"
        name="University of Pennsylvania"
      >
        <x-slot:profile_image>
          {!! get_svg('images.college-logos.upenn-white-bg', 'w-full h-auto max-w-full') ?: wp_get_attachment_image($profile_image_id, 'full', false, ['class' => 'h-auto w-full rounded-xl max-w-sm']) !!}
        </x-slot>
        <x-slot:title>
          <span class="text-oriel">
            Oriel Admissions was an amazing guide throughout the admissions
            process.
          </span>
          Through counseling, Rona completely changed the course of my high
          school career, assisting me in formulating not only a well-rounded
          application but also a powerful and cohesive story.
        </x-slot>

        <x-slot:description>
          <p>
            Rona met with me consistently to talk about my extracurricular
            activities and provided advice on how to dive deeper into my
            activities and to take them to the next level, allowing me to have a
            greater impact and obtain unique experiences, which proved
            invaluable when writing essays.
          </p>
          <p>
            Before Rona, my application was unorganized and messy, lacking any
            impactful and notable experiences. However, after weekly
            discussions, she helped transform my application into an empowering
            narrative that outlined my personality, passions, and career goals.
          </p>
          <p>
            I would highly recommend Oriel Admissions to anyone who needs
            guidance in all aspects of the college admissions process!
          </p>
        </x-slot>
      </x-testimonial>
      <x-testimonial
        category="undergrad"
        profile_image_id="74"
        location="New York"
        major="Political Science"
        degree="Law"
        name="Columbia University"
      >
        <x-slot:profile_image>
          {!! get_svg('images.college-logos.Columbia-white-bg', 'w-full h-auto max-w-full') ?: wp_get_attachment_image($profile_image_id, 'full', false, ['class' => 'h-auto w-full rounded-xl max-w-sm']) !!}
        </x-slot>
        <x-slot:title>
          <span class="text-oriel">
            I wanted to thank Rona and her team for guiding me through the
            application process.
          </span>
          The entire process felt incredibly personalized. Rona really took the
          time to get to know me beyond my grades and activities and worked
          closely with me to craft a plan that reflected my strengths and goals.
        </x-slot>

        <x-slot:description>
          <p>
            What really stood out to me was that I had access to a group of
            people who offered guidance and provided a lot of ideas for how to
            refine my interests. With their suggestions, I was able to identify
            many different ways for exploring my interests. I was able to shadow
            a lawyer, volunteer with a political advocacy group, and complete an
            internship at my local government office. All of these experiences
            solidified my interest in political science and law.
          </p>
          <p>
            I also felt like the team was instrumental in putting together my
            application. My writing coach was very helpful in brainstorming
            essay topics and all of the feedback I received was detailed and
            thoughtful, which helped me improve my writing. By the time I
            submitted my applications, I felt really confident in my work.
          </p>
          <p>
            Oriel Admissions made the college application process feel
            manageable and I am very grateful for their support!
          </p>
        </x-slot>
      </x-testimonial>
      <x-testimonial
        category="undergrad"
        profile_image_id="74"
        location="Florida"
        major="Psychology"
        degree="Psychologist"
        name="Cornell University"
      >
        <x-slot:profile_image>
          {!! get_svg('images.college-logos.cornell-white-bg', 'w-full h-auto max-w-full') ?: wp_get_attachment_image($profile_image_id, 'full', false, ['class' => 'h-auto w-full rounded-xl max-w-sm']) !!}
        </x-slot>
        <x-slot:title>
          <span class="text-oriel">
            Working with Oriel Admissions was an incredible experience.
          </span>
          From the very beginning, I could tell that Rona and her team genuinely
          cared about helping me to achieve my goals.
        </x-slot>

        <x-slot:description>
          <p>
            The team was always responsive and gave me a lot of direction about
            how to use my time in high school. I felt comfortable reaching out
            with any question, knowing that I would receive thoughtful advice.
            The entire college counseling process helped me to stay organized
            and on track, even before I began working on my applications.
          </p>
          <p>
            I learned a lot throughout the process. Through their support, I
            came to realize that I wanted to study psychology, and they helped
            me to find opportunities to explore this subject through summer
            experiences and individual projects. That made a huge impact on my
            applications, and I was admitted to my dream college!
          </p>
          <p>I highly recommend working with Oriel Admissions!</p>
        </x-slot>
      </x-testimonial>
      <x-testimonial
        category="undergrad"
        profile_image_id="74"
        location="Pennsylvania"
        major="Computer Science"
        degree="Data Scientist"
        name="Carnegie Mellon University"
      >
        <x-slot:profile_image>
          {!! get_svg('images.college-logos.carnegie-mellon-white-bg', 'w-full h-auto max-w-full') ?: wp_get_attachment_image($profile_image_id, 'full', false, ['class' => 'h-auto w-full rounded-xl max-w-sm']) !!}
        </x-slot>
        <x-slot:title>
          <span class="text-oriel">
            Our experience with Oriel Admissions was nothing short of
            exceptional.
          </span>
          My son began working with Rona at the start of his sophomore year, and
          from day one, she helped him get organized and establish a clear,
          month-by-month roadmap.
        </x-slot>

        <x-slot:description>
          <p>
            The step-by-step plan made what could have been an overwhelming
            process feel manageable, with realistic goals that kept him
            motivated. Rona's guidance kept him on track, and her regular
            updates gave us, as parents, invaluable peace of mind throughout the
            journey.
          </p>
          <p>
            While my son knew he had a broad interest in computer science, Rona
            encouraged him to dig deeper and refine his focus. She connected him
            with a career coach to explore various paths within the field, which
            ultimately led him to identify artificial intelligence as his
            primary passion.
          </p>
          <p>
            From there, Rona helped him find programs to build the specific
            skills he needed to excel in AI. The highlight of his experience was
            applying what he learned to create AI-powered projects that
            showcased his creativity and technical abilities, which was a unique
            element that truly helped him stand out in the competitive
            admissions process.
          </p>
        </x-slot>
      </x-testimonial>
      <x-testimonial
        category="undergrad"
        profile_image_id="74"
        location="International"
        major="Engineering"
        degree="Software Engineer"
        name="MIT"
      >
        <x-slot:profile_image>
          {!! get_svg('images.college-logos.mit-white-bg', 'w-full h-auto max-w-full') ?: wp_get_attachment_image( $profile_image_id, 'full', false, ['class' => 'h-auto w-full rounded-xl max-w-sm']) !!}
        </x-slot>
        <x-slot:title>
          <span class="text-oriel">
            I had the absolute privilege of working with Rona during my college
            application process.
          </span>
          I can confidently say that she played a huge role in helping me get
          into MIT.
        </x-slot>

        <x-slot:description>
          <p>
            From the very beginning, Rona was incredibly attentive, taking the
            time to understand my background, strengths, and aspirations. She
            didn’t just treat me as another applicant. She truly cared about
            helping me find my unique story and voice.
          </p>
          <p>
            Her attention to detail is second to none. Rona guided me through
            every step of the process with precision, ensuring that nothing was
            overlooked, from my personal statement to the smallest sections of
            my application. She’s also incredibly knowledgeable about the entire
            admissions process. Whether it was choosing the right
            extracurriculars to highlight or crafting an essay that resonated
            with MIT’s values, Rona knew exactly how to tailor my application to
            make it stand out.
          </p>
          <p>
            What I appreciated the most was her positivity and encouragement.
            The college application process can be overwhelming, but Rona’s
            optimism kept me motivated and confident throughout. She always
            believed in me, even when I doubted myself, and that made all the
            difference.
          </p>
          <p>
            Rona isn’t just a consultant; she’s a mentor and a partner who is
            genuinely invested in her students’ success. Thanks to her expertise
            and unwavering support, I was able to achieve my dream of getting
            into MIT. I couldn't recommend her enough!
          </p>
        </x-slot>
      </x-testimonial>
      <x-testimonial
        category="undergrad"
        profile_image_id="74"
        location="New Jersey"
        major="Public Health"
        degree="Medicine"
        name="Johns Hopkins University"
      >
        <x-slot:profile_image>
          {!! get_svg('images.college-logos.johnshopkins-white-bg', 'w-full h-auto max-w-full') ?: wp_get_attachment_image($profile_image_id, 'full', false, ['class' => 'h-auto w-full rounded-xl max-w-sm']) !!}
        </x-slot>
        <x-slot:title>
          <span class="text-oriel">
            Rona did an amazing job working with our son to get him ready for
            the Common App and essays.
          </span>
          She pays keen attention to small details so that the finished product
          is near perfect for submission.
        </x-slot>

        <x-slot:description>
          <p>
            Rona worked with our son during the spring and summer before his
            senior year, ensuring he was well-prepared for the Common App and
            essay writing. She also helped develop his CV, which was a key
            document for some of his applications.
          </p>
          <p>
            Rona was always available to both my son and me for any questions or
            concerns. Her guidance and expertise made a significant impact on
            his applications, and as a result, he has been admitted to multiple
            prestigious colleges and universities of his choice.
          </p>
          <p>
            I would definitely recommend Rona to anyone looking for a great
            college coach.
          </p>
        </x-slot>
      </x-testimonial>
      <x-testimonial
        category="mba"
        profile_image_id="74"
        location="United Kingdom"
        major="Entrepreneurship"
        degree="Entrepreneurship"
        name="Said Business School, <br> University of Oxford"
      >
        <x-slot:profile_image>
          <img
            src="{{ Vite::asset('resources/images/college-logos/oxford-white-bg.svg') }}"
            alt=""
            class="h-auto w-full max-w-full rounded-xl"
          />
        </x-slot>
        <x-slot:title>
          <span class="text-oriel">
            Rona revolutionized the way I thought about my application.
          </span>
          Working with her changed the way I thought about many aspects of my
          career, business, and how I communicate them to my audience.
        </x-slot>

        <x-slot:description>
          <p>
            She pushed me to create depth and structure for the most significant
            range of experiences. She achieved this by understanding me
            personally to make sure I was well supported throughout the entire
            application and interview process.
          </p>
          <p>
            Beyond any doubt, she would want you to succeed, and she will ensure
            the 360-degree support you need to achieve your dream.
          </p>
        </x-slot>
      </x-testimonial>
      <x-testimonial
        category="mba"
        profile_image_id="74"
        location="Texas"
        major="Technology"
        degree="Technology"
        name="Kellogg School of Management, <br> Northwestern University"
      >
        <x-slot:profile_image>
          <img
            src="{{ Vite::asset('resources/images/college-logos/kellogg-white-bg.png') }}"
            alt=""
            class="h-auto w-full max-w-full rounded-xl"
          />
        </x-slot>
        <x-slot:title>
          <span class="text-oriel">
            Rona is well-versed in the MBA admissions process, and I would
            recommend her to anyone.
          </span>
          She is patient, thorough, and always provides timely responses.
        </x-slot>

        <x-slot:description>
          <p>
            She challenges your thinking and makes sure that you are presenting
            the best version of yourself. What I appreciated most was Rona's
            continued guidance even after I received my MBA acceptance.
          </p>
          <p>
            I was grateful to have Rona as an advisor, and I got accepted into
            my #1 choice program.
          </p>
        </x-slot>
      </x-testimonial>
      <x-testimonial
        category="mba"
        profile_image_id="74"
        location="California"
        major="Consulting"
        degree="Technology"
        name="Harvard Business School"
      >
        <x-slot:profile_image>
          <img
            src="{{ Vite::asset('resources/images/college-logos/harvard-business-white-bg.png') }}"
            alt=""
            class="h-auto w-full max-w-full rounded-xl"
          />
        </x-slot>
        <x-slot:title>
          <span class="text-oriel">
            Rona is, in my opinion, the most capable, diligent, and caring MBA
            admissions advisor one could hope for.
          </span>
          She is focused on both the result – getting you admitted, and as
          importantly, the process – self-reflecting to present the best version
          of yourself.
        </x-slot>

        <x-slot:description>
          <p>
            She helped me prepare for my application and interviews at every
            step of the way, patiently requesting another iteration or session
            until I got it right.
          </p>
          <p>
            An application for an MBA requires an honest self-reflection on an
            individual’s academic background, career, and interests. You need to
            get comfortable that your advisor is diligent and strategic in
            helping you position your application for success and, at the same
            time, able to provide you with honest, personalized advice for your
            benefit in a thoughtful and personable manner.
          </p>
          <p>Rona does precisely that.</p>
        </x-slot>
      </x-testimonial>
    </div>
  </div>
@endsection
