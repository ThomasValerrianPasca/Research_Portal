<?php
add_action( 'after_setup_theme', 'mytheme_setup' );
function mytheme_setup()
{
load_theme_textdomain( 'mytheme', get_template_directory() . '/languages' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );
global $content_width;
if ( ! isset( $content_width ) ) $content_width = 640;
register_nav_menus(
array( 'main-menu' => __( 'Main Menu', 'mytheme' ) )
);
}
add_action( 'wp_enqueue_scripts', 'mytheme_load_scripts' );

function mytheme_load_scripts()
{
wp_enqueue_script( 'jquery' );
}
add_action( 'comment_form_before', 'mytheme_enqueue_comment_reply_script' );
function mytheme_enqueue_comment_reply_script()
{
if ( get_option( 'thread_comments' ) ) { wp_enqueue_script( 'comment-reply' ); }
}
add_filter( 'the_title', 'mytheme_title' );
function mytheme_title( $title ) {
if ( $title == '' ) {
return '&rarr;';
} else {
return $title;
}
}
add_filter( 'wp_title', 'mytheme_filter_wp_title' );
function mytheme_filter_wp_title( $title )
{
return $title . esc_attr( get_bloginfo( 'name' ) );
}
add_action( 'widgets_init', 'mytheme_widgets_init' );
function mytheme_widgets_init()
{
register_sidebar( array (
'name' => 'Footer Sidebar 1',
'id' => 'footer-sidebar-1',
'description' => 'Appears in the footer area',
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => '</aside>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array (
'name' => __( 'Sidebar Widget Area', 'mytheme' ),
'id' => 'primary-widget-area',
'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
'after_widget' => "</li>",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
}
function mytheme_custom_pings( $comment )
{
$GLOBALS['comment'] = $comment;
?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
<?php 
}
add_filter( 'get_comments_number', 'mytheme_comments_number' );
function mytheme_comments_number( $count )
{
if ( !is_admin() ) {
global $id;
$comments_by_type = &separate_comments( get_comments( 'status=approve&post_id=' . $id ) );
return count( $comments_by_type['comment'] );
} else {
return $count;
}
}

/* redirect users to front page after login */
function redirect_to_front_page() {
global $redirect_to;
if (!isset($_GET['redirect_to'])) {
$redirect_to = get_option('siteurl').'/';
}
}
add_action('login_form', 'redirect_to_front_page');
add_action('wpmem_update_redirect','redirect_to_front_page');


add_action('wp_logout','go_home');
function go_home(){
  wp_redirect( home_url().'/' );
  exit();
}

add_action('after_setup_theme', 'remove_admin_bar');

function remove_admin_bar() {
if ( (!current_user_can('administrator') && !is_admin()) && !current_user_can('cse')  && !current_user_can('biomed')  && !current_user_can('biotech') && !current_user_can('chemical') && !current_user_can('chemistry') && !current_user_can('civil') && !current_user_can('electrical') && !current_user_can('admin') && !current_user_can('liberal-arts')  && !current_user_can('material-science') && !current_user_can('maths') && !current_user_can('mechanical') && !current_user_can('physics')       )  {
  show_admin_bar(false);
}
}

/*function restrict_admin()
{
	if ( ! current_user_can( 'manage_options' ) ) {
                wp_redirect( site_url() );
                exit;
	}
}
add_action( 'admin_init', 'restrict_admin', 1 );
*/
add_filter( 'mpp_avatar_override', '__return_true' );
update_usermeta();

/*add_filter( 'bbp_verify_nonce_request_url', 'my_bbp_verify_nonce_request_url', 999, 1 );
function my_bbp_verify_nonce_request_url( $requested_url )
${
    return 'http://localhost:81' . $_SERVER['REQUEST_URI'];
}*/

add_filter( 'bbp_verify_nonce_request_url', 'my_bbp_verify_nonce_request_url', 999, 1 );
function my_bbp_verify_nonce_request_url( $requested_url )
{
    return 'site_url()/' . $_SERVER['REQUEST_URI'];
}
