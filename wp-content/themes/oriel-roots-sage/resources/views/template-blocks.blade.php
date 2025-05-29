{{--
  Template Name: Block Template
--}}

@extends('layouts.app-blocks')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.content-page')
  @endwhile
@endsection
