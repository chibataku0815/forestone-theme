<?php
  use WP_Query;
   //　--------- 新着情報を3件表示　---------
      $args = array(
        'category_name'  => 'topics',  // カテゴリー「news」を読み込む
        'posts_per_page' => 3        // 表示数　3件
      );
      $the_query = new WP_Query( $args );// 新規WP query を作成　変数args で定義したパラメータを参照
      if ( $the_query->have_posts() ) :
      // ここから表示する内容を記入
      ?>

      <section class="section section--border">
        <h2 class="title title--no-margintop">プレスリリース</h2>
        <ul class="list">

        <?php while ( $the_query->have_posts() ) : $the_query->the_post();
        // -------- ここから繰り返し---------- ?>

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

endwhile; ?>
