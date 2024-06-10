<?php 

define("PATH_ATOMS", trailingslashit( get_stylesheet_directory_uri() ).'atoms/');

function enqueue_custom_atoms() {

  $register_scripts_styles = array(
    'a-logo',
    'a-logo-white',
    'a-btn',
    'a-img',
    'a-titles',
    'a-list',
    'a-numbers',
    'a-social',
    'a-tags',
    'a-btn-buy'
  );

  foreach($register_scripts_styles as $key => $value) {
    u_register_styles($value, PATH_ATOMS);
  }

}

add_action('wp_enqueue_scripts', 'enqueue_custom_atoms');

  function add_product_to_cart_and_redirect() {
    if (isset($_POST['add-to-cart'])) {
      $product_id = intval($_POST['add-to-cart']);
      $quantity = 1;
      $cart_item_key = WC()->cart->add_to_cart($product_id, $quantity);

      if ($cart_item_key) {
        wp_safe_redirect(wc_get_checkout_url());
        exit;
      }
    }
  }
  add_action('template_redirect', 'add_product_to_cart_and_redirect');
