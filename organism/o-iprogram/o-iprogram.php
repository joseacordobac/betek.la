<?php 
wp_enqueue_style('o-iprogram');
wp_enqueue_script('o-iprogram');


$args = array(
    'post_type' => 'programas', 
    'posts_per_page' => 5,      
);

$query = new WP_Query($args); 
?>

<div class="o-iprogram__wrapper o-iprogram">
    <div class="swiper-wrapper o-iprogram__container">
        <?php if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post(); ?>

            <div class="swiper-slide o-iprogram__slide">
                <?php get_template_part('molecules/m-card-iprogram/m-card-iprogram'); ?>
            </div>

        <?php endwhile;
            wp_reset_postdata();
        endif;
        ?>

    </div>
    <div class="o-iprogram__pagination"></div>  
</div>
