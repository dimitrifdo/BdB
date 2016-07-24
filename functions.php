<?php
// ADDING STYLE SHEETS VIA WP_HEAD (HOOK)
function conc_scripts() {
	
	wp_enqueue_style('style.css', get_stylesheet_uri() );
	wp_enqueue_script( 'blanc.js', get_template_directory_uri() . '/js/blanc.js', array(), '1.11.3', false);
	wp_enqueue_script( 'jquery.parallax.min.js', get_template_directory_uri() . '/js/jquery.parallax.min.js', array(), '1.0.0', false);


}

add_action( 'wp_enqueue_scripts', 'conc_scripts' );

// CREATING THE DYNAMIC MENU

function register_my_menus() {
	register_nav_menu('top-menu', __('Top Menu'));
}
add_action('init', 'register_my_menus');

?>