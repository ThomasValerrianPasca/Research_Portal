<?php get_header(); ?>
<div class="breadcrumbs">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>

<div class="row">

<div class="col-md-8">
<section id="content" role="main">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h2>
    <p><?php the_content(); ?></p>

<?php get_template_part( 'entry' ); ?>
<?php if ( ! post_password_required() ) comments_template( '', true ); ?>
<?php endwhile; endif; ?>
<footer class="footer">
<?php get_template_part( 'nav', 'below-single' ); ?>
</footer>

</section>
</div>

<div class="col-md-4 jumbotron">
<?php get_sidebar(); ?>
</div>

</div>
<?php get_footer(); ?>