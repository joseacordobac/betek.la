<?php 
  /**
   * template part: habilities
   * 
   */

   wp_enqueue_style('m-habilities-list');
?>

<div class="m-habilities-list__tech-hum">

<?php if(get_sub_field('titulo_tecnologias') || have_rows('habilities_list')): ?>
  <div class="m-habilities-list__column">
    <h4 class="habilitites__title"><?php the_sub_field('titulo_tecnologias'); ?></h4>
    <ul class="habilities-logos">
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
          <li class="m-habilities-list__text"><?php the_sub_field('hability_name_tool'); ?></li>
        <?php endif; ?>
      <?php endwhile; ?>

    </ul>
  </div>
<?php endif; ?>
  
<?php if(get_sub_field('title_perfil') || have_rows('profile')): ?>
  <div class="m-habilities-list__column">     
    <h4 class="habilitites__title"><?php the_sub_field('title_perfil'); ?></h4>
    <ul class="habilities-skills">
      <?php while(have_rows('profile')): the_row(); ?>
        <li class="o-tabs__text"><?php the_sub_field('skill'); ?></li>
      <?php endwhile; ?>
    </ul>
  </div>
<?php endif; ?>

</div>