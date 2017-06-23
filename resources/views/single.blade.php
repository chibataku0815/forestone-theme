@extends('layouts.app')

@section('content')
  @include('partials/breadcrumbs')
  @while(have_posts()) @php(the_post())
    @include('partials/content-single-'.get_post_type())
  @endwhile
@endsection
