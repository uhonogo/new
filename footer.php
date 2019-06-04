<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bootatrap_template
 */

?>

		</div><!-- .content -->

	<footer id="footer" class="footer">
        <?php  if(is_active_sidebar( 'footer-top' )){ ?>
            <!--    Footer Top-->
            <div class="footer-top clearfix">
                <div class="container-full">
                     <?php dynamic_sidebar('footer-top'); ?>
                </div>
            </div>
        <?php }?>

        <!--    Footer center-->
        <?php  if(is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' )){ ?>
            <!--    Footer center-->
            <div class="footer-center clearfix">
                <div class="container">
                    <div class="container-inner">
                        <div class="row">
                            <div class="col-md-3 col-sm-6 col-12">
                                <?php dynamic_sidebar('footer-1'); ?>
                            </div>
                            <div class="col-md-3 col-sm-6 col-12">
                                <?php dynamic_sidebar('footer-2'); ?>
                            </div>
                            <div class="col-md-3 col-sm-6 col-12">
                                <?php dynamic_sidebar('footer-3'); ?>
                            </div>
                            <div class="col-md-3 col-sm-6 col-12">
                                <?php dynamic_sidebar('footer-4'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php }?>

        <!--    Footer bottom-->
        <div class="footer-bottom clearfix">
            <div class="container">
                <div class="container-inner">
                    <div class="row">

                        <div class="site-info">
							<a href="<?php echo esc_url( __( 'bootatrap_template' ) ); ?>">
								<?php
								/* translators: %s: CMS name, i.e. WordPress. */
								printf( esc_html__( 'Proudly powered by %s', 'bootatrap_template' ), 'WordPress' );
								?>
							</a>
							<span class="sep"> | </span>
								<?php
								/* translators: 1: Theme name, 2: Theme author. */
								printf( esc_html__( 'Theme: %1$s by %2$s.', 'bootatrap_template' ), 'bootatrap_template', 'yurii' );
								?>
						</div><!-- .site-info -->
                    </div>
                </div>
            </div>
        </div>


    </footer><!-- .site-footer -->
<?php wp_footer(); ?>

</body>
</html>
