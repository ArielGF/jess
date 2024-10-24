<article id="post-<?php the_ID(); ?>" <?php post_class( 'p-blog' ); ?>>
	<?php if(is_front_page()) {
		include get_template_directory() . '/page-home.php';
	} ?>
	
	<?php if(!is_front_page()) { ?>
		<div class="p-blog__header">
			<div class="o-container">
				<div class="p-blog__header-wrapper">
					<h1><?php the_title() ?></h1>
				</div>
			</div>
		</div>
	<?php } ?>

	<div class="p-blog__posts">
		<div class="o-container">
			<?php if ( has_post_thumbnail() ) : ?>
				<div class="post-thumb">
					<?php the_post_thumbnail( 'jessicagomez-post-thumbnail', array( 'class' => 'img-responsive' ) ); ?>
				</div>
			<?php endif; ?>

			<div class="entry-content">
				<?php the_content(); ?>

				<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'jessicagomez' ),
					'after'  => '</div>',
				) );
				?>
			</div>
		</div>
	</div>

	<?php wp_footer(); ?>

</article>
