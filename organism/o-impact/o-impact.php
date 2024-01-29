<?php
/**
 * 
 * template part: impact
 * 
 */

 wp_enqueue_style('o-impact');
 wp_enqueue_script('o-impact');

 $repater_name = isset($args['repeater_name']) ? $args['repeater_name'] : 'impact';
 $number = isset($args['number']) ? $args['number'] : '';
 $description = isset($args['description']) ? $args['description'] : '';
 $custom_class = isset($args['custom_class']) ? $args['custom_class'] : '';
?>

<div class="o-impact">
    <div class="o-impact__content <?php echo $custom_class; ?>">
        <div class="o-impact-left">
            <img class="o-impact-map" src="<?php echo get_template_directory_uri(); ?>/assets/img/map.svg" alt="places map" width="100" height="100">
        </div>
        <div class="o-impact-right">
            <?php while( have_rows($repater_name) ) : the_row(); ?>
                <div class="o-impact-item">
                    <?php get_template_part('atoms/a-numbers/a-numbers', null, 
                        array(
                            'number' => get_sub_field($number),
                            'custom_class' => 'o-impact-item__number'
                        )); 
                    ?>
                    <p class="o-impact-item__description"><?php the_sub_field($description); ?></p>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</div>