<?php 

// admin
include_once "admin/admin-register.php";

//Atomic style
include_once "w-globals/g-register.php"; 
include_once "atoms/a-register.php";
include_once "organism/o-register.php";
include_once "molecules/m-register.php";
include_once "templates/t-register.php";

//Utilities
include_once "utilities/u-register-styles.php";

// add_action('template_redirect', 'redirect_carrito_to_finalizar_compra');
function redirect_carrito_to_finalizar_compra() {
    if (is_page('carrito')) {
        wp_redirect(home_url('/finalizar-compra/'));
        exit();
    }
}
