<?php 

/**
 * Atom: Tags
 * @param array $args
 */

    wp_enqueue_style('a-tags');
    $tags_chips = isset($args['tag']) ? $args['tag'] : '';
    $custom_class = isset($args['custom_class']) ? $args['custom_class'] : '';

 ?>

<?php if($tags_chips): ?>
    <div class="a-tags-iprogram__tag <?php echo $custom_class; ?>">
        <span class="a-tags-iprogram__tag-el"><?php echo $tags_chips; ?></span>
    </div>
<?php else: ?>

    <div class="a-tags-program-tags__content <?php echo $custom_class; ?>">
        <div class="a-tags-iprogram__tag">
            <span class="a-tags-iprogram__tag-el">100% virtual </span>
            <span class="a-tags-iprogram__tag-el">y en vivo</span>
        </div>
        <div class="a-tags-iprogram__tag a-tags-iprogram--secondary">
            <span class="a-tags-iprogram__tag-el">Tiempo completo </span>
            <span class="a-tags-iprogram__tag-el">o parcial</span>
        </div>
    </div>

<?php endif; ?>