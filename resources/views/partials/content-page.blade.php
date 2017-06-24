@if( is_home() || is_front_page() )
  @php(the_content())
@else
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
        <?php echo do_shortcode( '[contact-form-7 id="378" title="買取、無料見積もり依頼(タイトルなし)" html_class="h-adr"]' ); ?>
      @else
        <?php echo do_shortcode( '[contact-form-7 id="5" title="買取、無料見積もり依頼" html_class="h-adr"]' ); ?>
      @endif



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
    <section class="mdl-cell mdl-cell--3-col">
      @include('partials/sidebar')
    </section>
  </article>

  <div class="mdl-grid mdl-grid--no-spacing">
    <div class="mdl-cell mdl-cell--12-col mdl-cell--hide-tablet mdl-cell--hide-phone">
      <img src="{{bloginfo( 'url' )}}/wp-content/uploads/2017/06/delivery.png" alt="宅配での買取ご希望のお客様" class="" />
    </div>
    <div class="mdl-cell mdl-cell--12-col mdl-cell--hide-tablet mdl-cell--hide-phone">
      <img src="{{bloginfo( 'url' )}}/wp-content/uploads/2017/06/business-trip.png" alt="出張買取ご希望のお客様" class="" />
    </div>
  </div>
@endif
