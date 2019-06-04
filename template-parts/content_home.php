<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bootatrap_template
 */

?>

<section class="slider pb-4">
	<div class="container">
		<div class="top_slider">
			<?php 
			$args = array( 
			    'type' => 'post',
			    'posts_per_page' => 6
			    );
			$lastBlog = new WP_Query( $args ); 

			if( $lastBlog->have_posts() ):	
			  while( $lastBlog->have_posts() ): $lastBlog->the_post();
				  if ( has_post_thumbnail() ) {
				  ?>
						<div class="slide position-relative">
							<div class="slide_image">
								<?php
									echo '<a href="', the_permalink(), '">';
									the_post_thumbnail( 'full' );
									echo '</a>';
								?>
							</div>
							<div class="slide_description bg-white p-4">
								<?php
									the_title( sprintf('<h3><a href="%s">', esc_url( get_permalink() ) ),'</a></h3>' );
								?>
								<div class="post_info">
									<?php
									if ( 'post' === get_post_type() ) : ?>
										<?php printf( __( 'by <span class="author">%s</span>' ), get_the_author_link() ); ?>
										<span class="date text-muted">
											at <?php printf( get_the_date() ); ?>
										</span>
									<?php
									endif; 
									?>
								</div>
							</div>
						</div>
				  <?php
				  }
			  endwhile;
			endif;

			wp_reset_postdata();      
			?>
		</div>
	</div>
</section>

<section id="home" class="container-fluid bg-light pt-4 pb-4">
	<div class="container">
		<div class="category-wrap">
			<h2 class="text-center mb-4">Рубрики</h2>
			<div class="container-fluid">
				<div class="row">
					<?php
						foreach( get_categories(['hide_empty' => false]) as $category) {
							if ( function_exists('get_wp_term_image') ) {
								echo '<div class="col-6 category_block">
									<div class="category_image">';
									
								echo '<img src="' .  get_wp_term_image($category->term_id) . '">';

								echo '</div>
									<div class="category_description">';
								echo '<h3><a class="btn btn-primary text-white" href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name . '</a></h3>';
								echo '</div></div>';
							};
						}
					?>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="recent_posts pt-4">
	<h2 class="text-center mb-4">Recent Posts</h2>
	<div class="container">
		<div class="container-fluid">
			<div class="posts_gallery pt-4">
				<?php
					$args = array( 'numberposts' => '6' );
					$recent_posts = wp_get_recent_posts( $args );
					foreach( $recent_posts as $recent ){
						echo '<div class="card card_slider">';
							if ( has_post_thumbnail( $recent["ID"]) ) {
								echo '<div class="card-image card-image">';
								echo  '<a href="' . get_permalink($recent["ID"]) . '">' . get_the_post_thumbnail( $recent["ID"], 'tumbnail') . '</a>';
								echo '</div>';
							}
						echo '<div class="card-body">';
						echo '<div class="card-data">
								<span class="text-muted">' . date('n.j.Y', strtotime($recent['post_date'])) .'</span>';
								?>
								<?php
									printf( __( 'by <span class="author">%s</span>' ), get_the_author_link() ); 
									echo '<span class="ml-3 comments"><i class="fas fa-comment mr-2"></i>' . get_comments_number($recent["ID"]) . '</span>';
								?>
							 <?
        				echo '</div>';
						echo '<h5 class="card-title"><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a></h3> ';
        				echo '</div></div>';
					}
				?>
			</div>
		</div>
	</div>
</section>