<div class="wrapper wrapper--space mdl-color--grey-50">
  <div class="mdl-grid mdl-grid--no-spacing">
    <div class="mdl-cell mdl-cell--12-col flex flex--column-center">
      <img src="{{bloginfo( 'url' )}}/wp-content/uploads/2017/06/top-title-topics.png" alt="新着情報" class="alignnone size-full wp-image-188" />
        <?php $wp_query  = new WP_Query( $param = array('post_type' => '新着買取ブログ', 'posts_per_page' => 6) );
        $wp_query->query($param); ?>
        <div class="mdl-cell mdl-cell--12-col mdl-grid">
        <?php if($wp_query->have_posts()): while($wp_query->have_posts()) : $wp_query->the_post(); ?>
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
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
                <?php endwhile; ?>
            <?php else : ?>
                <div class="mdl-cell mdl-cell--12-col flex flex--center">
                  <?php _e('Sorry, no posts matched your criteria.') ?>
                </div>
          </div>
        <?php endif; wp_reset_postdata(); ?>
        </div>


    </div>
  </div>
</div>
