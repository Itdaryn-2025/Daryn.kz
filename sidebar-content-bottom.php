<?php
/**
 * The template for the content bottom widget areas on posts and pages
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

if ( ! is_active_sidebar( 'sidebar-2' ) && ! is_active_sidebar( 'sidebar-3' ) ) {
	return;
}

// If we get this far, we have widgets. Let's do this.
?>
<aside id="content-bottom-widgets" class="main row" role="complementary">
	<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
	<div class="widget-area col3 colxs100">
		<?php dynamic_sidebar( 'sidebar-2' ); ?>
	</div><!-- .widget-area -->
	<?php endif; ?>

	<?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
	<div class="widget-area col3 colxs100">
		<?php dynamic_sidebar( 'sidebar-3' ); ?>
	</div><!-- .widget-area -->
	
	<div class="widget-area col3 colxs100">
		<?php dynamic_sidebar( 'widget3' ); ?>
	</div><!-- .widget-area -->
	
	<div class="widget-area col3 colxs100">
		<?php dynamic_sidebar( 'widget4' ); ?>
	</div><!-- .widget-area -->
	
	<?php endif; ?>
</aside><!-- .content-bottom-widgets -->
