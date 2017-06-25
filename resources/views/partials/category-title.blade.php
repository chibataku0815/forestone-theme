@if( in_category( array( 'blog', 'topics') ))

@else
  @php
    $cat = get_the_category(); $cat = $cat[0];
    echo '<section class="mdl-color--black mdl-color-text--red ' . $cat->category_nicename . '" />';
  @endphp
    <div class="mdl-grid flex flex--center">
      <div class="title title--fontMiddle title--bold mdl-cell mdl-cell--4-col flex flex--center">
        @php
            $cats = get_the_category();
            $cat = $cats[0];
            if($cat->parent){
            $parent = get_category($cat->parent);
            echo $parent->cat_name;
            }else{
            echo $cat->cat_name;
            }
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
@endif
