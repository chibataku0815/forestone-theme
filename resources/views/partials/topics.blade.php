<?php
      $args = array(
        'category_name'  => 'topics',
        'posts_per_page' => 5
      );
      $the_query = new WP_Query( $args )
      if ( $the_query->have_posts() ) :
      ?>

      <section class="section section--border">
        <img src="http://japan-sneaker.com/wp-content/uploads/2017/06/top-title-topics.png" alt="新着情報" width="640" height="71" class="alignnone size-full wp-image-188" />
        <ul class="list">

        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

          <li class="list__item mdl-grid">
           <div class="mdl-cell mdl-cell--3-col mdl-grid mdl-grid--no-spacing">
            <div class="list__date mdl-cell mdl-cell--5-col"><?php the_time('Y.m.j'); ?></div>
            <div class="mdl-cell mdl-cell--7-col">
                <?php
                $cats = get_the_category();
                foreach($cats as $cat):
                if($cat->parent) echo '<a class="list__label" href="'.home_url().'/category/'.$cat->slug.'">'.$cat->cat_name.'</a>';
                endforeach;
                ?>
            </div>
            </div>
            <div class="mdl-cell mdl-cell--9-col">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </div>
          </li>

        <?php endwhile; ?>

        </ul>

        <div class="flex flex--column-right">
            <a href="<?php echo home_url(); ?>/category/topics/" class="">
               >> プレスリリース一覧
            </a>
        </div>

      </section>

      <?php
      wp_reset_postdata();
      endif;
      ?>
