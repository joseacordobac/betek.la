<?php 
 /* Organism: You get */

 wp_enqueue_style('o-you-get');
 wp_enqueue_script('o-you-get');

 $img_path = isset($args['img_path']) ? $args['img_path'] : '';
 $img_icon = isset($args['img_icon']) ? $args['img_icon'] : '';

 $title = isset($args['title']) ? $args['title'] : '';
 $title_type = isset($args['title_type']) ? $args['title_type'] : '';
 $custom_class = isset($args['custom_class']) ? $args['custom_class'] : '';
 $title_animetion = isset($args['title_animetion']) ? $args['title_animetion'] : '';

 $content_name = isset($args['content_name']) ? $args['content_name'] : '';
 $list_img_path = isset($args['list_img_path']) ? $args['list_img_path'] : '';
 $list_title = isset($args['list_title']) ? $args['list_title'] : '';

 $btn_text = isset($args['btn_text']) ? $args['btn_text'] : '';
 $btn_link = isset($args['btn_link']) ? $args['btn_link'] : '';

?>

<div class="g-content-regular o-you-get-info">
    <div class="o-you-get-info-left">
        <?php get_template_part('/atoms/a-img/a-img', null, 
            array(
                'src' => $img_path, 
                'internal_icon' => $img_icon,
                'alt' => $title, 
                'class' => 'o-you-get-img'
            )); 
        ?>
    </div>
    <div class="o-you-get-info-right">
        <?php get_template_part('/atoms/a-titles/a-titles', null, 
            array(
                'title'         => $title,
                'titles-type'   => $title_type,
                'animations'  => $title_animetion,
                )
            ); 
        ?>
        <div class="o-you-get-list">
            <?php while( have_rows($content_name) ) : the_row(); ?>
                <div class="o-you-get-list__content">
                    <?php get_template_part('/molecules/m-value/m-value', null, array(
                        'icon' => get_sub_field('advanteage_icon'),
                        'title' => get_sub_field('title_advantege'),
                        'description' => get_sub_field('description'),
                    ))
                    ?>
                </div>
            <?php endwhile; ?>
            <?php 
            if($btn_text){
                get_template_part('/atoms/a-btn/a-btn', null, 
                array(
                        'button_text' => $btn_text,
                        'button_link' => $btn_link,
                        'btn_type' => 'a-btn--primary',
                        'icons_path' => get_template_directory_uri().'/assets/icons/arrow-to-right.svg',
                    )
                );
            } ?>
        </div>
    </div>
</div>