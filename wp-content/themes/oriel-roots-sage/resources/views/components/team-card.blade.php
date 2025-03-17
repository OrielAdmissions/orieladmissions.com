@props([
  'image_id',
  'name',
  'role',
  'education',
  'link',
  'bio',
])

<div class="team-card relative flex">
  <div
    class="flex w-full cursor-pointer flex-col rounded-xl bg-white p-6 transition duration-500"
  >
    <div class="mx-auto mb-6 size-50 max-w-full overflow-hidden rounded-full">
      {{ $image ?? '' }}
    </div>

    <div class="team-card__content flex grow flex-col gap-5">
      <div class="grow">
        <div class="text-center">
          <h3 class="text-3xl-fluid leading-tight">{{ $name }}</h3>
          <p class="text-oriel text-lg">{{ $role }}</p>
        </div>
        @if ($education)
          <div class="flow-root">
            <hr class="bg-opium my-5" />
            <div class="relative">
              <div
                class="text-opium relative flex items-center justify-center gap-3"
              >
                <svg
                  class="size-5"
                  aria-hidden="true"
                  width="22"
                  height="22"
                  viewBox="0 0 22 22"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M20.75 18.4999V9.8748H21.125C21.2244 9.8748 21.32 9.83543 21.3903 9.76512C21.4606 9.6948 21.5 9.59918 21.5 9.4998V7.9998C21.5 7.90042 21.4606 7.8048 21.3903 7.73448C21.32 7.66416 21.2244 7.62479 21.125 7.62479H16.9999V20.7499H16.2499V6.87503H17.7499C17.8492 6.87503 17.9449 6.83566 18.0152 6.76534C18.0855 6.69503 18.1249 6.5994 18.1249 6.50002V5.00002C18.1249 4.90065 18.0855 4.80502 18.0152 4.7347C17.9449 4.66438 17.8493 4.62501 17.7499 4.62501H11.375V3.87501H14.7499C14.8492 3.87501 14.9449 3.83564 15.0152 3.76533C15.0855 3.69501 15.1249 3.59939 15.1249 3.50001V1.25001C15.1249 1.15063 15.0855 1.05501 15.0152 0.984687C14.9449 0.914367 14.8493 0.875 14.7499 0.875H11.375C11.375 0.667813 11.2072 0.5 11 0.5C10.7928 0.5 10.625 0.667813 10.625 0.875V4.625H4.25011C4.04293 4.625 3.87511 4.79281 3.87511 5V6.5C3.87511 6.59938 3.91449 6.695 3.9848 6.76532C4.05511 6.83564 4.15074 6.87501 4.25012 6.87501H5.75012V20.7499H5.00012V7.62477H0.875C0.667813 7.62477 0.5 7.79258 0.5 7.99977V9.49977C0.5 9.59914 0.539374 9.69477 0.609687 9.76509C0.68 9.83541 0.775626 9.87477 0.875007 9.87477H1.25001V20.7497H0.875007C0.66782 20.7497 0.500007 20.9175 0.500007 21.1247C0.500007 21.3318 0.66782 21.4997 0.875007 21.4997H21.125C21.3322 21.4997 21.5 21.3318 21.5 21.1247C21.5 20.9175 21.3322 20.7497 21.125 20.7497H20.75L20.75 18.4999ZM3.49999 16.6249H2.74999V15.1249H3.49999V16.6249ZM3.49999 12.8749H2.74999V11.3749H3.49999V12.8749ZM11 8.37492C11.9103 8.37492 12.7306 8.92337 13.0784 9.76431C13.4272 10.6043 13.2341 11.5728 12.591 12.2159C11.9478 12.859 10.9794 13.0522 10.1394 12.7034C9.29842 12.3556 8.74997 11.5353 8.74997 10.6249C8.74997 9.38276 9.7578 8.37492 11 8.37492ZM10.625 20.7498H9.12499V17.3749H10.625V20.7498ZM12.875 20.7498H11.375V17.3749H12.875V20.7498ZM14.75 16.6247H7.62487V15.4997H14.75V16.6247ZM19.25 16.6247H18.5V15.1247H19.25V16.6247ZM19.25 12.8747H18.5V11.3747H19.25V12.8747Z"
                    fill="currentColor"
                  />
                  <path
                    d="M10.25 11H11C11.0994 11 11.195 10.9606 11.2653 10.8903C11.3356 10.82 11.375 10.7244 11.375 10.625V9.5C11.375 9.29281 11.2072 9.125 11 9.125C10.7928 9.125 10.625 9.29281 10.625 9.5V10.25H10.25C10.0428 10.25 9.875 10.4178 9.875 10.625C9.875 10.8322 10.0428 11 10.25 11Z"
                    fill="currentColor"
                  />
                </svg>

                <span class="text-opium">{{ $education }}</span>
              </div>
            </div>
          </div>
        @endif
      </div>
      <div>
        <a
          data-fancybox
          href="#dialog-content-{{ $name }}"
          class="stretched-link teamCardFancyBoxLink"
        >
          <span class="bg-chalk btn relative z-1 block w-full py-2 text-center">
            Meet {{ $name }}
          </span>
        </a>
      </div>
    </div>
  </div>
</div>

<div
  id="dialog-content-{{ $name }}"
  style="
    display: none;
    max-width: 600px;
    --fancybox-content-bg: var(--color-chalk);
  "
  class="!px-0 !pt-4"
>
  <div class="sticky top-4">
    <div class="relative">
      <button
        data-fancybox-close=""
        class="f-button is-close-btn bg-sand rounded-full"
        title="Close"
        style="--f-button-border-radius: 50%; --f-button-bg: var(--color-sand)"
      >
        <svg
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 24 24"
          tabindex="-1"
        >
          <path d="M20 20L4 4m16 0L4 20"></path>
        </svg>
      </button>
    </div>
  </div>
  <div
    class="flex w-full cursor-pointer flex-col rounded-xl px-10 pt-4 transition duration-500"
  >
    <div class="mx-auto mb-6 size-45 max-w-full overflow-hidden rounded-full">
      {{ $image ?? '' }}
    </div>

    <div class="team-card__content flex grow flex-col">
      <div class="grow">
        <div class="mx-auto max-w-120">
          <h3 class="text-3xl-fluid text-center leading-tight">{{ $name }}</h3>
          <p class="text-oriel mb-6 text-center text-lg">{{ $role }}</p>
          <div class="text-center">
            @foreach ($education as $degree)
              <p class="font-serif text-lg font-light">{{ $degree }}</p>
            @endforeach
          </div>
        </div>
        <hr class="bg-opium my-6" />
        <div class="space-y-4 lg:text-lg">
          {!! $bio !!}
        </div>
      </div>
    </div>
  </div>
</div>
