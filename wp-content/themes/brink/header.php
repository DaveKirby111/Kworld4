<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Kinetic
 */
$favicon = get_field('favicon', 'option');
$apple_icon = get_field('apple_icon', 'option');
?>

<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="apple-touch-icon" sizes="180x180" href="<?= ($apple_icon ? image_arr_to_url($apple_icon) : '/favicons/apple-touch-icon.png') ?>">
	<link rel="icon" type="image/png" sizes="32x32" href="<?= ($favicon ? image_arr_to_url($favicon) : '/favicons/apple-touch-icon.png') ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		<!-- <a class="skip-link screen-reader-text" href="#content" role="button" tabindex="0"><?php esc_html_e('Skip to content', 'kin'); ?></a> -->

		<?php get_template_part('template-parts/content', 'phone-and-nav'); ?>

		<?php

		$header_classes = '';

		if (is_front_page()) {

			if (get_field('enable_floating_header', 'option') === true) {
				$header_classes = 'floating';

				if (is_user_logged_in()) {
					$header_classes .= ' logged-in';
				}
			}
		}

		?>	


	

		<header id="masthead" class="site-header d-flex <?php echo $header_classes; ?>">

		<a href="javascript:void(0);" class="mobile-trigger" aria-label="Mobile Menu Toggle"><i class="fa fa-bars" aria-hidden="true" title="Menu"></i></a>

		<?php 

			if( function_exists('the_custom_logo')) {
				the_custom_logo();
			}

			?>


			<div class="container">

				<div class="row title">
					<div class="mobile col-12 col-lg-4 branding d-flex justify-content-between align-items-center title">
						<a href="<?php echo home_url(); ?>" class="logo screen" aria-label="Return to site home link"><?php get_logo('default_logo'); ?></a>
						<a href="<?php echo home_url(); ?>" class="logo print" aria-hidden="true"><?php get_logo('print_logo'); ?></a>
						
					</div>
					
				</div>
			</div>

		</header><!-- #masthead -->

		<div class="main-nav">
				<?php wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav right pt-4 pt-lg-0', 'container' => 'ul')); ?>

				<!-- <a href="javascript:void(0);" class="mobile-trigger" aria-label="Mobile Menu Toggle"><i class="fa fa-bars" aria-hidden="true" title="Menu"></i></a> -->
			</div>

			

		<div id="content" class="site-content main container-fluid d-flex min-vh-100">
