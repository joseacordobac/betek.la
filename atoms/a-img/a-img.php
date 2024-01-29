<?php 

/** template part: a-img 
 * 
 * **/

 wp_enqueue_style('a-img');
 wp_enqueue_script('a-img');
 wp_enqueue_script('lighmodal');   
   
 $img_path = isset($args['src']) ? $args['src'] : '';
 $img_alt = isset($args['alt']) ? $args['alt'] : '';
 $internal_icon = isset($args['internal_icon']) ? $args['internal_icon'] : '';
 $custom_class = isset($args['class']) ? $args['class'] : '';
 $aspect_ratio = isset($args['aspect_ratio']) ? $args['aspect_ratio'] : '';
 $has_video = isset($args['has_video']) ? $args['has_video'] : false;
?>

<div class="a-img <?php echo $custom_class; ?>">
    <img class="a-img__img" src="<?php echo $img_path; ?>" alt="<?php echo $img_alt ?>" style="aspect-ratio:<?php echo $aspect_ratio; ?>" width="100" height="100" />
    
    <?php if($internal_icon && $has_video === false): ?>
        <img class="a-img__video-icon" src="<?php echo $internal_icon; ?>" alt="Play Icon" width="100" height="100" />
    <?php endif; ?> 

    <?php if($has_video && strlen($has_video) > 0): ?>
        <img class="a-img__video-icon" src="<?php echo $internal_icon; ?>" alt="Play Icon" width="100" height="100" />
    <?php endif; ?> 
</div>

<?php if($has_video): ?>
    <dialog class="a-img__dialog">
        <div class="a-img__dialog__title">
            <div class="a-img__dialog__close">X</div>
            <?php the_sub_field('url_video'); ?>
        </div>
        <div class="a-img__video-overlay"></div>
    </dialog>
<?php endif; ?>
