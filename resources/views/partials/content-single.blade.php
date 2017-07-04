<article class="inner mdl-grid">
  <section class="mdl-cell mdl-cell--9-col">
    <div class="mdl-grid mdl-grid--no-spacing">
      <div class="mdl-cell mdl-cell--6-col mdl-color--blue-grey-50">
        <div class="mdl-grid">
          <div class="mdl-cell mdl-cell--12-col">
        @if(has_post_thumbnail())
            {{the_post_thumbnail() }}
        @else
            <img src="{{bloginfo( 'url' )}}/wp-content/uploads/2017/06/IMG_7576.jpg" class="" />
        @endif
          </div>
        </div>
      </div>

      <div class="mdl-cell mdl-cell--6-col mdl-color--blue-grey-50 flex flex--center">
        <div class="mdl-grid">
        <div class="mdl-cell mdl-cell--12-col mdl-cell--1-offset-desktop"><strong>@php(the_field('color'))</strong></div>
        <div class="mdl-cell mdl-cell--4-col mdl-cell--1-offset-desktop mdl-cell--3-col-tablet mdl-cell--1-col-phone">型番:</div>
        <div class="mdl-cell--7-col mdl-cell--5-col-tablet mdl-cell--3-col-phone flex flex--column-left">@php(the_field('model_number'))</div>
        <div class="mdl-cell mdl-cell--4-col mdl-cell--1-offset-desktop mdl-cell--3-col-tablet mdl-cell--1-col-phone">年代:</div>
        <div class="mdl-cell--7-col mdl-cell--5-col-tablet mdl-cell--3-col-phone flex flex--column-left">@php(the_field('age'))</div>
        <div class="mdl-cell mdl-cell--4-col mdl-cell--1-offset-desktop mdl-cell--3-col-tablet mdl-cell--1-col-phone">相場:</div>
        <div class="mdl-cell--7-col mdl-cell--5-col-tablet mdl-cell--3-col-phone flex flex--column-left">@php(the_field('market_price'))</div>
        </div>
      </div>


      <div class="mdl-cell mdl-cell--12-col mdl-color--blue-grey-50 flex flex--center">
        <div class="mdl-grid">
        <h3 class="title title--fontSmall">{{ get_the_title() }}</h3>
        </div>
      </div>

      <h5>
      @php
        $cats = get_the_category()
      @endphp
      @foreach($cats as $cat)
        @if($cat->parent)
          {{$cat->cat_name}}
        @endif
      @endforeach
        高価買取の重要パーツ
      </h5>


      @php
        $ctm = get_post_meta($post->ID, 'detail_image_left', true)
      @endphp

      @if(empty($ctm))
      @else
          <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--4-col"><img src="@php(the_field('detail_image_left'))" alt=""></div>
            <div class="mdl-cell mdl-cell--4-col"><img src="@php(the_field('detail_image_center'))" alt=""></div>
            <div class="mdl-cell mdl-cell--4-col"><img src="@php(the_field('detail_image_right'))" alt=""></div>
          </div>
      @endif



      <div class="mdl-cell mdl-cell--12-col mdl-grid">
        <div class="mdl-cell mdl-cell--12-col">@php(the_field('detail_text'))</div>
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


  <div class="inner mdl-grid mdl-grid--no-spacing">
    <div class="mdl-cell mdl-cell--12-col mdl-cell--hide-tablet mdl-cell--hide-phone">
      <img src="{{bloginfo( 'url' )}}/wp-content/uploads/2017/06/delivery.png" alt="宅配での買取ご希望のお客様" class="" />
    </div>
    <div class="mdl-cell mdl-cell--12-col mdl-cell--hide-tablet mdl-cell--hide-phone">
      <img src="{{bloginfo( 'url' )}}/wp-content/uploads/2017/06/business-trip.png" alt="出張買取ご希望のお客様" class="" />
    </div>
  </div>
