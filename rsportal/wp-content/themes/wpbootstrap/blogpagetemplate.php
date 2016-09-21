<?php /* Template Name: blogpagetemplate */ ?>


<?php get_header(); ?>
   



    <div id="blogdiv" class="container">

      <div class="blog-header">
        <h1 class="blog-title">News and Publications</h1>
        <p class="lead blog-description">Updates, news & articles on research and development at IIT Hyderabad</p>
      </div>

      <div class="row">

        <div class="col-sm-8 blog-main">



<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>




<div class="blog-post">
            
            <h2 class="blog-post-title"> <?php the_title(); ?></h2>
            <p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p>
            <?php the_content(); ?>
            
 </div><!-- /.blog-post -->


 	


<?php endwhile; else: ?>
    <p><?php _e('Sorry, this page does not exist.'); ?></p>
<?php endif; ?>


          
         
          <ul class="pager">
            <li><a href="#">Previous</a></li>
            <li><a href="#">Next</a></li>
          </ul>

</div>

<?php get_footer(); ?>