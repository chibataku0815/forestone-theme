  @extends('layouts.app')

  @section('content')
    <ul class="breadcrumb list scroll-x" typeof="BreadcrumbList" vocab="http://schema.org/">
      @php
        if(function_exists('bcn_display'))
          bcn_display();
      @endphp
    </ul>
    @while(have_posts()) @php(the_post())
    <article class="inner mdl-grid">
      <section class="mdl-cell mdl-cell--9-col">
        <div class="mdl-grid mdl-color--blue-grey-50">
          <div class="mdl-cell mdl-cell--12-col">
            <h3 class="title title--fontSmall">{{ get_the_title() }}</h3>
          </div>
        </div>
        <div class="mdl-grid">
          <div class="mdl-cell mdl-cell--12-col">
            @php(the_content())
          </div>
        </div>

        @php
          echo do_shortcode( '[contact-form-7 id="382" title="買取、無料見積もり依頼" html_class="h-adr"]' )
        @endphp

        @include('partials/content-tel')

      </section>


      <section class="mdl-cell mdl-cell--3-col mdl-cell--8-col-tablet mdl-cell--4-col-phone">
        @include('partials/sidebar')
      </section>

    </article>


      @if( in_category( array( 'blog', 'topics') ))

      @else
        @include('partials/content-flow')
      @endif

    @endwhile
  @endsection
