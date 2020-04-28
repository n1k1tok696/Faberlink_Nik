<?php

function load_css()
{

  wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
  wp_register_style('fontawesome', 'https://use.fontawesome.com/releases/v5.9.0/css/all.css', array(), false, 'all');
  wp_register_style('mystyle', get_template_directory_uri() . '/style.css', array(), false, 'all');
  wp_enqueue_style('bootstrap');
  wp_enqueue_style('mystyle');
  wp_enqueue_style('fontawesome');

}
add_action('wp_enqueue_scripts', 'load_css');

function load_js()
{
  wp_enqueue_script('jquery');
  wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, true);
  wp_enqueue_script('bootstrap');

}
add_action('wp_enqueue_scripts', 'load_js');


//Theme Options

add_theme_support('menus');


//menus

register_nav_menus(

  array(

    'top-menu' => 'Top Menu Location',
    'mobile-menu' => 'Mobile Menu Location',
  )
);