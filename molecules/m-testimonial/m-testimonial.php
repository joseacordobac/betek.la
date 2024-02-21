<?php
//   template part: testimnonios 

wp_enqueue_style('m-testimonial');
wp_enqueue_script('m-testimonial');


$src = isset($args['src']) ? $args['src'] : '';
$alt = isset($args['alt']) ? $args['alt'] : '';
$name_testimonial = isset($args['name_testimonial']) ? $args['name_testimonial'] : '';
$testimonial = isset($args['testimonial']) ? $args['testimonial'] : '';
$custom_class = isset($args['custom_class']) ? $args['custom_class'] : '';

?>

<div class="m-testimonial <?php echo $custom_class; ?>">
    <div class="m-testimonial__content">
        <div class="m-testimonial-left">
            <img class="m-testimonial__image" src="<?php echo $src; ?>" alt="<?php echo $alt; ?>" width="180" height="200" />
        </div>
        <div class="m-testimonial-info">
            <h4 class="m-testimonial-info__name"><?php echo $name_testimonial; ?></h4>
            <p class="m-testimonial-info__text"><?php echo $testimonial; ?></p>
        </div>
    </div>
</div>
