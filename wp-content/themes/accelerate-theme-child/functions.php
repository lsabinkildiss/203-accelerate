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
    wp_enqueue_style( 'accelerate-google-fonts','//fonts.googleapis.com/css?family=Bebas+Neue|Montserrat|Montserrat+Alternates');
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

// Add thumbnails to posts 

add_theme_support( 'post-thumbnails' );

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
            'taxonomies' => array( 'category'),
            'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
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

// Add a Sidebar

function accelerate_theme_child_widget_init() {
    
    register_sidebar( array(
        'name' =>__( 'Homepage sidebar', 'accelerate-theme-child'),
        'id' => 'sidebar-2',
        'description' => __( 'Appears on the static front page template', 'accelerate-theme-child' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
    
}
add_action( 'widgets_init', 'accelerate_theme_child_widget_init' );
        