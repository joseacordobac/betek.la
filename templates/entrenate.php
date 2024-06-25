<?php
 /**
  * Template Name: Entrenate
  * Description: This is a custom template for entranate.
  * 
  */

  wp_enqueue_style('entrenate');
  wp_enqueue_script('entrenate');

?>

<?php get_header(); ?>
<main class="page-entrenate">
    <section class="entrenate-banner">
        <div class="entrenate-banner__content">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/circle-detail.png" alt="entrenate-banner" class="entrenate-banner__circle" with="195" height="200" />
            <h2 class="entrenate-banner__title"><?php the_field('main_text'); ?></h2>
        </div>
    </section>
    <section class="misiones g-content-regular">
        <?php get_template_part('/organism/o-iprogram/o-iprogram', null, 
            array(
                'btn-text'  => 'CONOCE MÁS',
                'direction' => 'horizontal',
                'custom-css' => '',
                'slider' => false
                )); 
            ?>
    </section>
    <section class="tranning-model">
        <?php get_template_part('/organism/o-tranning-model/o-tranning-model'); ?>
    </section>
<!-- 
    <section class="products products-swipper">
        <?php get_template_part('/atoms/a-titles/a-titles', null, 
            array(
                'title'         => "Sigue conquistando nuevos horizontes<br> con los cursos cortos",
                'titles-type'   => 'a-titles--main',
                'animations'    => 'js-title-typing',
                'custom-css'    => 'products-title'
                )
            ); 
        ?>
        <div class="swiper-wrapper products-swiper-wrapper">
            <?php 
                $args = array(
                    'post_type' => 'product',
                    'posts_per_page' => 10,
                    'order' => 'ASC',
                    'orderby' => 'date',
                    'post_status' => 'publish'
                );

                $query = new WP_Query($args);
                
                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();
                        get_template_part('/molecules/m-card-product/m-card-product');
                    endwhile;
                endif;
                wp_reset_postdata();
            ?>
        </div>
        <div class="entrenate-btn">
            <?php
                get_template_part('/atoms/a-btn/a-btn', null, 
                array(
                    'button_text' => 'Ver todos',
                    'button_link' => get_home_url().'/productos',
                    'btn_type' => 'a-btn--primary',
                    'custom_css' => 'g-with-100',
                    'target' => '_blank',
                    'icons_path' => get_template_directory_uri().'/assets/icons/arrow-to-right.svg'
                    )
                );

                ?>
        </div>
    </section> -->

    <section class="testimonials">
        <div class="testimonials__content">
        <?php while( have_rows('new_realities') ) : the_row(); ?>
            <?php get_template_part('/atoms/a-titles/a-titles', null, 
                array(
                    'title'         => get_sub_field('titulo_de_seccion'),
                    'titles-type'   => 'a-titles--main',
                    'animations'    => 'js-title-typing',
                    'custom-css'    => 'g-content-middle'
                    )
                ); 
            ?>
            <?php get_template_part('/organism/o-testimonials/o-testimonials', null,
                array(
                    'repater_name'      => 'agregar_testimonsio',
                    'img_id'            => 'img_testimonial',
                    'alt'               => 'name',
                    'name_testimonial'  => 'name',
                    'testimonial'       => 'testimonial',
                    'possition'         => 'possition',
                    'custom_class'      => '',
                    'custom_class_card' => ''
                )
            ); ?>
            <?php endwhile; ?>
        </div>
    </section>

    <section class="preguntas">
        <div class="preguntas__content g-content-5X">
            <?php get_template_part('/organism/o-faq/o-faq', null, 
                array(
                    'group' => 'frecuent_ask_question',
                    'title' => 'titulo_seccion',
                    'repeater' => 'questions_list',
                    'question' => 'question',
                    'answer' => 'Answer',
                    'custom_class' => 'o-faq--preguntas'
                    )
            ); ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>