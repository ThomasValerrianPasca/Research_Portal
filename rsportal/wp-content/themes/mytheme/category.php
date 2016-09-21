<?php get_header(); ?>
<?php
$depts = array(
 "biomedical"  => "Biomedical Engineering",
 "biotechnology" => "Biotechnology",
 "chemicalengg" => "Chemical Engineering",
 "chemistry" => "Chemistry",
 "civil" => "Civil Engineering",
 "cse" => "Computer Science and Engineering",
 "electrical" => "Electrical Engineering",
 "liberalarts" => "Liberal Arts",
 "materialsc" => "Materials Science and Metallurgical Engineering",
 "maths" => "Mathematics",
 "mechanical"=> "Mechanical and Aerospace Engineering",
 "physics" => "Physics"
);
$dept = $depts[single_cat_title('',false)];
//var_dump($depts);
//echo $dept;
//echo $dept["cse"];
?>

<div class="container"><h1><?php echo $dept;  ?> blog</h1></div>

<div class="col-md-8">
<?php
if(have_posts()) :
	while(have_posts()) :
	    the_post();
	    ?>
	<hr>
	<div id="containercmn">
	<h2><a href="<?php the_permalink(); ?>"><?php the_title();?> </a> </h2>
	<p><?php the_excerpt(); ?> </p>
	</div>
	<hr>
	<?php
	  endwhile;

	else :
	  ?><li>No posts.</li><?php
endif;
?>
</div>

<div class="col-md-4 jumbotron">
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
