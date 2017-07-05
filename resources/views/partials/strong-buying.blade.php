@php
  $query = new WP_Query( array('post_type' => 'post','category_name' => 'strong-buying', 'posts_per_page' => 12) )
@endphp

@if ( $query->have_posts() )
  @while($query->have_posts()) @php($query->the_post())
      <div class="wrapper wrapper--space mdl-color--blue-grey-50">
        <div class="mdl-grid">
          <div class="mdl-cell mdl-cell--12-col flex flex--center">
            <img src="{{bloginfo( 'url' )}}/wp-content/uploads/2017/06/top-title-strength.png" alt="買取強化商品" class="alignnone size-full wp-image-188" />
          </div>
            <div class="mdl-cell mdl-cell--12-col mdl-grid">
                      <div class="mdl-cell mdl-cell--2-col flex flex--center ">
                        <a href="<?php the_permalink() ?>" class="mdl-card">
                          <div class="mdl-card__title mdl-card--expand flex flex--center">
                            @if(has_post_thumbnail())
                                {{the_post_thumbnail() }}
                            @else
                                <img src="{{bloginfo( 'url' )}}/wp-content/uploads/2017/06/IMG_7576.jpg"  class="" />
                            @endif
                          </div>
                          <div class="mdl-card__actions mdl-card--border">
                            @php(the_title())
                          </div>
                        </a>

                      </div>
                      </div>
                </div>
              </div>
  @endwhile
  @php(wp_reset_postdata())
@else
@endif
