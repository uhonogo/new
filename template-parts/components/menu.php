<div id="site-navigation" class="main-navigation ml-auto">
	<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'bootatrap_template' ); ?></button>
	<nav class="navigation row m-0">
		<?php
		wp_nav_menu( array(
			'theme_location' => 'menu-1',
			'container'       => '', 
			'container_class' => '', 
			'menu_id'        => 'primary-menu',
			'menu_class'     => 'nav'
		) );
		?>
		<!-- search form BEGIN-->
		<div class="search-form ml-4">
			<?php
				get_search_form();
			?>
		</div>
		<!-- search form END-->
	</nav>
</div>