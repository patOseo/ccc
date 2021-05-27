<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

	// Get the theme data
	$the_theme = wp_get_theme();
    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

function add_child_theme_textdomain() {
    load_child_theme_textdomain( 'understrap-child', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'add_child_theme_textdomain' );

// Add wide support
add_theme_support( 'align-wide' );

// inc Overwrites
require_once('inc/widgets.php');

// Search bar
add_filter('wp_nav_menu_items','add_search_box_to_menu', 10, 2);
function add_search_box_to_menu( $items, $args ) {
    if( $args->theme_location == 'primary' )
        return $items.'<li class="menu-item nav-item nav-search-icon dropdown menu-item-9999 menu-item-has-children"><a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle nav-link" id="menu-item-dropdown-9999"><i class="fa fa-search"></i></a><ul class="dropdown-menu" aria-labelledby="menu-item-dropdown-9999" role="menu"><li class="menu-item nav-item"><form action="#" id="searchform" method="get"><input type="text" name="s" id="s" class="form-control" placeholder="Search"><button type="submit"><i class="fa fa-search"></i></button></form></li></ul></li>';
 
    return $items;
}


// Custom functions
require_once('functions/image-sizes.php');
require_once('functions/colors.php');
require_once('functions/widgets.php');
require_once('functions/acf.php');
require_once('functions/acf-blocks.php');
require_once('functions/testimonials.php');
require_once('functions/gforms.php');