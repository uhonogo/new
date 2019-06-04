<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package bootatrap_template
 */

get_header();
?>

<section class="post_page mb-3">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md">

				<?php if ( have_posts() ) : ?>

					<h1 class="page-title">
						<?php
						/* translators: %s: search query. */
						printf( esc_html__( '%s', 'bootatrap_template' ), '<span>' . get_search_query() . '</span>' );
						?>
					</h1>

					<?php
					while ( have_posts() ) :
						the_post();

						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */
						get_template_part( 'template-parts/content', 'search' );

					endwhile;

					the_posts_navigation();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif;
				?>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
</section>
<?php
get_footer();
