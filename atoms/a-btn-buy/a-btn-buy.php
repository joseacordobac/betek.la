<?php 
  $product = wc_get_product();
  $regular_price = $product->get_price();
?>
<div class="a-btn-buy__add-to-cart">
  <form class="a-btn-buy__form" action="" method="post">
    <button class="a-btn-buy__btn" type="submit" name="add-to-cart" value="<?php echo get_the_ID(); ?>">
      <span class="a-btn-buy__btn-text"><?php echo "$ $regular_price"; ?></span>
    </button>
  </form>
</div>