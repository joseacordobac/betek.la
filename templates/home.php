<?php 

/**
 * Template Name: Home
 * Description: This is a custom template for the home page.
 */


get_header(); 
wp_enqueue_script('js-swiper');
wp_enqueue_style('css-swiper');

wp_enqueue_script('ScrollTrigger');
wp_enqueue_script('gsap');
wp_enqueue_script('gsap-text');

wp_enqueue_script('home');
wp_enqueue_style('home');

?>

<main class="main">
    <div class="home-content">
        
        <div class="group-section g-background--home">
            <section class="hero-banner js-hero-banner g-content-regular">
                <div class="swiper-wrapper hero-banner">
                    <?php while( have_rows('slider_baner') ) : the_row(); ?>
                        <div class="swiper-slide">
                            <div class="hero-banner__slide-content">
                                <div class="hero-banner__left">
                                    <h3 class="hero-banner__title js-title"><?php the_sub_field('titulo'); ?></h3>
                                    <div class="hero-banner__text"><?php the_sub_field('description'); ?></div>
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
                                <div class="hero-banner__rigth">
                                    <?php 
                                    get_template_part('/molecules/m-video/m-video', null, 
                                        array(
                                            'class'         => '',
                                            'src'           => get_sub_field('imagen'),
                                            'alt'           => 'main-img',
                                            'video_link'    => get_sub_field('url_video'),
                                            'aspect_ratio' => '1/1'
                                        )
                                    ); ?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
                <div class="swiper-pagination__main-banner"></div>

            </section>

            <section id="entrenate" class="trainning">
                <?php while( have_rows('info') ) : the_row(); ?>
                    <div class="g-content-regular trainning__content">
                        <img src="<?php the_sub_field('bran_icon'); ?>" alt="" class="incon-brand" width="80" height="80">
                        <?php get_template_part('/atoms/a-titles/a-titles', null, 
                            array(
                                'title'         => get_sub_field('texto'),
                                'titles-type'   => 'a-titles--main',
                                // 'animations'    => 'js-title-tranning'
                                )
                            ); 
                        ?>
                    </div>
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
                            'url_btn'          => get_sub_field('url_btn'),
                            'btn_text'          => get_sub_field('btn_text'),
                            )); 
                        ?>
                <?php endwhile; ?>
            </section>
            
            <section id="programas" class="our-programs">
                <?php while( have_rows('programs_discover') ) : the_row(); ?>
                    <?php get_template_part('/atoms/a-titles/a-titles', null, 
                        array(
                            'title'         => get_sub_field('title'),
                            'titles-type'   => 'a-titles--main',
                            'animations'    => 'a-titles--animation-typing',
                            'custom-css'    => 'js-title-typing',
                            )
                        ); 
                    ?>
                    <div class="programs-list">
                        <?php get_template_part('/organism/o-iprogram/o-iprogram', null); ?>
                    </div>
                <?php endwhile; ?>
            </section>
        </div>

        <section id="contrata" class="need-talent">
            <?php while( have_rows('necesito_talento') ) : the_row(); ?>
                <?php get_template_part('/organism/o-get-talent/o-get-talent', null,
                    array(
                        'title'         => get_sub_field('titulo_de_seccion'),
                        'description'   => get_sub_field('sub_titulo_de_seccion'),
                        'btn_text'      => get_sub_field('btn_text'),
                        'btn_link'      => get_sub_field('url_btn'),
                        'src'           => get_sub_field('imagen_video'),
                        'video_embed'   => get_sub_field('enlace_video'),
                        'repeater_name' => 'options_list',
                        'custom_class'  => 'g-content-regular'
                    )
                ); ?>
            <?php endwhile; ?>
        </section>

        <section id="conocenos" class="our-impact">
            <?php while( have_rows('our_pact') ) : the_row(); ?>
            <?php get_template_part('/atoms/a-titles/a-titles', null, 
                    array(
                        'title'         => get_sub_field('section_title'),
                        'titles-type'   => 'a-titles--main',
                        'animations'    => 'js-title-typing',
                        'custom-css'    => 'g-content-middle'
                        )
                    ); 
                ?>
                <?php get_template_part('/organism/o-impact/o-impact', null,
                    array(
                        'repeater_name' => 'datos',
                        'number'        => 'number',
                        'description'   => 'description',
                        'custom_class'  => 'g-content-regular'

                    )
                ); ?>
            <?php endwhile; ?>
        </section>
            
        <section id="testimonios" class="new-realities">
            <div class="new-realities__content">
                <?php while( have_rows('new_realities') ) : the_row(); ?>
                <?php get_template_part('/atoms/a-titles/a-titles', null, 
                    array(
                        'title'         => get_sub_field('titulo_de_seccion'),
                        'titles-type'   => 'a-titles--main',
                        'animations'    => 'js-title-typing',
                        'custom-css'    => 'g-content-middle'
                        )
                    ); 
                ?>
                <?php get_template_part('/organism/o-testimonials/o-testimonials', null,
                    array(
                        'repater_name'      => 'agregar_testimonsio',
                        'src'               => 'img_testimonial',
                        'alt'               => 'name',
                        'name_testimonial'  => 'name',
                        'testimonial'       => 'testimonial',
                        'custom_class'      => '',
                        'custom_class_card' => ''
                    )
                ); ?>
                <?php endwhile; ?>
            </div>
        </section>

        <section id="alidos" class="alians">
            <div class="alians__content">
            <?php while( have_rows('alinced') ) : the_row(); ?>
                <?php get_template_part('/atoms/a-titles/a-titles', null, 
                    array(
                        'title'         => get_sub_field('titulo_de_seccion'),
                        'titles-type'   => 'a-titles--main',
                        'animations'    => 'js-title-typing',
                        'custom-css'    => 'g-content-middle'
                        )
                    ); 
                ?>
                <div class="alians-brands">
                <?php while(have_rows('aliance_list')) : the_row(); ?>
                    <?php get_template_part('/molecules/m-logo-card/m-logo-card', null, ['src' => get_sub_field('logo')]); ?>
                <?php endwhile; ?>
                </div>
            <?php endwhile; ?>
            </div>
        </section>

    </div>
</main>

<?php get_footer(); ?>
