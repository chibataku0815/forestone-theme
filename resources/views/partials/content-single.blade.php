<article class="inner mdl-grid">
  <section class="mdl-cell mdl-cell--9-col">
    @if(in_category( in_category( array( 'blog', 'topics') )) )
      @php(the_content())
    @else
    <div class="mdl-grid mdl-grid--no-spacing">
      <div class="mdl-cell mdl-cell--6-col mdl-color--blue-grey-50">
        @if(has_post_thumbnail())
            {{the_post_thumbnail() }}
        @else
            <img src="{{bloginfo( 'url' )}}/wp-content/uploads/2017/06/IMG_7576.jpg" class="" />
        @endif
        <h3 class="title title--fontSmall flex flex--center">{{ get_the_title() }}</h3>
      </div>

      <div class="mdl-cell mdl-cell--6-col mdl-color--blue-grey-50 flex flex--center">
        <div class="mdl-grid mdl-grid--no-spacing">
        <div class="mdl-cell mdl-cell--12-col mdl-cell--1-offset-desktop"><strong>@php(the_field('color'))</strong></div>
        <div class="mdl-cell mdl-cell--4-col mdl-cell--1-offset-desktop">型番:</div>
        <div class="mdl-cell mdl-cell--7-col">@php(the_field('model_number'))</div>
        <div class="mdl-cell mdl-cell--4-col mdl-cell--1-offset-desktop">年代:</div>
        <div class="mdl-cell mdl-cell--7-col">@php(the_field('age'))</div>
        <div class="mdl-cell mdl-cell--4-col mdl-cell--1-offset-desktop">相場:</div>
        <div class="mdl-cell mdl-cell--7-col">@php(the_field('market_price'))</div>
        </div>
      </div>

      @php
        $cat = get_the_category(); $cat = $cat[0];
      @endphp

      <h5>
      @php
        $cats = get_the_category();
        foreach($cats as $cat):
        if($cat->parent) echo $cat->cat_name;
        endforeach;
      @endphp
        高価買取の重要パーツ
      </h5>

      <div class="mdl-grid">
        <div class="mdl-cell mdl-cell--4-col">@php(the_field('detail_image_left'))</div>
        <div class="mdl-cell mdl-cell--4-col">@php(the_field('detail_image_center'))</div>
        <div class="mdl-cell mdl-cell--4-col">@php(the_field('detail_image_right'))</div>
      </div>

      <div class="mdl-grid">
        <div class="mdl-cell mdl-cell--12-col">@php(the_field('detail_text'))</div>
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

  @endif
</section>


<section class="mdl-cell mdl-cell--3-col">
  @include('partials/sidebar')
</section>

</article>


@if(in_category( in_category( array( 'blog', 'topics') )) )

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
