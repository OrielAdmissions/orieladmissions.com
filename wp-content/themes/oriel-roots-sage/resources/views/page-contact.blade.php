@extends('layouts.app')

@section('content')
  <div class="breakout mt-[100px]">
    <h1
      class="fade-in-bottom text-6xl-fluid max-w-screen-lg px-4 py-16 max-md:text-center"
    >
      Get Expert Guidance on Your College Applications
    </h1>
    <div></div>
  </div>
  <div class="breakout">
    <section class="grid gap-8 pb-12 lg:grid-cols-12 lg:gap-x-12 lg:pb-30">
      <div class="lg:col-span-6">
        {!!
          App\get_picture([get_post_thumbnail_id()], 'full', false, [
            'class' => 'object-cover max-lg:w-full mx-lg:mx-auto pin-content rounded-xl',
          ])
        !!}
      </div>
      <div class="long-content lg:col-span-6">
        {!! do_shortcode('[forminator_form id="371"]') !!}
      </div>
    </section>
  </div>
@endsection
