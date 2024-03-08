<?php 

define("PATH_ORGANISM", trailingslashit( get_stylesheet_directory_uri() ).'organism/');

function enque_styles_organism() {
  u_register_styles('o-header', PATH_ORGANISM); //header
  u_register_styles('o-footer', PATH_ORGANISM); //footer
  u_register_styles('o-you-get', PATH_ORGANISM); //what do you get 
  u_register_styles('o-programs', PATH_ORGANISM); //Programs
  u_register_styles('o-get-talent', PATH_ORGANISM); //get talent
  u_register_styles('o-impact', PATH_ORGANISM); //impacto 
  u_register_styles('o-testimonials', PATH_ORGANISM); //testimonios
  u_register_styles('o-iprogram', PATH_ORGANISM); //iProgram
  u_register_styles('o-our-start', PATH_ORGANISM); //our start
  u_register_styles('o-team', PATH_ORGANISM); //Equipo
}

add_action('wp_enqueue_scripts', 'enque_styles_organism');