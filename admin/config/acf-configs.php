<?php

if( function_exists('acf_add_options_page') ) {
    acf_add_options_page();   
	acf_add_options_sub_page(
		array(
			'page_title' => 'informacion contácto',
        	'menu_title' => 'Contacto',
        	'post_id' => 'contacto'
		)
	);
	acf_add_options_sub_page(
		array(
			'page_title' => 'Social',
        	'menu_title' => 'Social',
        	'post_id' => 'social'
		)
	);

	acf_add_options_sub_page(
		array(
			'page_title' => 'whatsapp',
        	'menu_title' => 'whatsapp',
        	'post_id' => 'whatsapp'
		)
	);
}