<?php
add_action('wp_enqueue_scripts', 'load_css');
add_action('wp_footer', 'load_js');
add_action('after_setup_theme', 'myMenu');
add_action( 'widgets_init', 'register_my_widgets' );

function register_my_widgets(){
	register_sidebar( array(
		'name'          => 'Sidebar',
		'id'            => "sidebar",
		'description'   => 'some sidebar',
		'class'         => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => "</div>\n",
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => "</h2>\n",
	) );
}

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
  add_theme_support( 'title-tag' );
  add_theme_support( 'post-thumbnails', array( 'post' ) );
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