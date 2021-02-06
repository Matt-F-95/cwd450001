<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package honeycakes
 */

?>

	<footer id="colophon" class="site-footer py-10 px-10 b-purple text-center text-white shadow-lg">
		<div class="site-info">
			<a class="white-text" href="<?php echo esc_url( __( 'https://wordpress.org/', 'honey-cakes' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'honey-cakes' ), 'WordPress' );
				
				?>
			</a>
			<span class="sep white-text"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'honey-cakes' ), 'honey-cakes', '<a class="white-text" href="https://mattfelton.com/">Matt Felton</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
