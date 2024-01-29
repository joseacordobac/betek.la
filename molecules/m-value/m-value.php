<?php 

/* Molecules: Value
*
* Description: 
* 
**/
    wp_enqueue_style('m-value');
    wp_enqueue_script('m-value');

    $icon = isset($args['icon']) ? $args['icon'] : '';
    $title = isset($args['title']) ? $args['title'] : '';
    $description = isset($args['description']) ? $args['description'] : '';

?>

<div class="m-value">
    <div class="m-value__icon">
        <img class="m-value__icon-img" src="<?php echo $icon; ?>" alt="<?php echo $title; ?>" width="50" height="50">
    </div>
    <div class="m-value__content">
        <div class="m-value__title">
            <h4 class="m-value__title-text"><?php echo $title; ?></h4>
        </div>
        <p class="m-value__text-text">
            <?php echo $description; ?>
        </p>
    </div>
</div>
        
    

