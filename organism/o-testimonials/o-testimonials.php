<?php 

/** Organism: Testimonials */
    wp_enqueue_style('o-testimonials');
    wp_enqueue_script('o-testimonials');

    wp_enqueue_script('js-swiper');
    wp_enqueue_style('css-swiper');

    $src = isset($args['src']) ? $args['src'] : '';
    $alt = isset($args['alt']) ? $args['alt'] : '';
    $repater_name = isset($args['repater_name']) ? $args['repater_name'] : '';
    $name_testimonial = isset($args['name_testimonial']) ? $args['name_testimonial'] : '';
    $testimonial = isset($args['testimonial']) ? $args['testimonial'] : '';
    $custom_class = isset($args['custom_class']) ? $args['custom_class'] : '';
    $custom_class_card = isset($args['custom_class_card']) ? $args['custom_class_card'] : '';
?>

<div class="o-testimonials <?php echo $custom_class; ?>">
    <div class="o-testimonials__swiper">
        <div class="swiper-wrapper">
            <?php while (have_rows($repater_name)): the_row(); ?>
                <div class="swiper-slide o-testimonials__slide">
                    <?php get_template_part('molecules/m-testimonial/m-testimonial', null, 
                        array(
                            'src'               => get_sub_field($src),
                            'alt'               => get_sub_field($alt),
                            'name_testimonial'  => get_sub_field($name_testimonial),
                            'testimonial'       => get_sub_field($testimonial),
                            'custom_class'      => $custom_class_card
                        )
                    ); ?>
                </div>
            <?php endwhile; ?>
        </div>
        <div class="swiper-pagination--testimonials"></div>
    </div>
</div>