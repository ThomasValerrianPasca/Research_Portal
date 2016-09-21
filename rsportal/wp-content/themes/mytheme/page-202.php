<?php
get_header();
?>
  <div class="breadcrumb navbar" id="breadcrumb">
<input type="button" class="btn btn-primary" onClick="location.href=''" value='LA Dept. Homepage'>
<button class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">People</button>
<input type="button" class="btn btn-primary" onClick="location.href='/rsportal/category/liberalarts/'" value='LA Blog'>
</div>

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    	<div class="jumbotron">
    		<h3> People at Dept. of Liberal Arts, IIT Hyderabad </h3>
      <?php  $userscse = get_users(array('meta_key' => 'department' , 'meta_value' => 'la')); 

	foreach ( $userscse as $user ) {
		$curauth = get_userdata($user->ID);
        $html .= get_listing($curauth);
}

echo $html;

function get_listing($curauth) {  
    $concat = wpu_concat();
    $link = site_url()."/departments/people/" . $concat . "uid=";
    $link .=$curauth->display_name;

 $html .= "<div class=\"wpu-id\"><a href=\"$link\" title=\"$curauth->display_name\">$curauth->first_name</a></div>\n";

return $html;
}
?>
		</div>
    </div>
  </div>
</div>

<?php
$user_query = new WP_User_Query( array( 'meta_key' => 'department', 'meta_value' => 'mech' ) );

query_posts('p=238');
if(have_posts()) :
  while(have_posts()) :
    the_post();
    ?>
<!--
<div class="jumbotron" >
 <img src="http://www.gly.uga.edu/railsback/VFT/BeaverlandsPassFaultImage04.jpg">
</div>
-->
<div class="jumbotron thumbnail" id="containercse1" >
<!--
 <img src="http://i1166.photobucket.com/albums/q620/rohithreddy95/deptgroup_resh_zps9454d408.jpg~original"> -->
<?php

if( function_exists('FA_display_slider') ){
    FA_display_slider(441);
}

?>
</div>

<div class="row">
        <div class="col-md-9" id="containercse2">
	<h2><a href="<?php the_permalink(); ?>"><?php the_title();?> </a> </h2>
	<?php
	$homepage = get_post(238);
	$content = nl2br($homepage->post_content);
	?>
	<p><?php echo $content; ?> </p>
	<hr>
	</div>
	 <div class="col-md-3">

	         <?php
		 if( function_exists('FA_display_slider') ){
		     FA_display_slider(858);
		     }
		     ?>

		     </div>
</div>



<?php
  endwhile;

else :
  ?><li>No posts.</li><?php
endif;
wp_reset_query();
?>


<?php
get_footer();
?>
