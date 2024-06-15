<?php
  wp_header();

  $product = wc_get_product(get_the_ID());
  $thumbnail_id = $product->get_image_id();

?>
<h1>tutaina</h1>
<?php wp_footer(); ?>