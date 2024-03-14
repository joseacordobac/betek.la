<?php 

    // Template part: logo card

    wp_enqueue_style('m-logo-card');
    // wp_enqueue_script('m-logo-card');
    
    $image_id = isset($args['image_id']) ? $args['image_id'] : '';
    $image_size = isset($args['image_size']) ? $args['image_size'] : 'full';

    $image_html = wp_get_attachment_image( $image_id, $image_size, false, array(
        'class' => 'm-logo-card__img',
        'alt' => 'empresas a trabajado con Betek',
     ) );
?>

<div class="m-logo-card">
        <?php echo $image_html; ?>   
</div>