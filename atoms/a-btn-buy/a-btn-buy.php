<?php 
  wp_enqueue_style('a-btn-buy');
  $product = wc_get_product();
  $regular_price = $product->get_price();
  $product_id = get_the_ID();
  $btn_text = isset($args['btn_text']) ? $args['btn_text'] : false;

  $link = get_the_permalink();
?>
<div class="a-btn-buy">
  <?php 
      if(!$btn_text){
        echo do_shortcode('[add_to_cart class="a-btn-buy__btn" id="'.$product_id.'"]'); 
      }
      if($btn_text){
        echo "<a href='$link' class='a-btn-buy__btn'>$btn_text</a>";
      }
  ?>
</div>