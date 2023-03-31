<?php

add_theme_support('post-thumbnails');
add_theme_support('menus');

function blogvoyage_register_menu()
{
    register_nav_menus([
        "menu_light" => "Menu Light"
    ]);
}
add_action('init', 'blogvoyage_register_menu');


function blogvoyage_enqueue_scripts()
{
    wp_enqueue_style('blogvoyage', get_template_directory_uri() .'/assets/css/index.css');
    //on charge du CSS et JS
}

add_action('wp_enqueue_scripts', 'blogvoyage_enqueue_scripts');