<?php 

/** Register all custom post type */
require_once 'cpt-constructor.php';
require_once 'tax-constructor.php';

/** Create CPT **/
// new CustomPostType(name, single name, related taxonomies, dash icon, type, register name, 'show in menu', has archive, 'rute name )
new CustomPostType('Programas', 'programas', array('category'), 'laptop', 'post', 'programas', false );
new CustomPostType('Eventos y recursos', 'events', array('category'), 'calendar-alt', 'post', 'events', false );

/** Taxonomies **/
// new CustomTaxonomy(name, herachical(boolean), rewrite, register name, acpt to show);


