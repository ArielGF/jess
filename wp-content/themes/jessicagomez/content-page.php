<article id="post-<?php the_ID(); ?>" <?php post_class( 'large-post' ); ?>>
	<?php if(is_front_page()) { include get_template_directory() . '/components/portada/portada.php'; } ?>
	
	<h2><?php the_title() ?></h2>
	

	<?php if ( has_post_thumbnail() ) : ?>
		<div class="post-thumb">
			<?php the_post_thumbnail( 'zinnias-post-thumbnail', array( 'class' => 'img-responsive' ) ); ?>
		</div>
	<?php endif; ?>

	<div class="entry-content"> content-page
		content starts
		<?php the_content(); ?>
		content ends
		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'jessicagomez' ),
			'after'  => '</div>',
		) );
		?>
	</div>

	<?php wp_footer(); ?>

</article>
