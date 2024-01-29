<?php 

define("PATH_ATOMS", trailingslashit( get_stylesheet_directory_uri() ).'atoms/');

function enqueue_custom_atoms() {
  u_register_styles('a-logo', PATH_ATOMS); //Logo
  u_register_styles('a-btn', PATH_ATOMS); //btn
  u_register_styles('a-img', PATH_ATOMS); //btn
  u_register_styles('a-titles', PATH_ATOMS); //Titles
  u_register_styles('a-list', PATH_ATOMS); //List
  u_register_styles('a-numbers', PATH_ATOMS); //Numbers
  u_register_styles('a-social', PATH_ATOMS); //Text
}

add_action('wp_enqueue_scripts', 'enqueue_custom_atoms');