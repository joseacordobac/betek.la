<?php 
  wp_enqueue_style('a-btn-buy');
  $product = wc_get_product();
  $regular_price = $product->get_price();
  $product_id = get_the_ID();
?>
<div class="a-btn-buy">
  <?php echo do_shortcode('[add_to_cart class="a-btn-buy__btn" id="'.$product_id.'"]'); ?>
</div>