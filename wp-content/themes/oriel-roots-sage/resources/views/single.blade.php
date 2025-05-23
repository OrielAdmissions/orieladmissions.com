@extends('layouts.app')

@section('content')
  @while (have_posts())
    @php(the_post())
    @includeFirst(['partials.content-single-' . get_post_type(), 'partials.content-single'])
  @endwhile

  @include('partials.modules.latest-posts')
@endsection
