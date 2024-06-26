<?php
/**
 * Thahiti functions and definitions
 *
*/


add_action( 'wp_enqueue_scripts', function() {

	wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/css/slick.css');
	wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css');
	wp_enqueue_style( 'fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css');
	wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css');

	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js');

	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js');
	wp_enqueue_script('slick', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), 'null', true);
	wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), 'null', true);
});

add_action('after_setup_theme', 'tahiti_setup');

add_filter('show_admin_bar', '__return_false');

function tahiti_setup() {
	register_nav_menu('menu-header', 'Menu header');
	register_nav_menu('menu-footer', 'Menu footer'); 
	register_nav_menu('menu-footer-col-left', 'Menu footer column left');
	register_nav_menu('menu-footer-col-center', 'Menu footer column center');
	register_nav_menu('menu-footer-col-right', 'Menu footer column right');
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo' );
	add_theme_support( 'custom-background' );
}

add_filter( 'upload_mimes', 'svg_upload_allow' );

add_action( 'init', 'islands_register_types' );

function islands_register_types(){

    register_post_type( 'islands', array(
        'labels'                 => array( 
            'name'               => 'Islands', 
            'singular_name'      => 'Island', 
            'add_new'            => 'Add island', 
            'add_new_item'       => 'Add island', 
            'edit_item'          => 'Add island', 
            'new_item'           => 'New island', 
            'view_item'          => 'View island', 
            'not_found'          => 'Not Found',
            'not_found_in_trash' => 'Not found in trash', 
            'parent_item_colon'  => '', 
            'menu_name'          => 'Islands', 
        ),
        'public'              => true,
        'show_ui'             => true,                           
        'menu_position'       => 20,
        'menu_icon'           => 'dashicons-palmtree', 
        'hierarchical'        => false,
        'supports'            => ['title','excerpt'],
        'has_archive'         => false,
        'publicly_queryable'  => false,
    ));

}

add_theme_support(
    'html5',
    array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    )
);

function svg_upload_allow( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';

	return $mimes;
}


require_once get_template_directory() . '/inc/wp_nav_bootstrap.php';

?>