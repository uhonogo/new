<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bootatrap_template
 */

?>

<div class="card mb-4">
	<?php
		echo '<a href="', the_permalink(), '">';
		the_post_thumbnail( 'large' );
		echo '</a>';
		do_action( 'jandy_thumbnails_after_1' );
	?>
	<div class="card-body">
		<?php
			echo '<h3 class="card-title"><a href="', the_permalink(), '">', the_title(), '</a></h3>';
		?>
		
		<div class="card-text mb-3">
			<p>
				<?php echo my_excerpt( array( 'text' => $rrr, 'maxchar' => 165) );?>
			</p>
		</div>
		<?php echo '<a class="btn btn-primary text-white" href="', the_permalink(), '">Читать</a>';?>

			<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'jandy-com' ),
				'after'  => '</div>',
			) );
		?>
		<!-- <?php echo do_shortcode('[addtoany]'); ?> -->
	</div>
</div><!-- #post-<?php the_ID(); ?> -->
