<?php
get_header();

query_posts('category_name=useful links');
if(have_posts()) :
	while(have_posts()) :
	    the_post();
	    ?>
	<hr>
	<div id="containercmn">
	<h2><a href="<?php the_permalink(); ?>"><?php the_title();?> </a> </h2>
	<p><?php //the_excerpt(); ?> </p>
	</div>
	
	
	



	<?php
	  endwhile;

	else :
	  ?><li>No posts.</li><?php
endif;
wp_reset_query();

get_footer();
?>

