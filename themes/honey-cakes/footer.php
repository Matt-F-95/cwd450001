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
		<div class="carousel relative shadow-2xl bg-white">
	<div class="carousel-inner relative overflow-hidden w-full">
		<input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
		<div class="carousel-item absolute opacity-0" style="height:50vh;">
			<div class="block h-full w-full bg-yellow-400 bg-opacity-70 text-2xl text-black text-center"><h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
			
			<?php the_excerpt(); ?>
			<a href="<?php the_permalink() ?>">Read more &raquo;</a>
			</div>
		</div>
		<label for="carousel-3" class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
		<label for="carousel-2" class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>
		<!-- ./slide1 -->
	
		<input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
		<div class="carousel-item absolute opacity-0" style="height:50vh;">
			<div class="block h-full w-full bg-yellow-400 bg-opacity-70 text-black text-2xl text-center"><h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
			
			<?php the_excerpt(); ?>
			<a href="<?php the_permalink() ?>">Read more &raquo;</a></div>
		</div>
		<label for="carousel-1" class="prev control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
		<label for="carousel-3" class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label> 
		<!-- ./slide2 -->
		
		<input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
		<div class="carousel-item absolute opacity-0" style="height:50vh;">
			<div class="block h-full w-full bg-yellow-400 bg-opacity-70 text-black text-2xl text-center"><h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
		
			<?php the_excerpt(); ?>
			<a href="<?php the_permalink() ?>">Read more &raquo;</a></div>
		</div>
		<!-- ./slide3 -->
		<label for="carousel-2" class="prev control-3 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
		<label for="carousel-1" class="next control-3 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

		<ol class="carousel-indicators">
			<li class="inline-block mr-3">
				<label for="carousel-1" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-gray-700">•</label>
			</li>
			<li class="inline-block mr-3">
				<label for="carousel-2" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-gray-700">•</label>
			</li>
			<li class="inline-block mr-3">
				<label for="carousel-3" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-gray-700">•</label>
			</li>
		</ol>
		
	</div>
</div>

		<?php
	}
}

wp_reset_postdata();

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
