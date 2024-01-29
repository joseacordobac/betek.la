<?php 

// Theme support
function theme_setup(){
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array(
      'height'      => 100,
      'width'       => 400,
      'flex-height' => true,
      'flex-width'  => true,
    ));
  }
  add_action('after_setup_theme', 'theme_setup');
  
  
  /** Register menus */
  if (!function_exists('register_new_menu')) :
      function register_new_menu(){
        register_nav_menu('nav-main', __('Menu principal'));
        register_nav_menu('nav-footer', __('Menu footer'));
        register_nav_menu('nav-legal', __('Menu legal'));
      }
      add_action('after_setup_theme', 'register_new_menu');
    
  endif;
  