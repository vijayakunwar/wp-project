

<?php 
//to get Appearance > Menus sublisting in admin dashboard
add_theme_support('menus');


//to get Menu Setting > Display location  checkbox with menu id : header-menu ; name : Primary Header Menu
//in Appearance > Menus > Edit menu tab > Settings
function register_my_menus() {
    register_nav_menus(
        array(
            'header-menu' => 'Primary Header Menu'   // Assigned menu : Menu 1 in Manage Location tab
           // 'footer-menu' => 'Footer Menu' 
        )
    );
}    
add_action( 'init', 'register_my_menus' );