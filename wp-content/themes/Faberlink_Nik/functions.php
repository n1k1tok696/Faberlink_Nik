<?php
add_action('wp_enqueue_scripts', 'load_css');
add_action('wp_footer', 'load_js');
add_action('after_setup_theme', 'myMenu');

function load_css()
{
  wp_enqueue_style('style', get_stylesheet_uri());
  wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css');
}

function load_js()
{
  wp_register_script('myjs', get_template_directory_uri() . '/assets/js/main.js');
  wp_enqueue_script('myjs');
}
function myMenu()
{
  register_nav_menu('top', 'Top menu');
}


// //Theme Options

// add_theme_support('menus');


// //menus

// register_nav_menus(

//   array(

//     'top-menu' => 'Top Menu Location',
//     'mobile-menu' => 'Mobile Menu Location',
//   )
// );