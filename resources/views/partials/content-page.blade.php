@if( is_home() || is_front_page() )
  @php(the_content())

  @include('partials/strong-buying')
  @include('partials/topics')
@else
  <ul class="breadcrumb list scroll-x" typeof="BreadcrumbList" vocab="http://schema.org/">
    @php
      if(function_exists('bcn_display'))
        bcn_display();
    @endphp
  </ul>
  <article class="inner mdl-grid">
    <section class="mdl-cell mdl-cell--9-col">
      <div class="mdl-grid mdl-color--grey-800">
        <div class="mdl-cell mdl-cell--12-col">
          <h3 class="title title--fontSmall title--bold title--noMargin mdl-color-text--white">
            @php(the_title())
          </h3>
        </div>
      </div>
      @php(the_content())

      @if( is_page( 20 ) )
        <?php echo do_shortcode( '[contact-form-7 id="386" title="買取、無料見積もり依頼(タイトルなし)" html_class="h-adr"]' ); ?>
      @elseif ( is_page( 354 ))
      @else
        <?php echo do_shortcode( '[contact-form-7 id="382" title="買取、無料見積もり依頼" html_class="h-adr"]' ); ?>
      @endif



      @include('partials/content-tel')

    </section>
    <section class="mdl-cell mdl-cell--3-col mdl-cell--8-col-tablet mdl-cell--4-col-phone">
      @include('partials/sidebar')
    </section>
    @include('partials/content-flow')
  </article>
@endif
