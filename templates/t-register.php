<?php 
define("PATH_TEMPLATES", trailingslashit( get_stylesheet_directory_uri() ).'templates/');

function register_templates_custom() {
  u_register_styles('home', PATH_TEMPLATES); 
  u_register_styles('conocenos', PATH_TEMPLATES); 
  u_register_styles('formulario', PATH_TEMPLATES);
  u_register_styles('thank-you', PATH_TEMPLATES); 

} 

add_action('wp_enqueue_scripts', 'register_templates_custom');