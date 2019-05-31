<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bootatrap_template
 */

get_header();

?>

	<section class="archive_page pb-4">
		<div class="container">
		<?php 
		// set the "paged" parameter (use 'page' if the query is on a static front page)
		
		if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				?>
			</header><!-- .page-header -->
			<div class="row">
				<div class="col-12 col-md row">
					<?php
					while (have_posts() ) : the_post();

						?>
						<div class="col-12 col-md-6 col-lg-4">
							<?php get_template_part( 'template-parts/content', get_post_type() ); ?>
						</div>
						<?php

					endwhile;
					?>
				</div>
				<?php get_sidebar(); ?>
			</div>

			<div class="pagination">
				<?php
				global $wp_query;

				$big = 999999999; // need an unlikely integer

				echo paginate_links( array(
					'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
					'format' => '?paged=%#%',
					'current' => max( 1, get_query_var('paged') ),
					'total' => $wp_query->max_num_pages
				) );
				?>
			</div>
			
			<?php

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</div><!-- #main -->
	</section><!-- #primary -->

<?php
wp_reset_query();
get_footer();
