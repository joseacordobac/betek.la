<?php 

    // Template part: logo card

    wp_enqueue_style('m-logo-card');
    wp_enqueue_script('m-logo-card');
    $src = isset($args['src']) ? $args['src'] : ''
?>

<div class="m-logo-card">
    <?php if($src ){ ?>
        <img class="m-logo-card__img" src="<?php echo $src; ?>" alt="logo brand" />
    <?php } ?>
</div>