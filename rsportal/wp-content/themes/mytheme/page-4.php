<?php get_header('main'); ?>


<div id="containerhmp" class="col-md-12">
		<?php $home = get_post(32);?>
	    <h2> <?php echo $home->post_title; ?></h2>
		 <p><?php echo $home->post_content; ?></p>
	</div>

<div class="row">
	
	<div class="col-md-8" style="margin-botton:10px" >
	<?php
if( function_exists('FA_display_slider') ){
//    FA_display_slider(199);
	FA_display_slider(612);
}
?>

</div>
	
<div class="col-md-4" id="containerhmp1">
      <h3>News:</h3>
        <?php
if( function_exists('FA_display_slider') ){
    FA_display_slider(166);
}
?>
</div>

<!-- <div class="jumbotron thumbnail " id="containercse1"> -->
<!--<h3>Research at IITH </h3>-->
<!-- <div class="jumbotron thumbnail" id="containerhmp2"> -->

<!-- </div> -->

</div>

<br/>
<div class="col-md-12" id="container1">
	<div class="container-fluid">
	<h3> Doctoral Representative message: </h3>

<p align="justify">IIT Hyderabad Research Scholars portal aims to serve the research 
community by providing a comprehensive collection of research being carried out in science, engineering, design and liberal arts. 
It also acts as a platform for the PhD students to discuss challenging and intriguing questions  and to come up with innovative solutions.
Research Scholars portal also provides many useful and up to date research 
related information like  fellowship notifications, job opportunities in and outside India, 
academia and industry, assistance with common software tools.</p>

	</div>
	
</div>

</div>

<br/>



<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


	


    <?php the_content(); ?>



<?php endwhile; else: ?>
    <p><?php _e('Sorry, this page does not exist.'); ?></p>
<?php endif; ?>

<?php get_footer('main'); ?>
