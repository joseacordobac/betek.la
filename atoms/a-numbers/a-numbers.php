<?php 

// Template parts numbers

wp_enqueue_style('a-numbers');
wp_enqueue_script('a-numbers');

$number = isset($args['number']) ? $args['number'] : '';
$custom_class = isset($args['custom_class']) ? $args['custom_class'] : '';

?>

<h4 class="a-numbers <?php $custom_class; ?> js-a-numbers"><?php echo $number ?></h4>