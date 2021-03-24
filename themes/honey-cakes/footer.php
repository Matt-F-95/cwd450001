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
   'posts_per_page'         => 3,
   'post_type'              => 'honeycakes_recipe',
   'update_post_meta_cache' => false,
   'update_post_term_cache' => false,
);
$recipe_query = new WP_Query( $recipe_args ); 

?>
<div class="posts-carousel px-5">
   <?php
   if ( $recipe_query->have_posts() ) :
      while ( $recipe_query->have_posts() ) :
         $recipe_query->the_post();
         ?>
         <div class="card">
            <?php
            if ( has_post_thumbnail() ) {
				the_post_thumbnail();
				update_option( 'thumbnail_size_w', 160 );
				update_option( 'thumbnail_size_h', 160 );
            } else {
               ?>
               <img src="https://via.placeholder.com/510x340" class="w-100" alt="Card image cap">
               <?php
            }
            ?>
            <div class="card-body">
               <?php the_title( '<h3 class="card-title">', '</h3>' ); ?>
               <?php the_excerpt(); ?>
               <a href="<?php echo esc_url( get_the_permalink() ); ?>" class="">
                  <?php esc_html_e( 'Read more &raquo;', 'honey_cakes' ); ?>
               </a>
            </div>
         </div>
      <?php
      endwhile;
   endif;
   wp_reset_postdata();
   
   ?>
</div>









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
