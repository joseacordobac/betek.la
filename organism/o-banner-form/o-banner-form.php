<?php 

    /** 
     * Template part: Banner Form
    */

    wp_enqueue_style('o-banner-form');
?>

<section class="o-banner-form">
    <div class="o-banner-form__content">
       <div class="o-banner-form__imagen">
          <img class="o-banner-form__imagen-src" src="<?php the_field('imagen', 'form'); ?>" alt="banner-form">
       </div>
       <div class="o-banner-form__form">
          <?php get_template_part('molecules/m-form-basic/m-form-basic', null, ''); ?>
       </div>
    </div>
</section>