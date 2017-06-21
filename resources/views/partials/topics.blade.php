<?php
use WP_Query;
$args = array('post_type' => 'featured', 'posts_per_page' => 1, 'post_status' => 'publish');
$featured = new WP_Query($args);
while($featured->have_posts()) : $featured->the_post();
the_post_thumbnail();
endwhile; ?>
