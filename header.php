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
	<header id="masthead" class="fixed-top bg-white header shadow">
		<div class="container">
			<div class="row">
				<div class="logo">
					<?php the_custom_logo(); ?>
				</div>
				
				<?php
            		get_template_part('template-parts/components/menu');
            	?>
			</div>
		</div>

	</header><!-- #masthead -->

	<div class="bg-light">
		<div class="container">
			<?php get_breadcrumb(); ?>
		</div>
	</div>

	<div id="content" class="site-content container1">

