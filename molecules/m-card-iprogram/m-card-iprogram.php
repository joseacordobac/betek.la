<?php 

/**
 * Molecule: IProgram
 * @param array $args
 **/
?>

<div class="m-card-iprogram">
    <div class="m-card-iprogram__head">
        <a href="<?php get_the_permalink(); ?>" class="m-card-iprogram__image">
            <img class="m-card-iprogram__image-el" src="https://via.placeholder.com/300x200" alt="">
        </div>
    </div>
    <div class="m-card-iprogram__body">
        <div class="m-card-iprogram__title">
            <a class="m-card-iprogram__title-link" href="#">
                <img src="https://via.placeholder.com/300x200" alt="" class="m-card-iprogram__icon">
                <h3 class="m-card-iprogram__title-el">
                    <span class="m-card-iprogram__title--name">Misión</span><?php the_title(); ?>
                </h3>
            </a>
            <div class="m-card-iprogram__tag">
                <spa class="m-card-iprogram__tag-el">Tiempo completo</spa>
                <spa class="m-card-iprogram__tag-el">100% virtual</spa>
            </div>
        </div>
        <div class="m-card-iprogram__description">
            <p class="m-card-iprogram__description-el"><?php the_field('descripcion'); ?></p>
        </div>
        <div class="m-card-iprogram__footer">
        <?php 
            get_template_part('/atoms/a-btn/a-btn', null, 
            array(
                    'button_text' => 'Ver más',
                    'button_link' => get_the_permalink(),
                    'btn_type' => 'a-btn--primary',
                    'icons_path' => get_template_directory_uri().'/assets/icons/arrow-to-right.svg',
                )
            );
        ?>
        </div>
    </div>    
</div>