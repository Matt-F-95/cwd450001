<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sample_Theme
 */

if ( ! is_active_sidebar( 'sidebar-post' ) ) {
	return;
}
if ( ! is_active_sidebar( 'sidebar-main' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'sidebar-post' ); ?>
	<?php dynamic_sidebar( 'sidebar-main' ); ?>
</aside><!-- #secondary -->
