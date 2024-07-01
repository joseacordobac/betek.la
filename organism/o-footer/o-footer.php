<?php 

/* template part footer */
wp_enqueue_style('o-footer');
wp_enqueue_script('o-footer');

?>

<?php 
    get_template_part( 'molecules/m-whatsapp/m-whatsapp', null, array( 'custom_class' => 'footer--pading' ) );
?>

<div class="o-footer">

    <div class="o-footer__info">
        <div class="o-footer__bottom-social">

            <?php get_template_part( 'atoms/a-logo-white/a-logo-white', null, array(
                'custom_class' => '',
                )); 
            ?>

            <?php  get_template_part( 'molecules/m-nav-footer/m-nav-footer', null, array(
                'custom_class' => '',
            ) ); ?>
            
            <div class="o-footer__bottom-nav-social">
                <?php get_template_part('molecules/m-socials/m-socials', null, array(
                    'custom_class' => '',
                    'repeater' => 'redes_sociales',
                )); ?>
            </div>
            
        </div>
    </div>

    
    <div class="o-footer__info o-footer__info--grid">
        <?php get_template_part('molecules/m-info-list/m-info-list', null, array(
            'repeater' => 'datos',
            'custom_class' => 'data-class',
        ));
        ?>
        <div class="o-footer__form">
            <div class="o-footer__form-content">
                <?php echo do_shortcode('[forminator_form id="2118"]'); ?>
                <div class="o-footer-form__text">
                    <span class="o-footer-form__p">
                        Suscríbete y recibe todas las noticias y oportunidades de entrenamiento de BeTek.
                    </span>
                </div>
            </div>
            <div class="o-footer__bottom">
                <div class="o-footer__bottom-text">
                    <p>© <?php echo date("Y"); ?> Betek. Todos los derechos reservados | <a href="https://makaia.org/politica-de-tratamiento-de-datos/" target="_blank" class="o-footer__policy">Política de privacidad</a> |Desarrollado por <a class="o-footer__bottom-link" href="https://movemosmarcas.com/" target="_blank">movemosmarcas.com</a></p>
                </div>
            </div>
        </div>
    </div>
    
</div>
