<?php
$depts = array(
 "biomed"  => "Biomedical Engineering",
 "biotech" => "Biotechnology",
 "chemical" => "Chemical Engineering",
 "chemistry" => "Chemistry",
 "civil" => "Civil Engineering",
 "cse" => "Computer Science and Engineering",
 "ee" => "Electrical Engineering",
 "la" => "Liberal Arts",
 "msc" => "Materials Science and Metallurgical Engineering",
 "maths" => "Mathematics",
 "mech"=> "Mechanical and Aerospace Engineering",
 "phy" => "Physics"
 );


?>

<?php get_header(); ?>
   <div class="breadcrumbs breadcrumb">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>

   
	<div class='row'>
		<div class="col-md-6">


			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php the_content() ?>

		</div>
		

		<div class="col-md-6 container" id="sidebar">
			<h3> Preview: </h3>

		<?php
			if((is_user_logged_in()))
			{
				 get_currentuserinfo();
				echo '<b> Name</b>: '. $current_user->user_firstname . ' ' . $current_user->user_lastname. '<br/>';
//				  echo '<b>First name</b>: ' . $current_user->user_firstname . "<br>";
//			      echo '<b>Last name</b>: ' . $current_user->user_lastname . "<br> <br>";
			      
			      echo '<b>Email</b>: ' . $current_user->user_email . "<br>";     
			      echo '<b>Department</b>: ' . $depts[$current_user->department] . "<br>";
echo '<b>Year of joining</b>: ' .$current_user->year . "<br>";
echo '<br>';
echo '<b>Areas of Interest</b>: ' .$current_user->research_work . "<br>";
echo '<b>Supervisor Name</b>:' .$current_user->supervisor ."<br>";
echo '<b>Abstract</b>:' .$current_user->abstract."<br>";
			      echo '<br>';
			      
			   }
?>
		
		
	</div>

	
	
</div>
  
<?php endwhile; else: ?>
    <p><?php _e('Sorry, this page does not exist.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
