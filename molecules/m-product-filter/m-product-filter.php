<?php 
  /**
   * Molecules: Product Filter
   */
  wp_enqueue_style('m-product-filter');

  $slug_tax = isset($_GET['entrenamiento']) ? $_GET['entrenamiento'] : 0;
  $url_server = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '';
  $filterd = isset($_GET['sub_cat']) && $_GET['sub_cat'] !== 'Todos' ? $_GET['sub_cat'] : false;

  $term = get_term_by('slug', $slug_tax, 'product_cat');
  $id_cat = isset($term->term_id) ? $term->term_id : 0;

  $product_categories = get_terms( 'product_cat', array(
    'orderby'    => 'name',
    'order'      => 'ASC',
    'hide_empty' => true,
    'parent'     => $id_cat 
  ) );

  $position = strpos($url_server, '&');
  if ($position !== false) {
    $url_server = substr($url_server, 0, $position);
  }

 ?>
 
<div class="m-product-filter_tabs">
    <form action="" class="m-product-filter__list">
      
      <a href="<?php echo "$url_server&sub_cat=Todos"; ?>" class="m-product-filter__options <?php echo $filterd == false ? 'm-product-filter__options--active' : ''; ?>">Todos</a>

      <?php  if ( !empty($product_categories) && !is_wp_error($product_categories) ) { 
        foreach($product_categories as $key => $category) {?>
          <a href="<?php echo "$url_server&sub_cat=$category->slug"; ?>" class="m-product-filter__options <?php echo $filterd == $category->slug ? 'm-product-filter__options--active' : ''; ?>"><?php echo $category->name; ?></a>
      <?php  
        } 
      } ?>
    
  </form>
</div>