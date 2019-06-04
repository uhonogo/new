<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bootatrap_template
 */

?>

<div class="card mb-4 card_archive">
	<div class="row m-0">
		<div class="col-12 col-md-6 p-0">
			<div class="card-image">
				<?php
					echo '<a href="', the_permalink(), '">';
					the_post_thumbnail( 'large' );
					echo '</a>';
					do_action( 'jandy_thumbnails_after_1' );
				?>
			</div>
		</div>
		<div class="col-12 col-md-6">
			<div class="card-body">	
				<?php
					echo '<h3 class="card-title"><a href="', the_permalink(), '">', the_title(), '</a></h3>';
				?>
				<div class="card-data">
					<span class="text-muted"><?php echo get_the_date( 'd m Y' ); ?></span>
					<?php
						printf( __( '/ <span class="author mr-1">%s</span>' ), get_the_author_link() ); 
						echo '/<span class="ml-1 comments"><i class="fas fa-comment mr-2"></i>' . get_comments_number() . '</span>';
					?>
				</div>
				<div class="card-text mb-3">
					<p>
						<?php echo my_excerpt( array( 'text' => $rrr, 'maxchar' => 165) );?>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
