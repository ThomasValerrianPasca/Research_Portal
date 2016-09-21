<?php get_header(); ?>
   
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

 <div class= "row">
 	<div class="col-md-8">

    <h2><?php the_title(); ?></h2>	
    <p><em><?php the_time(‘l, F jS, Y’); ?></em></p>
    <?php the_content(); ?>
    <hr>
    		<?php //comments_template(); ?>

	</div>

	<div class="col-md-4">
		<?php get_sidebar(); ?>
	</div>

</div>





<?php endwhile; else: ?>
    <p><?php _e('Sorry, this page does not exist.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>