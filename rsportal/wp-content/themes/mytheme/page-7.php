<?php get_header(); ?>
<!--   <div class="breadcrumbs breadcrumb"> -->
    <?php// if(function_exists('bcn_display'))
   // {
    
       // bcn_display();
   // }
   ?>
<!-- </div>-->

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
   
	<div class='row'>
		<div class="col-md-8 container">

   <?php
   $args = array('title_li'=> '<h2>'.__('Departments') . '</h2>',
   	//	'include' => 7,
	//	'depth' => -1,
		'child_of' => 7,

   		'exclude' => 285
   );
wp_list_pages($args); ?>

	</div>
<!--	<div class="col-md-4 container">
		<h2>Useful Links</h2>
		<ul>
			<li><a href="http://www.iith.ac.in">IIT Hyderabad</a></li>
			<li>Page 2</li>
			<li>Page 3</li>
			<li>Page 4</li>
		</ul>

	</div> -->
</div>

    <?php the_content(); ?>
  
<?php endwhile; else: ?>
    <p><?php _e('Sorry, this page does not exist.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
