@extends('layouts.app')

@section('content')
  <ul class="breadcrumb list flex" typeof="BreadcrumbList" vocab="http://schema.org/">
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




        <?php echo do_shortcode( '[contact-form-7 id="382" title="買取、無料見積もり依頼" html_class="h-adr"]' ); ?>

        <div class="flex flex--center">
        <div class="tel">
          <div class="tel__title">お問合せ</div>
          <div class="tel__item">
          <i class="material-icons">perm_phone_msg</i> 0284-22-7923
          <div class="mdl-color-text--white">10:00～18:00</div>
          </div>

        </div>
      </div>

    </section>


    <section class="mdl-cell mdl-cell--3-col mdl-cell--8-col-tablet mdl-cell--4-col-phone">
      @include('partials/sidebar')
    </section>

    </article>


    @if( in_category( array( 'blog', 'topics') ))

    @else
      <div class="mdl-grid mdl-grid--no-spacing">
        <div class="mdl-cell mdl-cell--12-col mdl-cell--hide-tablet mdl-cell--hide-phone">
          <img src="{{bloginfo( 'url' )}}/wp-content/uploads/2017/06/delivery.png" alt="宅配での買取ご希望のお客様" class="" />
        </div>
        <div class="mdl-cell mdl-cell--12-col mdl-cell--hide-tablet mdl-cell--hide-phone">
          <img src="{{bloginfo( 'url' )}}/wp-content/uploads/2017/06/business-trip.png" alt="出張買取ご希望のお客様" class="" />
        </div>
      </div>
    @endif

  @endwhile
@endsection
