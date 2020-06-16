<?php
function material_files(){
    wp_enqueue_style('md_min_css', get_stylesheet_directory_uri().'/assets/css/min.css', null, microtime());
    wp_enqueue_style('md_fonts', '//fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=es', null, microtime());
    wp_enqueue_style('md_icons', '//fonts.googleapis.com/icon?family=Material+Icons', null, microtime());
    wp_enqueue_style('md_index_css', get_stylesheet_directory_uri().'/assets/css/index.css', null, microtime());
    
    wp_enqueue_script('md_min_js',get_theme_file_uri('/assets/js/min.js'),[], microtime(), true);
    wp_enqueue_script('md_index_js',get_theme_file_uri('/assets/js/index.js'),[], microtime(), true);
    
}
add_action('wp_enqueue_scripts', 'material_files');

function agregar_theme_support(){
    
// header
add_theme_support('custom-header',  array(
	'default-image'          => get_theme_file_uri('/assets/images/coffee.jpg'),
	'width'                  => 584,
	'height'                 => 384,
	'flex-height'            => true,
	'flex-width'             => true,
	'uploads'                => true,
	'random-default'         => false,
	'header-text'            => true,
	'default-text-color'     => '',
	'wp-head-callback'       => '',
	'admin-head-callback'    => '',
	'admin-preview-callback' => '',
));

// background
add_theme_support( 'custom-background',array(
    'default-image' => get_template_directory_uri() . '/assets/images/bg_2880.jpg',
    'default-preset'         => 'fill', // 'default', 'fill', 'fit', 'repeat', 'custom'
    'default-position-x'     => 'center',    // 'left', 'center', 'right'
    'default-position-y'     => 'center',     // 'top', 'center', 'bottom'
    'default-size'           => 'cover',    // 'auto', 'contain', 'cover'
    'default-repeat'         => 'no-repeat',  // 'repeat-x', 'repeat-y', 'repeat', 'no-repeat'
    'default-attachment'     => 'fixed',  // 'scroll', 'fixed'
    'default-color'          => '',
    'wp-head-callback'       => '_custom_background_cb',
    'admin-head-callback'    => '',
    'admin-preview-callback' => '',
) );

// logo
add_theme_support('custom-logo', array(
	'height'      => 128,
	'width'       => 128,
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
));

// thumbs
add_theme_support( 'post-thumbnails' );

// title
add_theme_support('title-tag');

}
add_action('after_setup_theme', 'agregar_theme_support');