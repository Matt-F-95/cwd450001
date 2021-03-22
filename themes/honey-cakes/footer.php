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

<?php

$recipe_args = array(
	'post_type' => 'honeycakes_recipe',
	'posts_per_page' => 3,

);

$recipe_query = new WP_Query( $recipe_args ); 

if ( $recipe_query->have_posts() ) {
	while ( $recipe_query->have_posts() ) {
		$recipe_query->the_post();
		?>
		<div style="margin:0 auto;width:50%;" class="text-center">
		<h2 class="text-center"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
		<?php the_post_thumbnail(); ?>
		<?php the_excerpt(); ?>
		<a href="<?php the_permalink() ?>">Read more &raquo;</a>
		</div>
		<?php
	}
}

?>


</div> <!-- pagecontent -->
</div>
	<footer>
	<div class="flex flex-col align-center text-center sm:flex-row bg-yellow-100 shadow-2xl shadow-inner px-5 py-5 text-black">
	<div class="flex-1">
	<?php if( dynamic_sidebar('footer_widget_area_2') ) : else : endif; ?>
	</div>
	
	<div class="flex-1">
	<?php if( dynamic_sidebar('footer_widget_area') ) : else : endif; ?>
	</div>
	<div class="flex-1">
	<h2 class="text-2xl py-2 footer-widget-title-2">Shop</h2>
	<?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
	</div>
	<div class="flex-1">
	<!-- product categories? -->
	<?php if( dynamic_sidebar('footer_widget_area_3') ) : else : endif; ?>
	</div>
	</div>
	<div class="flex b-purple py-5 justify-center text-white">
	<small>Copyright HoneyCakes Bakery &copy; <?php echo gmdate( 'Y' ); ?> All Rights Reserved.</small>
	</div>
</footer>


<?php wp_footer(); ?>
</body>
</html>
