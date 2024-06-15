<?php 
    /**
     * Single Programas
     */

    get_header(); 
    wp_enqueue_style('single-product');

    $product = wc_get_product(get_the_ID());
    $thumbnail_id = $product->get_image_id();
    ?>
    
    <main class="main">
        <div id="product-<?php the_ID(); ?>" <?php wc_product_class(); ?>>
            <div class="product-image">
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
            <div class="product-description">
                <?php get_template_part('atoms/a-titles/a-titles', null, array(
                    'title' => get_the_title(),
                    'custom_class' => 'product-title',
                    'link' => get_the_permalink(),
                )); ?>
                <div class="product__tags">
                    <?php while(have_rows('chips')): the_row();
                        get_template_part('/atoms/a-tags/a-tags', null, array(
                            'tag' => get_sub_field('product_chip'),
                            'custom_class' => 'm-card-product__tag',
                        ));
                    endwhile; ?>
                </div>
                <?php the_content(); ?>
                
                <div class="product-add-to-cart">
                    <?php get_template_part('atoms/a-btn-buy/a-btn-buy', null); ?>
                </div>
            </div>
        </div>
        <div class="product-caracteristics">
            <?php while(have_rows('caracteristicas')): the_row(); ?>
                <div class="product-characteristics__content">
                    <h4 class="product-characteristics__title"><?php the_sub_field('character_title'); ?></h4>
                    <p class="product-characteristics__text"><?php the_sub_field('description_characteristic'); ?></p>
                </div>
            <?php endwhile; ?>
        </div>
    </main>

    <?php get_footer(); ?>