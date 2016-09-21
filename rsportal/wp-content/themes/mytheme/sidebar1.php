<div class="col-md-4 container jumbotron" id="sidebar">
	<h3>People</h3>
<?php
$blogusers = get_users( array( 'fields' => array( 'display_name' ) ) );
// Array of stdClass objects.
foreach ( $blogusers as $user ) {
	echo '<span>' . esc_html( $user->display_name ) . '<br>'.'</span>';
}
?>
</div>