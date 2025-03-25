@extends('layouts.app')

@section('content')
  <div class="bg-cardinal full-width relative">
    <div class="full-width">
      {!! get_svg('images.window-full', 'absolute -bottom-[30vw] md:-bottom-[180px] mx-auto left-0 right-0 text-cardinal w-full md:w-[500px] stroke-cardinal md:stroke-white/20 max-w-2xl h-auto') !!}
    </div>
    <div
      class="relative flex min-h-svh flex-col items-center justify-center py-30 text-center"
    >
      <h2
        class="fade-in-bottom text-8xl-fluid mx-auto mb-6 max-w-screen-lg text-center text-white"
      >
        MBA & Master's Admissions
      </h2>
      <a href="/contact" class="btn btn-primary">Contact Us</a>
    </div>
  </div>

  <div class="full-width">
    <?php
    $image_id = get_post_thumbnail_id();
    echo App\get_picture([$image_id], 'full', false, [
      'class' => 'w-full h-auto min-h-96 object-cover',
    ]); ?>
  </div>

  <div class="bg-sand full-width content-grid py-12 md:py-30">
    <div class="mb-20 md:mb-30 mx-auto max-w-175 text-center">
      <h2
        class="text-6xl-fluid mb-8">
        Applying to graduate school is competitive so
        <span class="text-oriel">don’t leave your application to chance!</span>
      </h2>
      <a href="/contact" class="btn btn-primary">Contact Us</a>
    </div>

    <div class="breakout">
      <h2
        class="text-6xl-fluid pb-12 text-center lg:pt-44 lg:pb-20"
      >
        What sets us apart?
      </h2>

      @include(
        'partials.modules.mba-cards',
        [
          'features' => [
            [
              'icon' => '<svg class="text-cardinal" width="50" height="44" viewBox="0 0 50 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      <path d="M10 43.5382C7.51462 43.5382 5.38691 42.6532 3.61691 40.8832C1.84691 39.1132 0.961914 36.9855 0.961914 34.5C0.961914 32.0146 1.84691 29.8869 3.61691 28.1169C5.38691 26.3469 7.51462 25.4619 10 25.4619C12.4855 25.4619 14.6132 26.3469 16.3832 28.1169C18.1532 29.8869 19.0382 32.0146 19.0382 34.5C19.0382 36.9855 18.1532 39.1132 16.3832 40.8832C14.6132 42.6532 12.4855 43.5382 10 43.5382ZM40 43.5382C37.5146 43.5382 35.3869 42.6532 33.6169 40.8832C31.8469 39.1132 30.9619 36.9855 30.9619 34.5C30.9619 32.0146 31.8469 29.8869 33.6169 28.1169C35.3869 26.3469 37.5146 25.4619 40 25.4619C42.4855 25.4619 44.6132 26.3469 46.3832 28.1169C48.1532 29.8869 49.0382 32.0146 49.0382 34.5C49.0382 36.9855 48.1532 39.1132 46.3832 40.8832C44.6132 42.6532 42.4855 43.5382 40 43.5382ZM25 18.5382C22.5146 18.5382 20.3869 17.6532 18.6169 15.8832C16.8469 14.1132 15.9619 11.9855 15.9619 9.50004C15.9619 7.01462 16.8469 4.88691 18.6169 3.11691C20.3869 1.34691 22.5146 0.461914 25 0.461914C27.4855 0.461914 29.6132 1.34691 31.3832 3.11691C33.1532 4.88691 34.0382 7.01462 34.0382 9.50004C34.0382 11.9855 33.1532 14.1132 31.3832 15.8832C29.6132 17.6532 27.4855 18.5382 25 18.5382Z" fill="currentColor"/>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      </svg>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      ',
              'title' => 'Expert Team',
              'content' =>
                '<p>We have built up years of experience, advising MBA applicants on their applications across all of the top business schools in the US and Europe. We understand the unique nuances of MBA programs and what admissions committees are looking for, allowing us to provide expert advice on every aspect of the process.</p>',
            ],
            [
              'icon' => '<svg class="text-cardinal" width="50" height="45" viewBox="0 0 50 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      <path d="M25.1995 44.1394C24.5391 44.1394 23.9733 43.9159 23.502 43.4688C23.0308 43.0217 22.7951 42.4519 22.7951 41.7594C22.7951 41.4519 22.8618 41.1219 22.9951 40.7694C23.1281 40.4169 23.3274 40.1076 23.5933 39.8413L33.9783 29.4569L32.382 27.8607L22.0358 38.2451C21.7699 38.5113 21.4751 38.7109 21.1514 38.8438C20.8276 38.9767 20.491 39.0432 20.1414 39.0432C19.4651 39.0432 18.8956 38.8117 18.4326 38.3488C17.9693 37.8855 17.7376 37.3157 17.7376 36.6394C17.7376 36.239 17.8083 35.8792 17.9495 35.5601C18.0903 35.2413 18.2731 34.9697 18.4976 34.7451L28.882 24.3607L27.3239 22.8032L16.9395 33.1488C16.6895 33.3988 16.3987 33.5944 16.067 33.7357C15.7353 33.8765 15.382 33.9469 15.007 33.9469C14.3562 33.9469 13.7928 33.709 13.317 33.2332C12.8412 32.7574 12.6033 32.194 12.6033 31.5432C12.6033 31.194 12.6697 30.8576 12.8026 30.5338C12.9356 30.2101 13.1351 29.9151 13.4014 29.6488L23.497 19.5532L21.9014 17.9957L11.8433 28.0913C11.6191 28.3159 11.3412 28.4986 11.0095 28.6394C10.6778 28.7807 10.3116 28.8513 9.91076 28.8513C9.21868 28.8513 8.64493 28.6236 8.18951 28.1682C7.73451 27.7132 7.50701 27.1394 7.50701 26.4469C7.50701 26.0978 7.57347 25.7613 7.70639 25.4376C7.8393 25.1138 8.03889 24.819 8.30514 24.5532L21.4495 11.4088L28.8289 18.8269C29.2872 19.2853 29.8168 19.6299 30.4176 19.8607C31.0189 20.0915 31.6239 20.2069 32.2326 20.2069C33.5018 20.2069 34.5885 19.7742 35.4926 18.9088C36.3964 18.0434 36.8483 16.9376 36.8483 15.5913C36.8483 15.008 36.7401 14.4119 36.5239 13.8032C36.3072 13.194 35.9441 12.6347 35.4345 12.1251L26.5308 3.22132L27.757 1.99507C28.3853 1.39257 29.1128 0.926317 29.9395 0.596317C30.7666 0.266317 31.5937 0.101318 32.4208 0.101318C33.3758 0.101318 34.2795 0.266317 35.132 0.596317C35.9845 0.926317 36.7376 1.4182 37.3914 2.07195L48.0264 12.7451C48.6639 13.383 49.1478 14.1203 49.4783 14.9569C49.8083 15.7932 49.9733 16.7434 49.9733 17.8076C49.9733 18.6409 49.8018 19.4567 49.4589 20.2551C49.116 21.053 48.6385 21.758 48.0264 22.3701L27.0933 43.3413C26.792 43.6426 26.4885 43.8509 26.1826 43.9663C25.8764 44.0817 25.5487 44.1394 25.1995 44.1394ZM4.98764 24.7163L2.88201 22.6107C2.17368 21.9278 1.63597 21.1119 1.26889 20.1632C0.901803 19.2149 0.718262 18.2565 0.718262 17.2882C0.718262 16.2532 0.902637 15.3055 1.27139 14.4451C1.64014 13.5842 2.10493 12.8734 2.66576 12.3126L12.8676 2.07195C13.4701 1.46945 14.1656 0.990278 14.9539 0.634445C15.7426 0.279029 16.5503 0.101318 17.377 0.101318C18.3578 0.101318 19.2416 0.253401 20.0283 0.557568C20.8153 0.862151 21.5614 1.36695 22.2664 2.07195L33.877 13.6826C34.127 13.9326 34.3224 14.2234 34.4633 14.5551C34.6045 14.8872 34.6751 15.2199 34.6751 15.5532C34.6751 16.2199 34.4412 16.7911 33.9733 17.2669C33.5053 17.7428 32.9381 17.9807 32.2714 17.9807C31.8964 17.9807 31.5597 17.9207 31.2614 17.8007C30.9635 17.6803 30.6687 17.4742 30.377 17.1826L21.4108 8.29319L4.98764 24.7163Z" fill="currentColor"/>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      </svg>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      ',
              'title' => 'Personalized service',
              'content' =>
                '<p>We recognize that every MBA applicant has a unique story to tell. Our approach is deeply personal, ensuring that your application reflects your individuality, values, and aspirations. We take the time to understand your background, experiences, and goals, crafting a tailored strategy that highlights your strengths and positions you as a standout candidate.</p>',
            ],
            [
              'icon' => '<svg class="text-cardinal" width="61" height="60" viewBox="0 0 61 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      <path d="M17.398 49.5094V29.8081H21.9992C22.2588 29.8081 22.5223 29.8352 22.7898 29.8894C23.0573 29.944 23.3209 30.0129 23.5805 30.0963L39.7636 36.0769C40.4269 36.3173 40.9677 36.7283 41.3861 37.31C41.8044 37.8921 42.0136 38.5227 42.0136 39.2019C42.0136 39.8685 41.7875 40.4088 41.3355 40.8225C40.8838 41.2358 40.3502 41.4425 39.7348 41.4425H34.9511C34.4223 41.4425 33.9296 41.4121 33.473 41.3512C33.0159 41.2904 32.5517 41.1702 32.0805 40.9906L27.8405 39.4037L27.0761 41.5531L31.9367 43.2406C32.3725 43.3944 32.8421 43.5017 33.3455 43.5625C33.8484 43.6233 34.3467 43.6537 34.8405 43.6537H49.8498C51.0869 43.6537 52.1575 44.0808 53.0617 44.935C53.9655 45.7892 54.4173 46.8525 54.4173 48.125L35.7061 54.7594L17.398 49.5094ZM4.89795 53.75V29.8081H13.648V53.75H4.89795ZM40.283 31.7306L30.3886 22.1587C29.1932 21.005 28.1875 19.7198 27.3717 18.3031C26.5559 16.8865 26.148 15.3462 26.148 13.6825C26.148 11.6154 26.87 9.86 28.3142 8.41625C29.758 6.97208 31.5134 6.25 33.5805 6.25C34.93 6.25 36.1761 6.57542 37.3186 7.22625C38.4615 7.87667 39.4496 8.70521 40.283 9.71188C41.1163 8.70521 42.1042 7.87667 43.2467 7.22625C44.3892 6.57542 45.6352 6.25 46.9848 6.25C49.0519 6.25 50.8073 6.97208 52.2511 8.41625C53.6952 9.86 54.4173 11.6154 54.4173 13.6825C54.4173 15.3462 54.0159 16.8865 53.213 18.3031C52.41 19.7198 51.4109 21.005 50.2155 22.1587L40.283 31.7306Z" fill="currentColor"/>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      </svg>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      ',
              'title' => 'Structured support',
              'content' =>
                '<p>Navigating the MBA application process can be overwhelming, but we simplify it with a clear, step-by-step framework to keep you organized and on track. Our proven methods ensure that no detail is overlooked and that every component of your application is polished to perfection.</p>',
            ],
            [
              'icon' => '<svg class="text-cardinal" width="46" height="47" viewBox="0 0 46 47" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      <path d="M0.686953 20.3273L10.4657 10.5485C11.0011 10.0135 11.6247 9.63292 12.3363 9.40667C13.0476 9.18083 13.7799 9.14313 14.5332 9.29354L17.9276 10.0054C15.8697 12.4796 14.223 14.72 12.9876 16.7267C11.7522 18.7329 10.5382 21.1656 9.3457 24.0248L0.686953 20.3273ZM12.2495 25.1973C13.272 22.4377 14.574 19.8169 16.1557 17.3348C17.7374 14.8523 19.5988 12.5406 21.7401 10.3998C25.1342 7.00563 28.9251 4.46625 33.1126 2.78167C37.3001 1.0975 41.4755 0.489376 45.6388 0.957293C46.1067 5.12063 45.5049 9.29604 43.8332 13.4835C42.162 17.671 39.6292 21.4619 36.2351 24.856C34.1197 26.9715 31.808 28.829 29.3001 30.4285C26.7917 32.0277 24.1578 33.3385 21.3982 34.361L12.2495 25.1973ZM28.5857 17.986C29.432 18.8323 30.4649 19.2554 31.6845 19.2554C32.904 19.2554 33.937 18.8323 34.7832 17.986C35.629 17.1398 36.052 16.111 36.052 14.8998C36.052 13.6881 35.629 12.6592 34.7832 11.8129C33.937 10.9667 32.904 10.5435 31.6845 10.5435C30.4649 10.5435 29.432 10.9667 28.5857 11.8129C27.7399 12.6592 27.317 13.6881 27.317 14.8998C27.317 16.111 27.7399 17.1398 28.5857 17.986ZM26.2588 45.9092L22.5232 37.2504C25.3824 36.0579 27.8215 34.84 29.8407 33.5967C31.8599 32.3529 34.1067 30.7023 36.5813 28.6448L37.2538 32.0385C37.4047 32.7919 37.3711 33.5308 37.1532 34.2554C36.9353 34.9796 36.5586 35.6094 36.0232 36.1448L26.2588 45.9092ZM4.49445 33.2454C5.71279 32.0275 7.19133 31.4163 8.93008 31.4117C10.6688 31.4067 12.1472 32.0131 13.3651 33.231C14.583 34.449 15.192 35.9273 15.192 37.666C15.192 39.4048 14.583 40.8831 13.3651 42.101C12.4192 43.0469 10.8678 43.8585 8.7107 44.536C6.55404 45.214 3.78654 45.7565 0.408203 46.1635C0.815286 42.7856 1.36174 40.0246 2.04758 37.8804C2.73341 35.7363 3.54904 34.1913 4.49445 33.2454Z" fill="currentColor"/>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      </svg>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      ',
              'title' => 'Highly responsive',
              'content' =>
                '<p>We pride ourselves on being there for you when you need us most. Whether it’s answering a quick question, reviewing materials, or providing guidance during a stressful moment, our team is highly responsive and committed to your success.</p>',
            ],
            [
              'icon' => '<svg class="text-cardinal" width="43" height="49" viewBox="0 0 43 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      <path d="M21.3335 30.1925C20.7214 30.1925 20.1997 29.9769 19.7685 29.5457C19.3377 29.1148 19.1222 28.5932 19.1222 27.9807C19.1222 27.3686 19.3377 26.8469 19.7685 26.4157C20.1997 25.9848 20.7214 25.7694 21.3335 25.7694C21.9456 25.7694 22.4672 25.9848 22.8985 26.4157C23.3293 26.8469 23.5447 27.3686 23.5447 27.9807C23.5447 28.5932 23.3293 29.1148 22.8985 29.5457C22.4672 29.9769 21.9456 30.1925 21.3335 30.1925ZM11.3335 30.1925C10.7214 30.1925 10.1997 29.9769 9.7685 29.5457C9.33766 29.1148 9.12225 28.5932 9.12225 27.9807C9.12225 27.3686 9.33766 26.8469 9.7685 26.4157C10.1997 25.9848 10.7214 25.7694 11.3335 25.7694C11.9456 25.7694 12.4672 25.9848 12.8985 26.4157C13.3293 26.8469 13.5447 27.3686 13.5447 27.9807C13.5447 28.5932 13.3293 29.1148 12.8985 29.5457C12.4672 29.9769 11.9456 30.1925 11.3335 30.1925ZM31.3335 30.1925C30.7214 30.1925 30.1997 29.9769 29.7685 29.5457C29.3377 29.1148 29.1222 28.5932 29.1222 27.9807C29.1222 27.3686 29.3377 26.8469 29.7685 26.4157C30.1997 25.9848 30.7214 25.7694 31.3335 25.7694C31.9456 25.7694 32.4672 25.9848 32.8985 26.4157C33.3293 26.8469 33.5447 27.3686 33.5447 27.9807C33.5447 28.5932 33.3293 29.1148 32.8985 29.5457C32.4672 29.9769 31.9456 30.1925 31.3335 30.1925ZM21.3335 40C20.7214 40 20.1997 39.7844 19.7685 39.3532C19.3377 38.9223 19.1222 38.4009 19.1222 37.7888C19.1222 37.1763 19.3377 36.6546 19.7685 36.2238C20.1997 35.7925 20.7214 35.5769 21.3335 35.5769C21.9456 35.5769 22.4672 35.7925 22.8985 36.2238C23.3293 36.6546 23.5447 37.1763 23.5447 37.7888C23.5447 38.4009 23.3293 38.9223 22.8985 39.3532C22.4672 39.7844 21.9456 40 21.3335 40ZM11.3335 40C10.7214 40 10.1997 39.7844 9.7685 39.3532C9.33766 38.9223 9.12225 38.4009 9.12225 37.7888C9.12225 37.1763 9.33766 36.6546 9.7685 36.2238C10.1997 35.7925 10.7214 35.5769 11.3335 35.5769C11.9456 35.5769 12.4672 35.7925 12.8985 36.2238C13.3293 36.6546 13.5447 37.1763 13.5447 37.7888C13.5447 38.4009 13.3293 38.9223 12.8985 39.3532C12.4672 39.7844 11.9456 40 11.3335 40ZM31.3335 40C30.7214 40 30.1997 39.7844 29.7685 39.3532C29.3377 38.9223 29.1222 38.4009 29.1222 37.7888C29.1222 37.1763 29.3377 36.6546 29.7685 36.2238C30.1997 35.7925 30.7214 35.5769 31.3335 35.5769C31.9456 35.5769 32.4672 35.7925 32.8985 36.2238C33.3293 36.6546 33.5447 37.1763 33.5447 37.7888C33.5447 38.4009 33.3293 38.9223 32.8985 39.3532C32.4672 39.7844 31.9456 40 31.3335 40ZM4.60287 48.75C3.33995 48.75 2.271 48.3125 1.396 47.4375C0.520996 46.5625 0.0834961 45.4936 0.0834961 44.2307V10.7694C0.0834961 9.5065 0.520996 8.43754 1.396 7.56254C2.271 6.68754 3.33995 6.25004 4.60287 6.25004H8.06412V0.961914H11.9104V6.25004H30.8529V0.961914H34.6029V6.25004H38.0641C39.327 6.25004 40.396 6.68754 41.271 7.56254C42.146 8.43754 42.5835 9.5065 42.5835 10.7694V44.2307C42.5835 45.4936 42.146 46.5625 41.271 47.4375C40.396 48.3125 39.327 48.75 38.0641 48.75H4.60287ZM4.60287 45H38.0641C38.2566 45 38.4329 44.9198 38.5929 44.7594C38.7533 44.5994 38.8335 44.4232 38.8335 44.2307V20.7694H3.8335V44.2307C3.8335 44.4232 3.9137 44.5994 4.07412 44.7594C4.23412 44.9198 4.41037 45 4.60287 45Z" fill="currentColor"/>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      </svg>',
              'title' => 'Work around your schedule',
              'content' =>
                '<p>Your time is valuable, and we understand that MBA applicants often balance demanding careers and personal commitments. That’s why we offer the flexibility to work around your schedule, including evenings and weekends.</p>',
            ],
            [
              'icon' => '<svg class="text-cardinal" width="49" height="48" viewBox="0 0 49 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      <path d="M47.0614 29.505L30.172 46.3944C29.7178 46.846 29.2068 47.185 28.6389 47.4113C28.0709 47.6371 27.5047 47.75 26.9401 47.75C26.3751 47.75 25.8101 47.6371 25.2451 47.4113C24.6801 47.185 24.1718 46.846 23.7201 46.3944L2.23449 24.9325C1.80824 24.5225 1.48199 24.0413 1.25574 23.4888C1.02991 22.9363 0.916992 22.355 0.916992 21.745V4.79313C0.916992 3.54396 1.35845 2.47437 2.24137 1.58437C3.1247 0.69479 4.19762 0.25 5.46012 0.25H22.412C23.0157 0.25 23.6005 0.3725 24.1664 0.6175C24.7326 0.862084 25.2232 1.19146 25.6382 1.60563L47.0614 23.0675C47.5193 23.5217 47.8532 24.0325 48.0632 24.6C48.2732 25.1679 48.3782 25.7373 48.3782 26.3081C48.3782 26.879 48.2732 27.4402 48.0632 27.9919C47.8532 28.544 47.5193 29.0483 47.0614 29.505ZM10.9795 13.4469C11.8512 13.4469 12.5916 13.1431 13.2007 12.5356C13.8095 11.9281 14.1139 11.1902 14.1139 10.3219C14.1139 9.44729 13.8101 8.70396 13.2026 8.09187C12.5951 7.47937 11.8572 7.17313 10.9889 7.17313C10.1143 7.17313 9.37095 7.47833 8.75887 8.08875C8.14637 8.69917 7.84012 9.44042 7.84012 10.3125C7.84012 11.1842 8.14533 11.9246 8.75574 12.5337C9.36616 13.1425 10.1074 13.4469 10.9795 13.4469Z" fill="currentColor"/>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      </svg>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      ',
              'title' => 'Comprehensive Packages',
              'content' =>
                '<p>Our flat-fee structure covers everything that you will need when working on your applications. With our transparent pricing, you will never be charged extra, even under tight deadlines that require a quick turnaround. With our packages, you will receive unlimited expert support, allowing you to focus on crafting your strongest application.</p>',
            ],
          ],
        ]
      )
    </div>
  </div>

  @include(
    'partials.modules.tabs',
    [
      'tabs' => [
        [
          'label' => 'MBA',
          'active' => true,
          'accent_color' => '#EE2212',
          'template_part' => 'mba',
        ],
        [
          'label' => "Master's Admissions",
          'active' => false,
          'accent_color' => '#5D6720',
          'template_part' => 'masters-admissions',
        ],
      ],
    ]
  )
@endsection
