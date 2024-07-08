<?php 


add_action('woocommerce_init', 'custom_override_checkout_fields');

function custom_override_checkout_fields() {
    add_filter('woocommerce_default_address_fields', 'custom_woocommerce_default_address_fields');
    add_filter('woocommerce_billing_fields', 'custom_woocommerce_billing_fields');
    add_filter('woocommerce_billing_fields', 'custom_reorder_billing_fields');
}

function custom_woocommerce_default_address_fields($address_fields) {
    if (isset($address_fields['address_1'])) {
        $address_fields['address_1']['label'] = 'Dirección';
    }
    
    if (isset($address_fields['city'])) {
        $address_fields['city']['label'] = 'Ciudad';
    }
    return $address_fields;
}

function custom_woocommerce_billing_fields($billing_fields) {
    if (isset($billing_fields['billing_address_1'])) {
        $billing_fields['billing_address_1']['label'] = 'Dirección';
    }

    if (isset($address_fields['city'])) {
        $address_fields['city']['label'] = 'Ciudad';
    }

    return $billing_fields;
}

function custom_reorder_billing_fields($fields) {
    $fields_ordered = array(
        'billing_country',
        'billing_state',
        'billing_city',
        'billing_address_1',
        'billing_address_2',
        'billing_postcode',
        'billing_phone',
        'billing_email',
    );


    $priority = 30; 
    foreach ($fields_ordered as $field_key) {
        if (isset($fields[$field_key])) {
            $fields[$field_key]['priority'] = $priority;
            $priority += 10; 
        }
    }
    
    var_dump($fields);
    return $fields;
}



