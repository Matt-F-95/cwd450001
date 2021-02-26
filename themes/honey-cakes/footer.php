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


	<!-- <footer id="colophon" class="site-footer b-purple">
		<div class="site-info">
	
		</div><!-- .site-info 
	</footer> -->

	

	<div class="flex flex-col align-center text-center sm:flex-row bg-yellow-100 shadow-2xl shadow-inner px-5 py-5 text-black">
	<div class="flex-1">
	<?php if( dynamic_sidebar('footer_widget_area_2') ) : else : endif; ?>
	</div>
	
	<div class="flex-1">
	<?php if( dynamic_sidebar('footer_widget_area') ) : else : endif; ?>
	</div>
	<div class="flex-1">
	<h2 class="text-2xl py-2">Shop</h2>
	<?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
	</div>
	<div class="flex-1">
	<!-- add links here -->
	
	</div>
	</div>
	<div class="flex b-purple py-5 justify-center text-white">
	<small>Copyright &copy; 2021 Honey Cakes Bakery. All Rights Reserved.</small>
	</div>
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
