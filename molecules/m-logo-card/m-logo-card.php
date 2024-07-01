<?php 

    // Template part: logo card

    wp_enqueue_style('m-logo-card');
    wp_enqueue_script('m-logo-card');
    
    $image_size = isset($args['image_size']) ? $args['image_size'] : 'full';
    $repater = isset($args['repeater']) ? $args['repeater'] : '';
    $id_name = isset($args['id_name']) ? $args['id_name'] : '';
  
?>

<div class="m-alians-brands js-alians-brands swiper">
    <div class="swiper-wrapper">
        <?php while(have_rows($repater)) : the_row(); ?>
            <div class="m-logo-card swiper-slide">
                <?php 
                    $image_html = wp_get_attachment_image( get_sub_field($id_name), $image_size, false, array(
                        'class' => 'm-logo-card__img',
                        'alt' => 'empresas a trabajado con Betek',
                    ) );
                    echo $image_html; 
                ?>   
            </div>
        <?php endwhile; ?>
    </div>
</div>