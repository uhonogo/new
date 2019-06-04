<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @author      NanoAgency
 * @link        http://nanoagency.co
 * @copyright   Copyright (c) 2015 NanoAgency
 * @license     GPL v2
 */

get_header(); ?>
<section class="error-404 not-found">
    <header class="page-header">
        <h1 class="title-page"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.','bootstrap_template' ); ?></h1>
    </header><!-- .page-header -->

    <div class="page-content">
        <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'bootstrap_template'); ?></p>
        <?php get_search_form(); ?>
    </div><!-- .page-content -->
</section><!-- .error-404 -->

<?php get_footer(); ?>
