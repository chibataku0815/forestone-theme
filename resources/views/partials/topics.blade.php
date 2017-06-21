<?php
  use WP_Query;
  $args = array('category_name' => 'topics', 'posts_per_page' => 1);
  $the_query = new WP_Query( $args );
  while($the_query->have_posts()) : $the_query->the_post();
?>
