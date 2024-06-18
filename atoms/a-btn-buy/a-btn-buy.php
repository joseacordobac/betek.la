<?php 
  wp_enqueue_style('a-btn-buy');
  $product = wc_get_product();
  $regular_price = number_format($product->get_price(), 0, ',', '.');
  $product_id = get_the_ID();
  $btn_text = isset($args['btn_text']) ? $args['btn_text'] : false;

  $link = get_the_permalink();
?>
<div class="a-btn-buy">
  <?php 
      if(!$btn_text){
        echo "<a href='$link/?add-to-cart=$product_id&quantity=1' class='a-btn-buy__btn'>$ $regular_price</a>"; 
      }
      if($btn_text){
        echo "<a href='$link' class='a-btn-buy__btn'>$btn_text</a>";
      }
  ?>
</div>