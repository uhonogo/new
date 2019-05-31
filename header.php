<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bootatrap_template
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header id="masthead" class="fixed-top bg-white shadow">
		<div class="container">
			<div class="container-fluid">
				<div class="row">
					<?php the_custom_logo(); ?>

					<div id="site-navigation" class="main-navigation">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'bootatrap_template' ); ?></button>
						<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'container'       => 'nav', 
							'container_class' => 'navigation', 
							'menu_id'        => 'primary-menu',
							'menu_class'     => 'nav'
						) );
						?>
					</div><!-- #site-navigation -->
				</div>
			</div>
		</div>

	</header><!-- #masthead -->

	<main id="content" class="site-content">
		<div class="container1">
