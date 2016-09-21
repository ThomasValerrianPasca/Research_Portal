<!-- default page -->

<?php get_header(); ?>
<div class="breadcrumbs">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>
   
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


    <?php the_content(); ?>



<?php endwhile; else: ?>
    <p><?php _e('Sorry, this page does not exist.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>