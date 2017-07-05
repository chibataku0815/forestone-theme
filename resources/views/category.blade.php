@extends('layouts.app')
  @section('content')
    @include('partials.page-header')
    <ul class="breadcrumb list scroll-x" typeof="BreadcrumbList" vocab="http://schema.org/">
      @php
        if(function_exists('bcn_display'))
          bcn_display();
      @endphp
    </ul>

    <article class="inner mdl-grid">
      <section class="mdl-cell mdl-cell--9-col">

        @php
          $cats   = get_queried_object();
          $parent = $cats->parent;
        @endphp

        @if ($parent == 0)
          @include('partials/content-cat-parent')
        @else
          @include('partials/content-cat-child')
        @endif

  			@php
  			  echo do_shortcode( '[contact-form-7 id="382" title="買取、無料見積もり依頼" html_class="h-adr"]' )
  			@endphp

  			@include('partials/content-tel')
      </section>


      <section class="mdl-cell mdl-cell--3-col mdl-cell--8-col-tablet mdl-cell--4-col-phone">
				@include('partials/sidebar')
      </section>
      @include('partials/content-flow')
    </article>
  @endsection
