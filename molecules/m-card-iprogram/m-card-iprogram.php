<?php 

/**
 * Molecule: IProgram
 * @param array $args
 **/

 wp_enqueue_style('m-card-iprogram');

?>

<div class="m-card-iprogram">
    <a href="<?php get_the_permalink(); ?>" class="m-card-iprogram__head">
        <?php get_template_part('/atoms/a-img/a-img', null, 
            array(
                'class' => 'm-card-iprogram__image-el',
                'src' => get_the_post_thumbnail_url(get_the_ID(), 'full'),
                'alt' => get_the_title(),
                'video_link' => '',
                'aspect_ratio' => '16/9',
            )
        ); ?>
    </a>
    <div class="m-card-iprogram__body">
        <a class="m-card-iprogram__title" href="<?php get_the_permalink(); ?>">
            <div class="m-card-iprogram__title-link" >
                <img src="<?php the_field('mision_icon'); ?>" alt="icon misión" class="m-card-iprogram__icon">
                <h3 class="m-card-iprogram__title-el">
                    <span class="m-card-iprogram__title--name">Misión </span><?php the_title(); ?>
                </h3>
            </div>

            <div class="m-card-program-tags__content">
                <div class="m-card-iprogram__tag">
                    <spa class="m-card-iprogram__tag-el">100% virtual </spa>
                    <spa class="m-card-iprogram__tag-el">y en vivo</spa>
                </div>
                <div class="m-card-iprogram__tag m-card-iprogram--secondary">
                    <spa class="m-card-iprogram__tag-el">Tiempo completo </spa>
                    <spa class="m-card-iprogram__tag-el">o parcial</spa>
                </div>
            </div>
            
            <p class="m-card-iprogram__description"><?php the_field('descripcion'); ?></p>
        </a>
        <?php 
            get_template_part('/atoms/a-btn/a-btn', null, 
            array(
                    'button_text' => 'Aplicar',
                    'button_link' => get_the_permalink(),
                    'btn_type' => 'a-btn--primary',
                    'icons_path' => get_template_directory_uri().'/assets/icons/arrow-to-right.svg',
                )
            );
        ?>
    </div>    
</div>