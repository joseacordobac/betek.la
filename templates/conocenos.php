<?php 


/**
 * Template Name: Conocenos
 * Description: This is a custom template for the home page.
 */

 get_header(); 

 wp_enqueue_script('js-swiper');
 wp_enqueue_style('css-swiper');
 
 wp_enqueue_script('ScrollTrigger');
 wp_enqueue_script('gsap');
 wp_enqueue_script('gsap-text');

 wp_enqueue_script('conocenos');
 wp_enqueue_style('conocenos');
 
 ?>


<main class="main">
    <section class="hero-conocenos js-conocenos-banner g-background--home">
        <div class=" swiper-wrapper">
            <?php while( have_rows('hero_banner') ) : the_row(); ?>
                <div class="hero-conocenos__content swiper-slide">
                    <div class="hero-conocenos__text js-title-tranning">
                        <h3 class="hero-conocenos__title js-title"><?php the_sub_field('title'); ?></h3>
                        <p class="hero-conocenos__description"><?php the_sub_field('decription'); ?></p>
                        <?php 
                            get_template_part('/atoms/a-btn/a-btn', null, 
                            array(
                                    'button_text' => get_sub_field('btn_text'),
                                    'button_link' => get_sub_field('url_btn'),
                                    'btn_type' => 'a-btn--primary',
                                    'icons_path' => get_template_directory_uri().'/assets/icons/arrow-to-right.svg',
                                )
                            );
                        ?>
                    </div>
                    <div class="hero-conocenos__img">
                        <img class="hero-conocenos__image" src="<?php the_sub_field('main_img'); ?>" alt="conocenos-main">
                    </div>    
                </div>
            <?php endwhile; ?>
        </div>
        <div class="swiper-pagination__main-banner"></div>  
        
        <?php while( have_rows('our_add_values') ) : the_row(); ?>
            <div class="our-addvalues">

                <?php get_template_part('/atoms/a-titles/a-titles', null, 
                    array(
                        'title'         => get_sub_field('texto'),
                        'titles-type'   => 'a-titles--main',
                        'animations'    => 'js-title-typing'
                        )
                    ); 
                ?>
                <div class="our-addvalues__content">
                    <?php get_template_part('/organism/o-you-get/o-you-get', null,
                    array(
                        'img_path'          => get_sub_field('description_img'),
                        'img_icon'          => get_sub_field('internal_icon'),
                        'title'             => get_sub_field('title_section'),
                        'title_type'        => 'a-titles--black',
                        'title_animetion'   => 'js-title-typing',
                        'content_name'      => 'list_description',
                        'list_img_path'     => 'list_img_path',
                        'list_title'        => 'list_title',
                        'url_btn'           => get_sub_field('url_btn'),
                        'btn_text'          => get_sub_field('btn_text'),
                        'custom_class'      => 'o-you-get--main-color o-you-get--flex-start'
                        )); 
                    ?>
                </div>

            </div>
        <?php endwhile; ?>
        
        <div class="our-changes-theory">
            <?php get_template_part('/atoms/a-titles/a-titles', null, 
                array(
                    'title'         => get_field('titulo_seccion'),
                    'titles-type'   => 'a-titles--main',
                    'animations'    => 'js-title-typing'
                    )
                ); 
            ?>

            <div class="our-changes-theory__content">
                <?php 
                $count = 0;
                while( have_rows('our_change_theory') ) : the_row();

                     get_template_part('/molecules/m-card-numbers/m-card-numbers', null, 
                        array(
                            'description'   => get_sub_field('description'),
                            'number'        => $count++ < 10 ? '0'.$count : $count,
                            'custom_class'  => 'g-content-5X',
                            )
                        ); 
                    
                endwhile; ?>
            </div>

        </div>
        
        <div class="our-ods">
            <?php get_template_part('/atoms/a-titles/a-titles', null, 
                array(
                    'title'         => get_field('title_ods'),
                    'titles-type'   => 'a-titles--main',
                    'animations'    => 'js-title-typing'
                    )
                ); 
            ?>
            <div class="our-ods__content g-content-5X">
                <?php  while( have_rows('logo_objectives') ) : the_row();
                    get_template_part('/atoms/a-img/a-img', null, 
                        array(
                            'src' => get_sub_field('add_logo'),
                            'alt' => 'ods-logo',
                            'custom_class' => 'a-logos__logo',
                            'aspect_ratio' => '1/1',
                            )
                        );
                    endwhile; ?> 
            </div>
        </div>

    </section>
    <section class="move-us">
         <div class="move-us__content">
            <?php while( have_rows('move_us') ) : the_row();

             get_template_part('/atoms/a-titles/a-titles', null, 
                array(
                    'title'         => get_sub_field('title_section'),
                    'titles-type'   => 'a-titles--main',
                    'animations'    => 'js-title-typing'
                    )
                ); 
            ?>
            <div class="move-us__content-list">

                <?php 
                $count = 0;
                while( have_rows('add_value') ) : the_row();
                    get_template_part('/molecules/m-card-move/m-card-move', null,
                        array(
                            'title' => get_sub_field('title'),
                            'description' => get_sub_field('description'),
                            'custom_class' => 'a--number',
                            'number' => $count++ < 10 ? '0'.$count : $count,
                            'color' => get_sub_field('color')
                        )
                    );
                
                endwhile; ?>
            </div>

            <?php endwhile; ?>
         </div>           
    </section>
    <section class="our-start">
        <div class="our-start__content">

            <?php while(have_rows('nuestro_origen')) : the_row();
                 get_template_part('/organism/o-our-start/o-our-start', null, array(
                    'title'         => get_sub_field('titulo_seccion'),
                    'description'   => get_sub_field('description'),
                    'img'           => get_sub_field('imagen'),
                    'custom_class'   => 'a-titles--main',
                )
            );
            endwhile; ?>

        </div>         
    </section>
    <section class="our-team">
        <?php get_template_part('/atoms/a-titles/a-titles', null, 
            array(
                'title'         => 'Equipo profesional_',
                'titles-type'   => 'our-team--titles a-titles--main',
                'animations'    => 'js-title-typing'
                )
            ); 
            
            get_template_part('/organism/o-team/o-team', null, array(
                'repeater' => 'equipo',
                'img' => 'team_photo',
                'name' => 'name',
                'possition' => 'position',
                'styles' => 'o-our-team',
                'boton_name' => 'btn_text',
                'linked_url' => 'btn_url',
                'custom_class' => 'a-titles--main',
            )); 
        ?>
    </section>
    <section class="awards">

    </section>
    
    <section id="alidos" class="alians">
        <div class="alians__content">
            <?php get_template_part('/atoms/a-titles/a-titles', null, 
                array(
                    'title'         => 'Reconocimientos',
                    'titles-type'   => 'a-titles--main',
                    'animations'    => 'js-title-typing',
                    'custom-css'    => 'g-content-middle'
                    )
                ); 
            ?>
            <div class="alians-brands">
                <?php while(have_rows('reconocimientos')) : the_row(); ?>
                    <?php get_template_part('/molecules/m-logo-card/m-logo-card', null, ['src' => get_sub_field('acknowledgment')]); ?>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
    
    <section id="alidos" class="alians">
        <div class="alians__content">
            <?php get_template_part('/atoms/a-titles/a-titles', null, 
                array(
                    'title'         => 'Aliado',
                    'titles-type'   => 'a-titles--main',
                    'animations'    => 'js-title-typing',
                    'custom-css'    => 'g-content-middle'
                    )
                ); 
            ?>
            <div class="alians-brands">
                <?php while(have_rows('aliados')) : the_row(); ?>
                    <?php get_template_part('/molecules/m-logo-card/m-logo-card', null, ['src' => get_sub_field('aliances')]); ?>
                <?php endwhile; ?>
            </div>
        </div>
    </section>


</main>

<?php get_footer(); ?>


