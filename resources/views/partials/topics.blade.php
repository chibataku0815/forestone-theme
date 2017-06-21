@while(have_posts()) @php(the_post())
	<h1><?php the_title(); ?></h1>
  <div><?php the_content(); ?></div>
@endwhile
