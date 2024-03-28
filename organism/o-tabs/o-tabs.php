<?php 
  
    /**
     * @param array $args
     * O-tabs
     */

    wp_enqueue_style('o-tabs');
    wp_enqueue_script('o-tabs'); 

    $repeater = isset($args['repeater']) ? $args['repeater'] : null;
    $custom_css = isset($args['custom-css']) ? $args['custom-css'] : null;
?>

<div class="o-tabs <?php echo $custom_css; ?>">
  <div class="o-tabs__nav">
    <?php 
    $count = 0;
    while( have_rows($repeater) ) : the_row(); ?>
      <span class="o-tabs__item <?php if($count == 0) echo 'o-tabs__item--active'; ?>" data-tab="tab-<?php echo $count; ?>">
        <?php the_sub_field('hability_title'); ?>
      </span>
    <?php  $count++; endwhile; ?>
    </div>

    <?php 
    $count = 0;
    while( have_rows($repeater) ) : the_row(); ?>
    <div class="o-tabs__body <?php if($count == 0) echo 'o-tabs__body--active'; ?>" id="tab-<?php echo $count; ?>">
      <?php while( have_rows('habilities_list') ) : the_row(); ?>
        
        <?php 
          if(get_sub_field('logo')):
          get_template_part('/atoms/a-img/a-img', null,
              array(
                  'image_id' => get_sub_field('logo'),
                  'image_size' => 'medium',
                  'alt' => 'betek',
                  'class' => 'tools-img',
              ));
          endif;
        ?>

        <?php if(get_sub_field('hability_name_tool')): ?>
          <p class="o-tabs__text"><?php the_sub_field('hability_name_tool'); ?></p>
        <?php endif; ?>

      <?php endwhile; ?>
    </div>
    <?php $count++; endwhile; ?>

  </div>