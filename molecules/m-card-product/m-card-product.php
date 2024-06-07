<?php 
  /**
   * Template Name: Product Card
   */

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
      <body class="m-card-product__body">
        <?php 
            get_template_part('/atoms/a-titles/a-titles', null, 
            array(
                'title'         => get_the_title(),
                'custom-css'   => 'm-card-product__title',
                )
            ); 
        ?>
        <div class="m-card-product__tags">
          <?php while(have_rows('chips')): the_row();
              get_template_part('/atoms/a-tags/a-tags', null, array(
                'tag' => get_sub_field('product_chip'),
                'custom_class' => 'm-card-product__tag',
              ));
          endwhile; ?>
        </div>
        <div class="m-card-product__desc">
          <?php the_content(); ?>
        </div>
      </body>
      <footer class="m-card-product__footer">
          <?php get_template_part('/atoms/a-btn-buy/a-btn-buy', null, array(
              'btn_text' => 'Comprar',
          )); ?>
      </footer>
   </archive>