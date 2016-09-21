<!-- blog -->
<?php get_header(); ?> 
<div class="breadcrumbs breadcrumb">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>
   
<div class="row">
<div class="col-md-8">

<?php 
	query_posts('posts_per_page &cat=-23');
	while(have_posts()) : the_post();
?>

<div id="containercmn">

	<h2><a href="<?php the_permalink();?>" ><?php the_title(); ?> </a> </h2>
	<p><?php the_excerpt(); ?> </p>

</div>
<hr>

<?php
	endwhile; wp_reset_query(); 
?>
</div>

<div class="col-md-4 jumbotron">
<?php get_sidebar(); ?>
</div>

</div>

<?php get_footer(); ?>
