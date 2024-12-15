<?php 

//to enque scripts and styles
function mytheme_enqueue_styles() {

    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style( 'bootstrap');
    wp_register_style('main_css', get_template_directory_uri() .'/css/main.css',array(), false,'all');
    wp_enqueue_style( 'main_css');
    
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_styles' );




//to get Appearance > Menus sublisting in admin dashboard
add_theme_support('menus');


//to get Menu Setting > Display location  checkbox with menu id : header-menu ; name : Primary Header Menu
//in Appearance > Menus > Edit menu tab > Settings
function register_my_menus() {
    register_nav_menus(
        array(
            'header-menu' => 'Primary Header Menu'   // Assigned menu : Menu 1 in Manage Location tab admin dashboard
           // 'footer-menu' => 'Footer Menu' 
        )
    );
}    
add_action( 'init', 'register_my_menus' );