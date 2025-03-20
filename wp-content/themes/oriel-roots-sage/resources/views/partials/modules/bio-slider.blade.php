@php
  // Example array for dynamic slides (replace with your actual data)
  $slides = [
    [
      'image_id' => 455,

      'story' => 'Working with Oriel Admissions was the best decision that I made for my son’s college applications! Rona and her team went above and beyond, offering comprehensive support that exceeded my expectations. Their holistic counseling approach empowered my son to achieve his dream of being admitted to an Ivy League college. I highly recommend Oriel Admissions!',
    ],
    [
      'image_id' => 456,

      'story' => 'I started with Oriel Admissions when I was in 10th grade and every stage of counseling was structured yet personalized to align with my interests and goals. I appreciated their 360 degree approach and being able to work with a team, allowing me to develop diverse skills and gain valuable experiences that strengthened my applications.  I couldn’t be happier with the support that I received!',
    ],
    [
      'image_id' => 454,

      'story' => 'When we began my daughter’s application process, we had no idea how much we had to learn! Rona provided direction at every step, helping my daughter to clarify her career interests, develop activities to explore those interests, and brainstorming a really interesting personal statement that showcased her personality. I think that this high level of support was the key for her acceptance into her top choice college: Brown University.',
    ],
  ];
@endphp

