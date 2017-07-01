  @php
    $cat = get_the_category(); $cat = $cat[0];
    echo '<section class="mdl-color--black mdl-color-text--red ' . $cat->category_nicename . '" />';
  @endphp
  <h2 class="mdl-grid flex flex--center">
    <div class="title title--fontMiddle title--bold mdl-cell mdl-cell--4-col flex flex--center">
      @php
          $cats = get_the_category();
          $cat = $cats[0];
          if($cat->parent){
            $parent = get_category($cat->parent);
            echo $parent->cat_name;
          }
          else{
            echo $cat->cat_name;
          }
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
  </h2>
  </section>






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

  @php
  $categories = get_terms( 'category', array(
      'orderby'    => 'count',
      'hide_empty' => 0,
      'parent' => get_query_var('cat'),
   ) )
  @endphp
  <div class="mdl-grid">
  @foreach($categories as $value)
      <a href="{{get_category_link($value->term_id)}}" class="mdl-card mdl-cell mdl-cell--4-col mdl-shadow--2dp flex flex--center">

        <div class="mdl-card__title mdl-card--border">
          {{$value->name}}
        </div>
      </a>
  @endforeach
  </div>
