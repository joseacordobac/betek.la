<?php

/**
 * Molecules: Card Cat
 *  @param array $args
 *  @return void
 */

wp_enqueue_style('m-card-cat');

$custom_class = isset($args['custom_class']) ? $args['custom_class'] : '';
$category = isset($args['category']) ? $args['category'] : '';
 
$category_id = $category->term_id;
$category_name = $category->name;
$category_slug = $category->slug;
$category_description = $category->description;
$category_image_id = get_term_meta($category_id, 'thumbnail_id', true);

?>

<archive class="m-card-cat">
    <header class="m-card-cat__img">
        <?php 
          get_template_part('/atoms/a-img/a-img', null, array(
              'image_id' => $category_image_id ,
              'image_size' => 'full',
              'alt' => $category_name,
              'custom_class' => 'border-radius',
          ))
        ?>
    </header>
    <section class="m-card-cat__body">
        <div class="m-card-cat__title">
            <?php get_template_part('/atoms/a-titles/a-titles', null, 
            array(
                'title'         => $category_name,
                'custom-css'    => 'm-card-cat__title',
                )
            ); 
            ?>
        </div>
        <div class="m-card-cat__desc">
            <?php echo "<p class='m-card-cat__short-desc'>$category_description</p>" ?>
        </div>
        <p class="m-card-cat__item">Item / Item 2 / item 3</p>
        </section>
    <footer class="m-card-cat__footer">
        <a href="<?php echo "./?entrenamiento=$category_slug" ; ?>" class="m-card-cat__link" href="">Ver todos</a>    
    </footer>
</archive>