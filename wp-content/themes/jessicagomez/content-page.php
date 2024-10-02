<article id="post-<?php the_ID(); ?>" <?php post_class( 'large-post' ); ?>>
	<header class="entry-header text-center">
		<?php the_title( sprintf( '<h2 class="entry-title text-uppercase">' ), '</h2>' ); ?>
	</header>

	<?php if ( has_post_thumbnail() ) : ?>
		<div class="post-thumb">
			<?php the_post_thumbnail( 'zinnias-post-thumbnail', array( 'class' => 'img-responsive' ) ); ?>
		</div>
	<?php endif; ?>

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'zinnias_lite' ),
			'after'  => '</div>',
		) );
		?>
	</div>

	<footer class="entry-footer">
		<?php edit_post_link( __( 'Edit', 'zinnias_lite' ), '<span class="edit-link">', '</span>' ); ?>
	</footer>
	<!-- .entry-footer -->

</article>
