@php
  $query = new WP_Query( array('post_type' => 'blog', 'posts_per_page' => 6) )
@endphp
@if ( $query->have_posts() )
  <div class="wrapper wrapper--space mdl-color--grey-50">
    <div class="mdl-grid mdl-grid--no-spacing">
      <div class="mdl-cell mdl-cell--12-col flex flex--column-center">
        <img src="{{bloginfo( 'url' )}}/wp-content/uploads/2017/06/top-title-topics.png" alt="新着情報" class="alignnone size-full wp-image-188" />
        <div class="mdl-cell mdl-cell--12-col mdl-grid">
        @while($query->have_posts()) @php($query->the_post())
        <div class="topics mdl-cell mdl-cell--6-col mdl-grid">
          <div class="mdl-cell mdl-cell--3-col mdl-cell--8-col-tablet mdl-cell--4-col-phone flex flex--column-left">
            <em>{{the_time('Y.m.j')}}</em>
          </div>

          <div class="mdl-cell mdl-cell--6-col flex flex--column-left">
            <a href="<?php the_permalink() ?>"> {{the_title()}}</a>
          </div>
          <div class="mdl-cell mdl-cell--3-col mdl-cell--8-col-tablet mdl-cell--4-col-phone flex flex--center">
            @if(has_post_thumbnail())
                {{the_post_thumbnail() }}
            @else
                <img src="{{bloginfo( 'url' )}}/wp-content/uploads/2017/06/IMG_7576.jpg"  class="topics__image" />
            @endif
          </div>
        </div>
        @endwhile
        @php(wp_reset_postdata())
      </div>
      </div>
    </div>
  </div>
@else
@endif
