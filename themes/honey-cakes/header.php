<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package honeycakes
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<script src="https://kit.fontawesome.com/374c297ca1.js" crossorigin="anonymous"></script>
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'honey-cakes' ); ?></a>

	<header id="masthead" class="site-header">
	<div class="topBar py-3 b-purple shadow-lg text-white px-5">
		<ul class="flex justify-between">
			<li><i class="fas fa-phone-alt"></i> 1-(647)-297-5219</li>
			<li><a class="text-white" href="https://www.instagram.com/lena100sweet" target="_blank"><i class="fab fa-instagram text-xl px-2 text-white"></i></a><a href="https://www.facebook.com/LenaHoneyCakes/" target="_blank"><i class="fab fa-facebook text-xl px-2 text-white"></i></a></li>
		</ul>
		</div>
		<div class="site-branding bg-yellow-100 py-10 text-center shadow-2xl shadow-inner">
		
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$honey_cakes_description = get_bloginfo( 'description', 'display' );
			if ( $honey_cakes_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $honey_cakes_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
			<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				honey_cakes_posted_on();
				honey_cakes_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->
		</div><!-- .site-branding -->
		
				
		<nav id="site-navigation" class="main-navigation py-3 b-purple">
			<button class="menu-toggle b-purple text-center text-white" aria-controls="primary-menu" aria-expanded="false"><i class="fas fa-bars py-3 px-3"><?php esc_html_e('', 'honey-cakes' ); ?></i></button>
			<div class="container mx-auto">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
			</div>
		</nav><!-- #site-navigation -->

		
		
	</header><!-- #masthead -->
