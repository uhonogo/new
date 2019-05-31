<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package bootatrap_template
 */

get_header();
?>

	<section class="post_page">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md">
					<?php
					while ( have_posts() ) :
						the_post();

						get_template_part( 'template-parts/content-PostPage', get_post_type() );

						the_post_navigation();

						// If comments are open or we have at least one comment, load up the comment template.
						comments_template();

					endwhile; // End of the loop.
					?>
				</div>
				<?php get_sidebar(); ?>
			</div>

		</div><!-- #main -->
	</section><!-- #primary -->

<?php

get_footer();
