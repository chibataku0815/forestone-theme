@php
  $cat = get_the_category(); $cat = $cat[0];
  echo '<section class="mdl-color--black mdl-color-text--red ' . $cat->category_nicename . '" />';
@endphp
  <div class="mdl-grid flex flex--center">
    <div class="title title--fontMiddle title--bold mdl-cell mdl-cell--4-col flex flex--center">
    @php
      $cats = get_the_category();
      foreach($cats as $cat):
      if($cat->parent) echo $cat->cat_name;
      endforeach;
    @endphp
    </div>
    <h2 class="title title--fontMiddle title--bold  mdl-cell mdl-cell--8-col mdl-color-text--white">
      を売るなら
      @php
        $upload_dir = wp_upload_dir();
      @endphp
      <img src="{{ $upload_dir['baseurl'] }}/2017/06/logo-white.svg" alt="日本スニーカー買取センター" class="logo logo--small ie-svg">
      へ
  </h2>
</div>
</section>


  @if (!have_posts())
  <article @php(post_class())>
    <div class="alert alert-warning">
      {{ __('商品がありません.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  </article>
  @endif

  @php
    $cat_id = get_queried_object()->cat_ID; $post_id = 'category_'.$cat_id
  @endphp



  <div class="mdl-grid mdl-grid--no-spacing ">
    <div class="mdl-cell mdl-cell--5-col flex flex--center">
      <img src="{{the_field('category_image01',$post_id)}}" alt="">
    </div>
    <div class="mdl-cell--7-col mdl-cell--8-col-tablet mdl-cell--4-col-phone mdl-grid">
      {{the_field('category_text01',$post_id)}}
    </div>
  </div>

  <div class="mdl-grid mdl-grid--no-spacing ">
    <div class="mdl-cell mdl-cell--5-col flex flex--center">
      <img src="{{the_field('category_image02',$post_id)}}" alt="">
    </div>
    <div class="mdl-cell--7-col mdl-cell--8-col-tablet mdl-cell--4-col-phone mdl-grid">
      {{the_field('category_text02',$post_id)}}
    </div>
  </div>

  <div class="mdl-grid ">
  @while (have_posts()) @php(the_post())
    <article class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col">
    <header>
      @if(has_post_thumbnail())
          <a href="{{ get_permalink() }}">{{the_post_thumbnail() }}</a>
      @else
          <a href="{{ get_permalink() }}"><img src="{{bloginfo( 'url' )}}/wp-content/uploads/2017/06/IMG_7576.jpg" class="" /></a>
      @endif
      <div class="mdl-grid">
        <p><a href="{{ get_permalink() }}">{{ get_the_title() }}</a></p>
      </div>

      <div class="mdl-card__supporting-text mdl-grid mdl-grid--no-spacing">
        <div class="mdl-cell mdl-cell--12-col mdl-cell--1-offset-desktop"><strong>@php(the_field('color'))</strong></div>
        <div class="mdl-cell mdl-cell--4-col mdl-cell--1-offset-desktop mdl-cell--3-col-tablet mdl-cell--1-col-phone">型番:</div>
        <div class="mdl-cell--7-col mdl-cell--5-col-tablet mdl-cell--3-col-phone">@php(the_field('model_number'))</div>
        <div class="mdl-cell mdl-cell--4-col mdl-cell--1-offset-desktop mdl-cell--3-col-tablet mdl-cell--1-col-phone">年代:</div>
        <div class="mdl-cell--7-col mdl-cell--5-col-tablet mdl-cell--3-col-phone">@php(the_field('age'))</div>
        <div class="mdl-cell mdl-cell--4-col mdl-cell--1-offset-desktop mdl-cell--3-col-tablet mdl-cell--1-col-phone">相場:</div>
        <div class="mdl-cell--7-col mdl-cell--5-col-tablet mdl-cell--3-col-phone">@php(the_field('market_price'))</div>
        <div class="mdl-cell mdl-cell--12-col mdl-grid">
        <div class="mdl-cell mdl-cell--12-col mdl-color--red  mdl-color-text--white flex flex--center">@php(the_field('expensive'))</div>
        </div>
      </div>

      <div class="mdl-card__actions mdl-card--border flex flex--center">
        <a href="{{ get_permalink() }}" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-color--black mdl-color-text--white">詳細はこちら</a></h2>
      </div>

    </header>

    </article>
  @endwhile
</div>
