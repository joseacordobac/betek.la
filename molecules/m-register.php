<?php 


define("PATH_MOLECULES", trailingslashit( get_stylesheet_directory_uri() ).'molecules/');

function enque_custom_molecules() {
  u_register_styles('m-nav', PATH_MOLECULES); //m-nav
  u_register_styles('m-video', PATH_MOLECULES); //m-video
  u_register_styles('m-value', PATH_MOLECULES); //m-value
  u_register_styles('m-card-program', PATH_MOLECULES); //programs
  u_register_styles('m-testimonial', PATH_MOLECULES); //Testimonios
  u_register_styles('m-logo-card', PATH_MOLECULES); //Logos cards
  u_register_styles('m-info', PATH_MOLECULES); //Logos cards
  u_register_styles('m-social', PATH_MOLECULES); //Logos cards
  u_register_styles('m-nav-footer', PATH_MOLECULES); //footer menu
  u_register_styles('m-whatsapp', PATH_MOLECULES); //footer menu
  u_register_styles('m-card-iprogram', PATH_MOLECULES); //programs cards
}

add_action('wp_enqueue_scripts', 'enque_custom_molecules');