<?php 
  /**
   */

   wp_enqueue_script('m-card-product');
   wp_enqueue_style('m-card-product');
   $product = wc_get_product(get_the_ID());
   $short_description = $product->get_short_description();
   $regular_price = $product->get_price() !=="" ? number_format($product->get_price(), 0, ',', '.') : '';


   ?>
   <archive class="m-card-product">
      <header class="m-card-product__img">
          <?php 
            get_template_part('/atoms/a-img/a-img', null, array(
                'image_id' => get_post_thumbnail_id(),
                'image_size' => 'full',
                'alt' => get_the_title(),
                'aspect_ratio' => '1/1',
                'custom_class' => 'border-radius',
            ))
          ?>
      </header>
      <section class="m-card-product__body">
        <?php 
            get_template_part('/atoms/a-titles/a-titles', null, 
            array(
                'title'         => get_the_title(),
                'custom-css'   => 'm-card-product__title',
                )
            ); 
        ?>
        <?php if(get_field('product_sub_title', $product->id)) { ?>
          <h4 class="m-card-product__subtitle"><?php the_field('product_sub_title', $product->id) ?></h4>
        <?php } ?>
        
        <div class="m-card-product__tags">
          <?php while(have_rows('chips')): the_row();
              get_template_part('/atoms/a-tags/a-tags', null, array(
                'tag' => get_sub_field('product_chip'),
                'custom_class' => 'm-card-product__tag',
              ));
          endwhile; ?>
        </div>
        <div class="m-card-product__desc">
          <?php echo "<p class='m-card-product__short-desc'>$short_description</p>" ?>
        </div>
        <h4 class="regular-price">
          $ <?php echo $regular_price; ?>
        </h4>
        <footer class="m-card-product__footer">
            <?php get_template_part('/atoms/a-btn-buy/a-btn-buy', null, array(
                'btn_text' => 'Ver más',
            )); ?>
        </footer>
      </section>
   </archive>