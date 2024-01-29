<?php 
define("PATH_TEMPLATES", trailingslashit( get_stylesheet_directory_uri() ).'templates/');

function register_templates_custom() {
  u_register_styles('home', PATH_TEMPLATES); 
} 

add_action('wp_enqueue_scripts', 'register_templates_custom');