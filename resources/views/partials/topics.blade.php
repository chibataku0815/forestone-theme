<div class="wrapper wrapper--space mdl-color--grey-50">
  <div class="mdl-grid mdl-grid--no-spacing">
    <div class="mdl-cell mdl-cell--12-col flex flex--column-center">
      <img src="{{bloginfo( 'url' )}}/wp-content/uploads/2017/06/top-title-topics.png" alt="新着情報" class="alignnone size-full wp-image-188" />
        <?php $query = new WP_Query( array('post_type' => 'post', 'category_name'  => 'topics', 'posts_per_page' => 5) ); ?>
        <div class="mdl-cell mdl-cell--12-col mdl-grid">
        <?php if ( $query->have_posts() ) : ?>
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
              <div class="topics mdl-cell mdl-cell--6-col mdl-grid">
                  <div class="mdl-cell mdl-cell--3-col flex flex--column-left">
                    <em><?php the_time('Y.m.j'); ?></em>
                  </div>

                  <div class="mdl-cell mdl-cell--6-col flex flex--column-left">
                    <a href="<?php the_permalink() ?>"> <?php the_title() ?> </a>
                  </div>
                  <div class="mdl-cell mdl-cell--3-col flex flex--center">
                    @if(has_post_thumbnail())
                        {{the_post_thumbnail(array( 2100, 75 )) }}
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
