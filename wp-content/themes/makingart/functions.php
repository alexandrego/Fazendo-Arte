<?php
require_once(get_template_directory() . '/inc/class-nav-bootstrap-walker.php');

add_action('after_setup_theme', 'fazendo_arte_setup');
function fazendo_arte_setup(){
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  // add_theme_support( 'post-thumbnails', array( 'post' ) );          // Posts only
  // add_theme_support( 'post-thumbnails', array( 'page' ) );          // Pages only
  // add_theme_support( 'post-thumbnails', array( 'post', 'movie' ) ); // Posts and Movies
  
  // add_theme_support( 'woocommerce' );
  add_theme_support( 'wc-product-gallery-zoom' );
  add_theme_support( 'wc-product-gallery-lightbox' );
  add_theme_support( 'wc-product-gallery-slider' );
  register_nav_menus(
    array(
      'primary' => 'Primary'
    )
  );
}

add_action('wp_enqueue_scripts', 'fazendo_arte_scripts');
function fazendo_arte_scripts(){
  wp_enqueue_style('fazendo-arte-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');

  wp_enqueue_style('fazendo-arte-style', get_template_directory_uri() . '/style.css');

  wp_enqueue_style( 'dashicons' );

  wp_enqueue_script('fazendo-arte-first-page', get_template_directory_uri() . '/assets/js/firstPage.js', '1.0', true);

  wp_enqueue_script('fazendo-arte-efeitos-load', get_template_directory_uri() . '/assets/js/efeitosLoad.js', '1.0', true);

  wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array('jquery'), '1', true);

  wp_enqueue_script('fazendo-arte-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('popper'), '1.0', true);
}

add_action('widgets_init', 'fazendo_arte_sidebars');
function fazendo_arte_sidebars(){
  register_sidebar(
    array(
      'id' => 'primary-sidebar',
      'name' => 'Primary Sidebar',
      'description' => 'Sidebar that appears across the entire website',
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget' => '</div>',
      'before_title' => '<h3 class="widget-title">',
      'after_title' => '</h3>'
    )
  );
  register_sidebar(
    array(
      'id' => 'footer-1',
      'name' => 'Footer Left',
      'description' => 'Widget that appears on the left of the footer',
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget' => '</div>',
      'before_title' => '<h3 class="widget-title">',
      'after_title' => '</h3>'
    )
  );
  register_sidebar(
    array(
      'id' => 'footer-2',
      'name' => 'Footer Center',
      'description' => 'Widget that appears on the center of the footer',
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget' => '</div>',
      'before_title' => '<h3 class="widget-title">',
      'after_title' => '</h3>'
    )
  );
  register_sidebar(
    array(
      'id' => 'footer-3',
      'name' => 'Footer Right',
      'description' => 'Widget that appears on the right of the footer',
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget' => '</div>',
      'before_title' => '<h3 class="widget-title">',
      'after_title' => '</h3>'
    )
  );
}