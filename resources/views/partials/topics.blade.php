<?php
  use WP_Query;
  $args = array('category_name' => 'topics', 'posts_per_page' => 1);
  $featured = new WP_Query($args);
  while($featured->have_posts()) : $featured->the_post();
  the_post_thumbnail();
endwhile; ?>
