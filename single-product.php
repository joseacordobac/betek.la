<?php 
    /**
     * Single Programas
     */

    get_header(); 
    wp_enqueue_style('single-product');

    $product_id = get_the_ID();
    $product = wc_get_product($product_id);
    $thumbnail_id = $product->get_image_id();
    ?>
    
    <main class="main">
        <div class="product-head"></div>
        <div id="product-<?php the_ID(); ?>" <?php wc_product_class(); ?>>
            <div class="product-image">
                <?php get_template_part('atoms/a-titles/a-titles', null, array(
                    'title' => get_the_title(),
                    'custom_class' => 'product-title',
                    'link' => get_the_permalink(),
                )); ?>
                <?php 
                    get_template_part('atoms/a-img/a-img', null, array(
                        'image_id' => $thumbnail_id,
                        'custom_class' => 'product-image__img',
                        'link' => get_the_permalink(),
                        'alt' => get_the_title(),
                        'image_size' => 'large',
                        'border_radius' => 'true',
                        'aspect_ratio' => '1/1'
                    ));
                 ?>
            </div>
            <div class="product-info">
                <div class="product-info__content">
                    <div class="product-info__el">
                        <h3 class="product-info__el-title">Valor</h3>
                        <?php echo $product->get_price_html(); ?>
                    </div>
                    <?php while(have_rows('caracteristicas')): the_row(); ?>
                    <div class="product-info__el">
                        <h3 class="product-info__el-title"><?php  the_sub_field('character_title'); ?></h3>
                        <div class="product-info__el-desc">
                            <?php the_sub_field('description_characteristic'); ?>
                        </div>
                    </div>
                    <?php endwhile; ?>
                    <div class="product-info__btn">
                        <?php 
                        get_template_part('/atoms/a-btn/a-btn', null, 
                            array(
                                    'button_text' => 'Comprar',
                                    'button_link' => get_site_url()."/finalizar-compra/?add-to-cart=$product_id&quantity=1",
                                    'btn_type' => 'a-btn--primary',
                                    'icons_path' => get_template_directory_uri().'/assets/icons/arrow-to-right.svg',
                                )
                            );
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-footer">
            <?php get_template_part('molecules/m-faq/m-faq', null, array(
                'question' => 'Detalles de entrenamiento',
                'answer' => get_field('trainnig_details', $product_id),
                'custom_class' => 'product-footer__faq',
            )); ?>
            <?php get_template_part('molecules/m-faq/m-faq', null, array(
                'question' => 'Prerequisitos',
                'answer' => get_field('prerequisites', $product_id),
                'custom_class' => 'product-footer__faq',
            )); ?>
        </div>
    </main>

    <?php get_footer(); ?>