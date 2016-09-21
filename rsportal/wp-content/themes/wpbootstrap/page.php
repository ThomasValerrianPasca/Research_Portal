<?php get_header(); ?>
   
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

 <div class= "row">
 	<div class="col-md-8">


    <?php the_content(); ?>

	</div>

	<div class="col-md-4">
		<?php get_sidebar(); ?>
	</div>

</div>





<?php endwhile; else: ?>
    <p><?php _e('Sorry, this page does not exist.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>