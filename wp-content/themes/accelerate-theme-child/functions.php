<?php
/**
* Accelerate Marketing Child functions and definitions
*
* @link http://codex.wordpress.org/Theme_Development
* @link http://codex.wordpress.org/Child_Themes
*
* @package WordPress
* @subpackage Accelerate Marketing
* @since Accelerate Marketing 2.0
*/

// Enqueue scripts and styles
function accelerate_child_scripts() {
	wp_enqueue_style( 'accelerate-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'accelerate-style' ));
}
add_action( 'wp_enqueue_scripts', 'accelerate_child_scripts' );

// Create a Custom Post Type
function create_custom_post_types() {
    register_post_type( 'case_studies',
        array(
            'labels' => array(
                'name' => __( 'Case Studies' ),
                'singular_name' => __( 'Case Study' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array( 'slug' => 'case-studies' ),
        )
    );
}
add_action( 'init', 'create_custom_post_types' );

// Create a Custom Page Type
function create_services_offered() {
    register_post_type( 'services_offered',
        array(
            'labels' => array(
                'name' => __( 'Services Offered' ),
                'singular_name' => __( 'Services Offered' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array( 'slug' => 'services' ),
        )
    );
}
add_action( 'init', 'create_services_offered' );

// Add a filter for the contact page

add_filter( 'body_class','accelerate_child_body_classes' );
function accelerate_child_body_classes( $classes ) {


  if (is_page('contact') ) {
    $classes[] = 'contact';

  }

    
    return $classes;
     
}

// Add a filter for the about page
        