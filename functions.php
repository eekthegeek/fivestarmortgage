<?php
add_filter( 'gform_progressbar_start_at_zero', '__return_true' );
/**
 * For more info: https://developer.wordpress.org/themes/basics/theme-functions/
 *
 */

// Theme support options
require_once(get_template_directory().'/functions/theme-support.php');

// WP Head and other cleanup functions
require_once(get_template_directory().'/functions/cleanup.php');

// Register scripts and stylesheets
require_once(get_template_directory().'/functions/enqueue-scripts.php');

// Register custom menus and menu walkers
require_once(get_template_directory().'/functions/menu.php');

// Register sidebars/widget areas
require_once(get_template_directory().'/functions/sidebar.php');

// Makes WordPress comments suck less
require_once(get_template_directory().'/functions/comments.php');

// Replace 'older/newer' post links with numbered navigation
require_once(get_template_directory().'/functions/page-navi.php');

// Adds support for multiple languages
require_once(get_template_directory().'/functions/translation/translation.php');

// Adds site styles to the WordPress editor
// require_once(get_template_directory().'/functions/editor-styles.php');

// Remove Emoji Support
// require_once(get_template_directory().'/functions/disable-emoji.php');

// Related post function - no need to rely on plugins
// require_once(get_template_directory().'/functions/related-posts.php');

// Use this as a template for custom post types
// require_once(get_template_directory().'/functions/custom-post-type.php');

// Customize the WordPress login menu
// require_once(get_template_directory().'/functions/login.php');

// Customize the WordPress admin
 //require_once(get_template_directory().'/functions/admin.php');
//enqueues our external font awesome stylesheet

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Website Settings',
  ));

}


function enqueue_our_required_stylesheets(){
	wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
	wp_enqueue_style('custom-style', get_template_directory_uri() . '/style.css');
}

add_action('wp_enqueue_scripts','enqueue_our_required_stylesheets', 11);

// Enable shortcodes in text widgets
add_filter('widget_text','do_shortcode');

//* Enqueue Google Font Scripts  *//
add_action( 'wp_enqueue_scripts', 'minimum_enqueue_scripts' );
function minimum_enqueue_scripts() {


  wp_enqueue_style( 'minimum-google-fonts2', '//fonts.googleapis.com/css?family=Montserrat', array(), null );
	wp_enqueue_style( 'minimum-google-fonts3', '//fonts.googleapis.com/css?family=Lato', array(), null );
	wp_enqueue_style( 'minimum-google-fonts4', '//fonts.googleapis.com/css?family=Roboto', array(), null );
	wp_enqueue_style( 'minimum-google-fonts5', '//fonts.googleapis.com/css?family=Raleway', array(), null );
}
/**
 * Add Subtitle in admin post
 *
 * @param WP_Post $post Post object.
 *
 * @return void
 */
 remove_filter('widget_text_content', 'wpautop');


 //* Google Maps for Contact Page *//
 function cg_google_maps_scripts() {
 	wp_enqueue_script( 'gmaps', get_stylesheet_directory_uri() . '/assets/scripts/googlemaps.js', array( 'gmapsapi' ), '1.0.0', true );
 	wp_enqueue_script( 'gmapsapi', 'http://maps.googleapis.com/maps/api/js?key=AIzaSyB-MD5wCSt9CAk2MpkyHhPk1jgixILYgOY', array(), '1.0.2', true );

 }
 add_action( 'wp_enqueue_scripts', 'cg_google_maps_scripts' );




function unprefix_subtitle( $post ) {

	if ( ! in_array( $post->post_type, [ 'post', 'page' ], true ) ) {
		return;
	}

	// The subtitle field.
	$_stitle = sanitize_text_field( get_post_meta( $post->ID, '_unprefix_subtitle', true ) );

	echo '<label for="unprefix_subtitle">' . __( 'Sub Title' ) . '</label>';
	echo '<input type="text" name="unprefix_subtitle" id="unprefix_subtitle" value="' .  $_stitle . '" size="30" spellcheck="true" autocomplete="off" />';
}
add_image_size( 'banner-page', 2000, 350 ); // Unlimited Height Mode
/**
 * Save Subtitle
 *
 * @param int     $post_ID Post ID.
 * @param WP_Post $post    Post object.
 * @param bool    $update  Whether this is an existing post being updated or not.
 *
 * @return void
 */
