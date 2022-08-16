<?php
add_action('wp_enqueue_scripts', function () {
	wp_enqueue_style( 'slick', get_template_directory_uri(). '/assets/css/slick.css' );
	wp_enqueue_style( 'reset', get_template_directory_uri(). '/assets/css/reset.css' );
	 wp_enqueue_style( 'jquery', get_template_directory_uri(). '/assets/css/jquery.fancybox.css' );
	wp_enqueue_style( 'style', get_template_directory_uri(). '/assets/css/style.css' );

	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js");

	wp_enqueue_script( 'jquery' );
	 wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery.fancybox.min.js', array('jquery'), 'null', true);
	 wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array('jquery'), 'null', true);
	 wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), 'null', true);
	 wp_enqueue_script('slick', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), 'null', true);
});

add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo' );

add_filter( 'upload_mimes', 'upload_allow_types' );
function upload_allow_types( $mimes ) {
	// allow new types
	$mimes['svg']  = 'image/svg+xml';
	$mimes['doc']  = 'application/msword'; 
	$mimes['woff'] = 'font/woff';
	$mimes['psd']  = 'image/vnd.adobe.photoshop'; 
	$mimes['djv']  = 'image/vnd.djvu';
	$mimes['djvu'] = 'image/vnd.djvu';

	// disable existing
	// unset( $mimes['mp4a'] );

	return $mimes;
}

?>

