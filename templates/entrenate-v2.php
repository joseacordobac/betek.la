<?php
 /**
  * Template Name: Entrenate v2
  * Description: This is a custom template for entranate.
  * 
  */

  wp_enqueue_style('entrenate');
  wp_enqueue_script('entrenate');

  $type_entrenamiento = isset($_GET['entrenamiento']) ? $_GET['entrenamiento'] : '';
  $sub_cat = isset($_GET['sub_cat']) ? $_GET['sub_cat'] : '';

  $term = get_term_by('slug', $type_entrenamiento, 'product_cat');

  $page_title = $type_entrenamiento === '' ? get_field('main_text') :  $term->name;
  $id_cat = isset($term->term_id) ? $term->term_id : 0;
  $child_terms = get_term_children($id_cat, 'product_cat');  

?>

<?php get_header(); ?>
<main class="page-entrenate <?php echo $type_entrenamiento === 'entrenamientos-especializados' ? 'page-entrenate--specialized' : ''; ?>">
    <section class="<?php echo $type_entrenamiento === '' ? 'entrenate-banner' : 'entrenate-banner__secondary'; ?>">
        <div class="entrenate-banner__content">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/circle-detail.png" alt="entrenate-banner" class="entrenate-banner__circle" with="195" height="200" />
            <h2 class="entrenate-banner__title"><?php echo $page_title; ?></h2>
            <?php if($type_entrenamiento !== ''): ?>
                <h3 class="entrenate-banner__sub_title"><?php the_field('titulo_cat_product', $term); ?></h3>
                <p class="entrenate-banner__description"><?php echo $term->description; ?></p>
            <?php endif; ?>
        </div>
    </section>
    <?php if($type_entrenamiento === ''): ?>
        <section class="products-categories">
            <?php get_template_part('/organism/o-cat-products/o-cat-products', null, array('custom_class' => '')); ?>
        </section>
    <?php endif; ?>

    <section class="products">
        <?php if($id_cat !== 0 && count($child_terms) > 0):
            get_template_part('/molecules/m-product-filter/m-product-filter');
        endif; ?>
        <?php 
            if($type_entrenamiento === '') {
            get_template_part('/atoms/a-titles/a-titles', null, 
                array(
                    'title'         => "Sigue conquistando nuevos horizontes<br> con los cursos cortos",
                    'titles-type'   => 'a-titles--main',
                    'animations'    => 'js-title-typing',
                    'custom-css'    => 'products-title'
                    )
                ); 
            }
        ?>
        <div class="products-content">
            <?php 
                $args = array(
                    'post_type' => 'product',
                    'posts_per_page' => $type_entrenamiento === '' ? 3 : 12,
                    'order' => 'ASC',
                    'orderby' => 'date',
                    'post_status' => 'publish'
                );

                if($type_entrenamiento !== '') {
                    $args['tax_query'] = array(
                        array(
                            'taxonomy' => 'product_cat',
                            'field' => 'slug',
                            'terms' => $type_entrenamiento
                        )
                    );
                }

                if($sub_cat !== '' && $sub_cat !== 'Todos') {
                    $args['tax_query'] = array(
                        array(
                            'taxonomy' => 'product_cat',
                            'field' => 'slug',
                            'terms' => $sub_cat
                        )
                    );
                }

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
    </section>
    
    <section class="tranning-model">
        <?php get_template_part('/organism/o-tranning-model/o-tranning-model'); ?>
    </section>

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