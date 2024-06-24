<?php 

/**
 * Organism: Category Products
 * 
 * @since 1.0.0
 */

$custom_class = isset($args['custom_class']) ? $args['custom_class'] : null;

wp_enqueue_style('o-cat-products');

?>

<div class="o-cat-products <?php echo esc_attr($custom_class); ?>">
    <?php 
      $product_categories = get_terms( 'product_cat', array(
        'orderby'    => 'name',
        'order'      => 'ASC',
         'parent'     => 0,
        'hide_empty' => true,
      ) );

      if ( ! empty( $product_categories ) && ! is_wp_error( $product_categories ) ) {
        foreach ( $product_categories as $category ) {
          $category_name = $category->name;
          if( $category_name !== 'Sin categorizar' ){
            get_template_part('/molecules/m-card-cat/m-card-cat', null, array(
              'category' => $category,
              'custom_class' => '',
              )
            );
          };
        }
      }
    ?>
</div>
