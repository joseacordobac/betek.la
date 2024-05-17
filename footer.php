<?php
/**
 * Footer del tema.
 * @package betek
 */
?>
<script type="text/javascript" async src="https://d335luupugsy2.cloudfront.net/js/loader-scripts/bfb2a81d-51ca-4606-89d3-f8815f95ce96-loader.js" ></script>
</body>

<footer class="footer">
    <?php  get_template_part( 'organism/o-footer/o-footer', null, 
        array( 
            'class' => 'o-footer' 
        ) ); ?>
</footer>

<?php wp_footer(); ?>