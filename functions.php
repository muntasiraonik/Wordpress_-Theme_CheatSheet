<?php
if ( ! defined( 'ABSPATH' ) ) {
        exit; // Exit if accessed directly
}

# Required
function Theme_theme_support(){
    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-logo');
    add_theme_support( 'post-thumbnails');
    add_theme_support( 'automatic-feed-links' );
	
}
add_action('after_setup_theme', 'Theme_theme_support');


# Menu Automate

function Theme_menus(){
    $locations = array(
        'primary' => "Header Menu",
        'footer'  => "Footer Menu"
    );
    register_nav_menus($locations);
}

add_action('init', 'Theme_menus');

# CSS

function Theme_styles(){
    wp_enqueue_style('main-css', get_template_directory_uri() . "/style.css",array(),rand(111,9999),'all');

    # If we have multiple Css file
    wp_enqueue_style('{FileName}', get_template_directory_uri() . "/{File Address}",array(),rand(111,9999),'all');
}
add_action( 'wp_enqueue_scripts', 'Theme_styles');

# JS

function Theme_scripts(){
    wp_enqueue_script('main-js',get_template_directory_uri() ."/resources/js/main.js",array(),rand(111,9999),true);

    # If we have multiple Js file
    wp_enqueue_script('{FileName}',get_template_directory_uri() ."{File Address}",array(),rand(111,9999),true);

}

add_action( 'wp_enqueue_scripts', 'Theme_scripts');



?>