<section class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title"><?php _e( 'No hay publicaciones', 'jessicagomez' ); ?></h1>
	</header>
	<!-- .page-header -->

	<div class="page-content">
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'jessicagomez'
				), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php elseif ( is_search() ) : ?>

			<p><?php _e( 'Parece que no podemos encontrar lo que estas buscando. Tal vez, continuar buscando pueda ayudar.', 'jessicagomez' ); ?></p>
			<?php get_search_form(); ?>

		<?php else : ?>

			<p><?php _e( 'Parece que no podemos encontrar lo que estas buscando. Tal vez, continuar buscando pueda ayudar.', 'jessicagomez' ); ?></p>
			<?php get_search_form(); ?>

		<?php endif; ?>
	</div>
	<!-- .page-content -->
</section><!-- .no-results -->