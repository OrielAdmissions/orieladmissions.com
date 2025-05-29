@php
  $author = get_queried_object();
  $avatar = get_avatar_url($author->ID);
  $name = get_the_author_meta('display_name', $author->ID);
  $bio = get_the_author_meta('description', $author->ID);
@endphp

@extends('layouts.app')

@section('content')
  <div class="max-w-4xl mx-auto px-4 py-10 mt-24">
    <div class="flex items-center gap-6 mb-24">
      @if ($avatar)
        <img src="{{ $avatar }}" alt="{{ $name }}" class="w-16 h-16 rounded-full object-cover">
      @else
        <div class="w-16 h-16 rounded-full bg-gray-300 flex items-center justify-center text-gray-700 font-bold text-xl">
          {{ strtoupper(substr($name, 0, 1)) }}
        </div>
      @endif

      <div>
        <h1 class="text-2xl">{{ $name }}</h1>
        <p class="text-gray-600 text-sm">
          {{ $bio ?: 'This author hasn’t added a bio yet.' }}
        </p>
      </div>
    </div>

    <h2 class="text-xl mb-4">Posts by {{ $name }}</h2>

    @if (have_posts())
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        @while (have_posts()) @php(the_post())
        @include('partials.content')
        @endwhile
      </div>

      {!! get_the_posts_navigation() !!}
    @else
      <p>No posts found for this author.</p>
    @endif
  </div>
@endsection
