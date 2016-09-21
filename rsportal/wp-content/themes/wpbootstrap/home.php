<?php get_header(); ?>

<h1> Blog </h1>

   
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

 <div class= "row">
 	<div class="span8">

    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h2>
    <p><em><?php the_time('l, F jS, Y'); ?></em></p>
    <?php the_content(); ?>

    <hr>

	</div>

	<div class="span4">
		<?php get_sidebar(); ?>
	</div>

</div>





<?php endwhile; else: ?>
    <p><?php _e('Sorry, there are no posts.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>