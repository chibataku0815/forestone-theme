@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  <ul class="breadcrumb list scroll-x" typeof="BreadcrumbList" vocab="http://schema.org/">
    @php
      if(function_exists('bcn_display'))
        bcn_display();
    @endphp
  </ul>
  <article class="inner mdl-grid ">
    <section class="mdl-cell mdl-cell--9-col">

      @if (!have_posts())
        <div class="alert alert-warning">
          {{ __('ブログ記事がありません.', 'sage') }}
        </div>

      @endif

      @while (have_posts()) @php(the_post())
        <div class="mdl-grid mdl-color--blue-grey-50">
          <div class="mdl-cell mdl-cell--3-col mdl-cell--8-col-tablet mdl-cell--4-col-phone flex flex--center">
            {{ get_the_time('Y年n月j日') }}
          </div>
          <div class="mdl-cell mdl-cell--9-col">
            <a href="{{ get_permalink() }}" class="mdl-link">{{ get_the_title() }}</a>
          </div>
        </div>
      @endwhile
      {!! get_the_posts_navigation() !!}

      @php
        echo do_shortcode( '[contact-form-7 id="382" title="買取、無料見積もり依頼" html_class="h-adr"]' )
      @endphp

    </section>

    <section class="mdl-cell mdl-cell--3-col mdl-cell--8-col-tablet mdl-cell--4-col-phone">
      @include('partials/sidebar')
    </section>

    @include('partials/content-flow')

  </article>
@endsection
