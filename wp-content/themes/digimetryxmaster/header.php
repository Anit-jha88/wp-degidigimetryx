<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<!-- Start Preloader Area -->
	<div class="preloader">
		<div class="loader">
			<div class="shadow"></div>
			<div class="box"></div>
		</div>
	</div>
	<!-- End Preloader Area -->

	<!-- Start Navbar Area -->
	<div class="navbar-area">
		<div class="techvio-responsive-nav">
			<div class="container">
				<div class="techvio-responsive-menu">
					<div class="logo">
						<a href="<?php echo home_url(); ?>">
							<img src="<?php echo get_field('header_logo_mobile_black_copy','options')['url']; ?>" class="white-logo" alt="<?php echo get_field('header_logo_mobile_black_copy','options')['alt']; ?>">
							<img src="<?php echo get_field('header_logo_mobile_black','options')['url']; ?>" class="black-logo" alt="<?php echo get_field('header_logo_mobile_black','options')['alt']; ?>">
						</a>
					</div>
				</div>
			</div>
		</div>

		<div class="techvio-nav">
			<div class="container">
				<nav class="navbar navbar-expand-md navbar-light">
					<a class="navbar-brand" href="<?php echo home_url(); ?>">
						<img src="<?php echo get_field('header_logo_white','options')['url']; ?>" class="white-logo" alt="<?php echo get_field('header_logo_white','options')['alt']; ?>">
						<img src="<?php echo get_field('header_logo_black','options')['url']; ?>" class="black-logo" alt="<?php echo get_field('header_logo_black','options')['alt']; ?>">
					</a>
					<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
						<ul class="navbar-nav">
							<?php
				  			if ( has_nav_menu( 'primary' ) ) {
				  				wp_nav_menu(
				  					array(
				  						'container'  => '',
				  						'items_wrap' => '%3$s',
				  						'theme_location' => 'primary',
				  					)
				  				);

				  			}
				  			?>
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</div>
	<!-- End Navbar Area -->
