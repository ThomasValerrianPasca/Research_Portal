<?php 

function wpbootstrap_scripts_with_jquery()
{
	// Register the script like this for a theme:
	wp_register_script( 'custom-script', get_template_directory_uri() . '/bootstrap/js/bootstrap.js', array( 'jquery' ) );
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'custom-script' );

wp_register_script('carousel', get_template_directory_uri() . 'bootstrap/js/carousel.js');
wp_enqueue_script('carousel');


if( is_page_template( 'blogpagetemplate.php' ) ) {
wp_register_style("blogpagetemplate", get_template_directory_uri() . "bootstrap/css/blog.css", '', '1.0.0');
wp_enqueue_style('blogpagetemplate');
}




}



add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );

if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));

?>