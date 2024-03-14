<?php

add_action( 'wp_enqueue_scripts', function() {

	wp_enqueue_style( 'reset', get_template_directory_uri() . '/assets/css/reset.css');
	wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/css/slick.css');
	wp_enqueue_style( 'fontawesome', 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css');
	wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css');

	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js');

	wp_enqueue_script( 'jquery' );
	wp_enqueue_script('slick', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), 'null', true);
	wp_enqueue_script('wow', get_template_directory_uri() . '/assets/js/wow.min.js', array('jquery'), 'null', true);
	wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), 'null', true);
});


add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');

add_filter( 'upload_mimes', 'svg_upload_allow' );

# Добавляет SVG в список разрешенных для загрузки файлов.
function svg_upload_allow( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';

	return $mimes;
}

?>