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
	<img class="hidden md:flex" width="200" height="200" src="http://cwd45001.local/wp-content/uploads/2021/02/honeycakes-logov2-2.png" alt="Honey Cakes Logo">
	</div>
	<div class="flex-1">
	<h2 class="text-2xl py-2">Newsletter</h2>
	<input type="text" placeholder="Email Address"></input><button class="bg-purple-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded">Sign up</button>
	</div>
	<div class="flex-1">
	<h2 class="text-2xl py-2">Shop</h2>
	<ol>
		<li><a href="#">Shop Archive</a></li>
		<li><a href="#">Cart</a></li>
		<li><a href="#">Checkout</a></li>
		<li><a href="#">My Account</a></li>
	</ol>
	</div>
	<div class="flex-1">
	<h2 class="text-2xl py-2">Quick Links</h2>
	<ol>
		<li><a href="#">Quick Link 1</a></li>
		<li><a href="#">Quick Link 2</a></li>
		<li><a href="#">Quick Link 3</a></li>
		<li><a href="#">Quick Link 4</a></li>
	</ol>
	</div>
	</div>
	<div class="flex b-purple py-5 justify-center text-white">
	<small>Copyright &copy; 2021 Honey Cakes Bakery. All Rights Reserved.</small>
	</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
