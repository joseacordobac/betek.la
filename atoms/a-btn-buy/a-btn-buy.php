<?php 
  wp_enqueue_style('a-btn-buy');
  $product = wc_get_product();
  $regular_price = number_format($product->get_price(), 0, ',', '.');
  $product_id = get_the_ID();
  $btn_text = isset($args['btn_text']) ? $args['btn_text'] : false;
  $link = get_field('go_to_landing', $product_id) ? get_field('go_to_landing', $product_id) : get_the_permalink();

?>
<div class="a-btn-buy">
  <?php 
      if(!$btn_text){
        echo "<a href='".get_site_url()."/finalizar-compra/?add-to-cart=$product_id&quantity=1' class='a-btn-buy__btn'>$ $regular_price</a>"; 
      }
      if($btn_text){
        echo "<a href='$link' class='a-btn-buy__btn a-btn-buy__btn--secondary'>Ver más</a>";
        echo "<a href='$link' class='a-btn-buy__btn '>Comprar</a>";
      }
  ?>
</div>