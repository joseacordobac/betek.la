<?php 
define("PATH_TEMPLATES", trailingslashit( get_stylesheet_directory_uri() ).'templates/');
include_once 'custom-woo/custom-woo.php';

function register_templates_custom() {

  $list_nameSpaces_register = array(
    'home',
    'conocenos',
    'formulario',
    'thank-you',
    'entrenate',
    'single-programs',
    'empresas',
    'single-product',
    'woo-card',
    'productos',
  );

  foreach($list_nameSpaces_register as $key => $value) {
    u_register_styles($value, PATH_TEMPLATES); 
  }
} 

add_action('wp_enqueue_scripts', 'register_templates_custom');

