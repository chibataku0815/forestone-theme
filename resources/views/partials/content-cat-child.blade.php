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
    <div class="title title--fontMiddle title--bold  mdl-cell mdl-cell--8-col mdl-color-text--white">
      を売るなら
      @php
        $upload_dir = wp_upload_dir();
      @endphp
      <img src="{{ $upload_dir['baseurl'] }}/2017/06/logo-white.svg" alt="日本スニーカー買取センター" class="logo logo--small ie-svg">
      へ
    </div>
  </div>

</section>


<article @php(post_class())>
  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('商品がありません.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif

  @while (have_posts()) @php(the_post())
    <header>
      <h2 class="entry-title"><a href="{{ get_permalink() }}">{{ get_the_title() }}</a></h2>
      @if(has_post_thumbnail())
          {{the_post_thumbnail(array( 200, 150 )) }}
      @else
          <img src="{{bloginfo( 'url' )}}/wp-content/uploads/2017/06/IMG_7576.jpg" class="" />
      @endif
      <a href="{{ get_permalink() }}">詳細はこちら</a></h2>
    </header>
    <div class="entry-summary">
      <p>@php(the_field('color'))</p>
      <p>@php(the_field('model_number'))</p>
      <p>@php(the_field('age'))</p>
      <p>@php(the_field('market_price'))</p>
      <p>@php(the_field('expensive'))</p>
    </div>
  @endwhile
</article>
