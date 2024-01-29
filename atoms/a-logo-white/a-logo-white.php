<?php
 /** @var string */

 $custom_class = isset($args['custom_class']) ? $args['custom_class'] : '';
 ?>

<div class="a-logo-white <?php echo $custom_class; ?>">
    <img class="a-logo-white__logo" src="<?php echo get_template_directory_uri() . '/assets/icons/imagen-logo.svg'; ?>" alt="logo Betek">
</div>