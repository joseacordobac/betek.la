<?php
  /** 
   * Template Name: Product
   * Description: This is a custom template for the home page.
   */

  get_header();
  wp_enqueue_style('productos');
?>
  <main class="product">
    <section class="banner-product">
      <div class="banner-product__content">
        <h1 class="banner-product__title">Sigue conquistando nuevos horizontes con nuestro cursos</h1>
      </div>
    </section>
    <section class="product-list">
      <?php get_template_part('/organism/o-archive-product/o-archive-product', null, ''); ?>
    </section>
  </main>
<?php get_footer(); ?>
