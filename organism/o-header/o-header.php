<?php

    /** Organism: Header */
    wp_enqueue_style('o-header');
    wp_enqueue_script('o-header');
?>

<header class="o-header">
    <div class="g-content-regular o-header__content">
        <div class="o-header__logo-content"> 
            <?php if(is_page_template('templates/empresas.php') || is_page_template('templates/productos.php')){ ?>
                <?php get_template_part('/atoms/a-logo-white/a-logo-white'); ?>
            <?php }else{ ?>
                <?php get_template_part('/atoms/a-logo/a-logo'); ?>
            <?php } ?>

        </div>
        <div class="o-header__mobile-content">
            <div class="o-header__mobile">
                <span class="o-header__mobile-line"></span>
                <span class="o-header__mobile-line o-header__mobile-line--center"></span>
                <span class="o-header__mobile-line o-header__mobile-line--bottom"></span>
            </div>
        </div>
        <div class="o-header__nav-content">
            <?php get_template_part('/molecules/m-nav/m-nav'); ?>
        </div>
    </div>
</header>