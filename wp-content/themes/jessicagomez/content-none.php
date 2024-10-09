<section class="no-results not-found">
		<h2 class="page-title"><?php _e( 'No hay publicaciones', 'jessicagomez' ); ?></h2>
	<!-- .page-header -->

	<div class="page-content">
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'jessicagomez'
				), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php elseif ( is_search() ) : ?>

			<p><?php _e( 'Parece que no podemos encontrar lo que estas buscando. Tal vez, continuar buscando pueda ayudar.', 'jessicagomez' ); ?></p>

		<?php else : ?>

			<p><?php _e( 'Parece que no podemos encontrar lo que estas buscando. Tal vez, continuar buscando pueda ayudar.', 'jessicagomez' ); ?></p>
			

		<?php endif; ?>
	</div>
	<!-- .page-content -->
</section><!-- .no-results -->