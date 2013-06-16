<?php
/**
 * @package Frank
 */
?>
</div>
<?php if ( is_active_sidebar( 'widget-footer' ) ) : ?>
<div id="page-bottom">
	<footer id="page-footer" class="container" role="contentinfo">
		<div class="row">
		<?php if ( ! dynamic_sidebar( 'Footer' ) ) : ?>

		<?php endif; ?>
		</div>
	</footer>
</div>
<?php endif; ?>
<?php get_template_part( 'partials/scripts/defer-image-load' ); ?>
<?php wp_footer(); ?>
</body>
</html>