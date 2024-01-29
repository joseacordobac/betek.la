<?php

/** Organism: Header */
wp_enqueue_style('o-header');

?>

<header class="o-header">
    <div class="g-content-regular o-header__content">
        <div class="o-header__logo-content">
            <?php get_template_part('/atoms/a-logo/a-logo'); ?>
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