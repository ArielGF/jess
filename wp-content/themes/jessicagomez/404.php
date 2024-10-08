<?php get_header(); ?>

<div class="p-404">
	<div class="o-container">
		<article id="post-<?php the_ID(); ?>" class="p-404__wrapper">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/404.svg" class="p-404__image" />
			<h2><?php _e( '¡Vaya! Parece que la página que buscas no existe', 'jessicagomez' ) ?></h2>
		</article>
	</div>
</div>

<?php get_footer(); ?>
