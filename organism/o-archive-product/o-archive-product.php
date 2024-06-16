<?php

  /**
   * Organism: Archive Product
   */

wp_enqueue_style('o-archive-product');
if (class_exists('WooCommerce')): 
  $filterd = isset($_GET['type']) && $_GET['type'] !== 'Todos' ? $_GET['type'] : false;

  $product_categories = get_terms( 'product_cat', array(
    'orderby'    => 'name',
    'order'      => 'ASC',
    'hide_empty' => false,
  ) );
?>

  <div class="o-archive-product">
    <div class="o-archive-product__tabs">
      <form action="" class="o-archive-producto__list">
        <input type="submit" value="Todos" class="o-archive-producto__options <?php echo $filterd == false ? 'o-archive-producto__options--active' : ''; ?>" name="type">
        <?php  if ( !empty($product_categories) && !is_wp_error($product_categories) ) { 

          foreach($product_categories as $key => $category) {?>
            <input type="submit" value="<?php echo $category->name; ?>" class="o-archive-producto__options <?php echo $filterd == $category->name ? 'o-archive-producto__options--active' : ''; ?>" name="type">
        <?php  } 

        } ?>
      </form>
    </div>
    <div class="o-archive-product__body">
      <div class="o-archive-product__content">
            <?php 
                $args = array(
                    'post_type' => 'product',
                    'posts_per_page' => -1,
                    'order' => 'ASC',
                    'orderby' => 'date',
                    'post_status' => 'publish',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'product_cat',
                            'field' => 'name',
                            'terms' => $filterd
                        )
                    )
                );

                if ($filterd == false) {
                    unset($args['tax_query']);
                }

                $query = new WP_Query($args);
                
                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();
                        get_template_part('/molecules/m-card-product/m-card-product');
                    endwhile;
                endif;
                wp_reset_postdata();

            ?>
        </div>
    </div>
  </div>


<?php endif; ?>