<div class="window-overlay full-width relative">
  <div class="the-stack">
    <div class="swiper story-swiper h-[750px] max-w-full">
      <div class="swiper-wrapper">
        @foreach ($slides as $index => $slide)
          <div class="swiper-slide" data-story="{{ $slide['story'] }}">
            {!! App\get_picture([$slide['image_id']], 'full', false, ['class' => 'h-full w-full object-cover object-center']) !!}
          </div>
        @endforeach
      </div>
    </div>
    <div class="content-grid">
      <div
        class="breakout relative z-[2] grid grid-cols-1 items-center justify-center gap-6 lg:grid-cols-3"
      >
        <div class="lg:col-span-1 lg:col-start-1">
          <h2
            class="fade-in-bottom text-6xl-fluid text-white max-lg:mb-12 max-lg:text-center"
          >
            Hear from
            <br />
            our clients
          </h2>
        </div>
        <div class="lg:col-span-1 lg:col-start-2"></div>
        <div
          class="text-white lg:col-span-1 lg:col-start-3 lg:space-y-4 lg:max-xl:pl-6"
        >
          <div class="mx-auto flex max-w-[400px] flex-col gap-6">
            <p class="text-lg max-lg:mb-12" id="storyText">
              {{ $slides[0]['story'] }}
            </p>
            <ul
              role="list"
              class="divide-keyline/40 hidden divide-y text-xl max-lg:mb-24"
            >
              <li class="py-4">
                <svg
                  class="text-opium mr-2 inline-block h-5 w-5 align-baseline"
                  viewBox="0 0 22 22"
                  fill="currentColor"
                  aria-hidden="true"
                  data-slot="icon"
                >
                  <path
                    d="M20.75 18.4999V9.8748H21.125C21.2244 9.8748 21.32 9.83543 21.3903 9.76512C21.4606 9.6948 21.5 9.59918 21.5 9.4998V7.9998C21.5 7.90042 21.4606 7.8048 21.3903 7.73448C21.32 7.66416 21.2244 7.62479 21.125 7.62479H16.9999V20.7499H16.2499V6.87503H17.7499C17.8492 6.87503 17.9449 6.83566 18.0152 6.76534C18.0855 6.69503 18.1249 6.5994 18.1249 6.50002V5.00002C18.1249 4.90065 18.0855 4.80502 18.0152 4.7347C17.9449 4.66438 17.8493 4.62501 17.7499 4.62501H11.375V3.87501H14.7499C14.8492 3.87501 14.9449 3.83564 15.0152 3.76533C15.0855 3.69501 15.1249 3.59939 15.1249 3.50001V1.25001C15.1249 1.15063 15.0855 1.05501 15.0152 0.984687C14.9449 0.914367 14.8493 0.875 14.7499 0.875H11.375C11.375 0.667813 11.2072 0.5 11 0.5C10.7928 0.5 10.625 0.667813 10.625 0.875V4.625H4.25011C4.04293 4.625 3.87511 4.79281 3.87511 5V6.5C3.87511 6.59938 3.91449 6.695 3.9848 6.76532C4.05511 6.83564 4.15074 6.87501 4.25012 6.87501H5.75012V20.7499H5.00012V7.62477H0.875C0.667813 7.62477 0.5 7.79258 0.5 7.99977V9.49977C0.5 9.59914 0.539374 9.69477 0.609687 9.76509C0.68 9.83541 0.775626 9.87477 0.875007 9.87477H1.25001V20.7497H0.875007C0.66782 20.7497 0.500007 20.9175 0.500007 21.1247C0.500007 21.3318 0.66782 21.4997 0.875007 21.4997H21.125C21.3322 21.4997 21.5 21.3318 21.5 21.1247C21.5 20.9175 21.3322 20.7497 21.125 20.7497H20.75L20.75 18.4999ZM3.49999 16.6249H2.74999V15.1249H3.49999V16.6249ZM3.49999 12.8749H2.74999V11.3749H3.49999V12.8749ZM11 8.37492C11.9103 8.37492 12.7306 8.92337 13.0784 9.76431C13.4272 10.6043 13.2341 11.5728 12.591 12.2159C11.9478 12.859 10.9794 13.0522 10.1394 12.7034C9.29842 12.3556 8.74997 11.5353 8.74997 10.6249C8.74997 9.38276 9.7578 8.37492 11 8.37492ZM10.625 20.7498H9.12499V17.3749H10.625V20.7498ZM12.875 20.7498H11.375V17.3749H12.875V20.7498ZM14.75 16.6247H7.62487V15.4997H14.75V16.6247ZM19.25 16.6247H18.5V15.1247H19.25V16.6247ZM19.25 12.8747H18.5V11.3747H19.25V12.8747Z"
                    fill="currentColor"
                  ></path>
                </svg>
                University of Pennsylvania
              </li>
              <li class="py-4">
                <svg
                  class="text-opium mr-2 inline-block h-5 w-5 align-baseline"
                  width="18"
                  height="22"
                  viewBox="0 0 18 22"
                  fill="currentColor"
                  aria-hidden="true"
                  data-slot="icon"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M9 0.5C6.81273 0.502481 4.71575 1.37247 3.16911 2.91911C1.62247 4.46575 0.752481 6.56273 0.75 8.75C0.75 15.8094 8.25 21.1409 8.56969 21.3641C8.69579 21.4524 8.84603 21.4998 9 21.4998C9.15397 21.4998 9.30421 21.4524 9.43031 21.3641C9.75 21.1409 17.25 15.8094 17.25 8.75C17.2475 6.56273 16.3775 4.46575 14.8309 2.91911C13.2843 1.37247 11.1873 0.502481 9 0.5ZM9 5.75C9.59334 5.75 10.1734 5.92595 10.6667 6.25559C11.1601 6.58524 11.5446 7.05377 11.7716 7.60195C11.9987 8.15013 12.0581 8.75333 11.9424 9.33527C11.8266 9.91721 11.5409 10.4518 11.1213 10.8713C10.7018 11.2909 10.1672 11.5766 9.58527 11.6924C9.00333 11.8081 8.40013 11.7487 7.85195 11.5216C7.30377 11.2946 6.83524 10.9101 6.50559 10.4167C6.17595 9.92336 6 9.34334 6 8.75C6 7.95435 6.31607 7.19129 6.87868 6.62868C7.44129 6.06607 8.20435 5.75 9 5.75Z"
                    fill="currentColor"
                  ></path>
                </svg>
                New Jersey
              </li>
              <li class="py-4">
                <svg
                  class="text-opium mr-2 inline-block h-5 w-5 align-baseline"
                  viewBox="0 0 24 24"
                  fill="currentColor"
                  aria-hidden="true"
                  data-slot="icon"
                >
                  <g clip-path="url(#clip0_457_18930)">
                    <path
                      d="M21.75 4.5H15.75C14.9544 4.5 14.1913 4.81607 13.6287 5.37868C13.0661 5.94129 12.75 6.70435 12.75 7.5V15.7247C12.7526 15.9182 12.6818 16.1056 12.5519 16.2491C12.422 16.3926 12.2425 16.4816 12.0497 16.4981C11.9471 16.5049 11.8442 16.4906 11.7474 16.456C11.6506 16.4213 11.5619 16.3672 11.4869 16.2968C11.4119 16.2265 11.3522 16.1415 11.3115 16.0471C11.2707 15.9527 11.2498 15.8509 11.25 15.7481V7.5C11.25 6.70435 10.9339 5.94129 10.3713 5.37868C9.80871 4.81607 9.04565 4.5 8.25 4.5H2.25C2.05109 4.5 1.86032 4.57902 1.71967 4.71967C1.57902 4.86032 1.5 5.05109 1.5 5.25V18.75C1.5 18.9489 1.57902 19.1397 1.71967 19.2803C1.86032 19.421 2.05109 19.5 2.25 19.5H9C9.59576 19.5 10.1672 19.7363 10.589 20.157C11.0108 20.5778 11.2485 21.1486 11.25 21.7444C11.247 21.8975 11.2915 22.0478 11.3775 22.1746C11.4635 22.3013 11.5866 22.3983 11.73 22.4522C11.8438 22.4961 11.9666 22.5116 12.0878 22.4973C12.209 22.483 12.3248 22.4394 12.4253 22.3702C12.5258 22.3011 12.6079 22.2084 12.6645 22.1003C12.721 21.9923 12.7504 21.872 12.75 21.75C12.75 21.1533 12.9871 20.581 13.409 20.159C13.831 19.7371 14.4033 19.5 15 19.5H21.75C21.9489 19.5 22.1397 19.421 22.2803 19.2803C22.421 19.1397 22.5 18.9489 22.5 18.75V5.25C22.5 5.05109 22.421 4.86032 22.2803 4.71967C22.1397 4.57902 21.9489 4.5 21.75 4.5ZM19.5 15.75H15.7753C15.5818 15.7526 15.3944 15.6818 15.2509 15.5519C15.1074 15.422 15.0184 15.2425 15.0019 15.0497C14.9951 14.9471 15.0094 14.8442 15.044 14.7474C15.0787 14.6506 15.1328 14.5619 15.2032 14.4869C15.2735 14.4119 15.3585 14.3522 15.4529 14.3115C15.5473 14.2707 15.6491 14.2498 15.7519 14.25H19.4766C19.6701 14.2474 19.8575 14.3182 20.001 14.4481C20.1445 14.578 20.2334 14.7575 20.25 14.9503C20.2568 15.0529 20.2425 15.1558 20.2078 15.2526C20.1732 15.3494 20.119 15.4381 20.0487 15.5131C19.9784 15.5881 19.8934 15.6478 19.799 15.6885C19.7046 15.7293 19.6028 15.7502 19.5 15.75ZM19.5 12.75H15.7753C15.5818 12.7526 15.3944 12.6818 15.2509 12.5519C15.1074 12.422 15.0184 12.2425 15.0019 12.0497C14.9951 11.9471 15.0094 11.8442 15.044 11.7474C15.0787 11.6506 15.1328 11.5619 15.2032 11.4869C15.2735 11.4119 15.3585 11.3522 15.4529 11.3115C15.5473 11.2707 15.6491 11.2498 15.7519 11.25H19.4766C19.6701 11.2474 19.8575 11.3182 20.001 11.4481C20.1445 11.578 20.2334 11.7575 20.25 11.9503C20.2568 12.0529 20.2425 12.1558 20.2078 12.2526C20.1732 12.3494 20.119 12.4381 20.0487 12.5131C19.9784 12.5881 19.8934 12.6478 19.799 12.6885C19.7046 12.7293 19.6028 12.7502 19.5 12.75ZM19.5 9.75H15.7753C15.5814 9.75308 15.3936 9.68252 15.2497 9.55255C15.1058 9.42258 15.0166 9.24288 15 9.04969C14.9932 8.9471 15.0075 8.8442 15.0422 8.74739C15.0768 8.65059 15.131 8.56193 15.2013 8.48694C15.2716 8.41194 15.3566 8.35221 15.451 8.31145C15.5454 8.27069 15.6472 8.24977 15.75 8.25H19.4747C19.6686 8.24692 19.8564 8.31748 20.0003 8.44745C20.1442 8.57742 20.2334 8.75713 20.25 8.95031C20.2568 9.0529 20.2425 9.1558 20.2078 9.25261C20.1732 9.34942 20.119 9.43807 20.0487 9.51306C19.9784 9.58806 19.8934 9.64779 19.799 9.68855C19.7046 9.72931 19.6028 9.75023 19.5 9.75Z"
                      fill="currentColor"
                    ></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_457_18930">
                      <rect width="24" height="24" fill="white"></rect>
                    </clipPath>
                  </defs>
                </svg>
                Chemistry
              </li>
            </ul>
            <div
              class="flex items-center gap-4 max-lg:flex-col max-lg:items-center"
            >
              <div class="flex gap-4">
                <x-button-round
                  :direction="'left'"
                  classes="swiper-3-btn-prev"
                ></x-button-round>
                <x-button-round classes="swiper-3-btn-next"></x-button-round>
              </div>
              <div class="relative inline-block w-[112px]">
                <div
                  class="swiper-pagination-3 text-white"
                  style="--swiper-theme-color: #fff"
                ></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
