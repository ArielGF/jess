<article id="post-<?php the_ID(); ?>" class="c-content-single">
	<div class="c-content-single__categories">
		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#7C4F94" viewBox="0 0 256 256"><path d="M246.66,132.44,201,200.88A16,16,0,0,1,187.72,208H32a8,8,0,0,1-6.66-12.44L70.39,128l-45-67.56A8,8,0,0,1,32,48H187.72A16,16,0,0,1,201,55.12l45.63,68.44A8,8,0,0,1,246.66,132.44Z"></path></svg>
		<?php echo get_the_category_list( ', ' ) ?>
	</div>
		<!-- Video Post -->
	<?php if ( has_post_format( 'video' ) ) : ?>

		<div class="c-content-single__image">
			<div class="entry-video">
				<?php $st_video = get_post_meta( $post->ID, '_format_video_embed', true ); ?>
				<?php if ( wp_oembed_get( $st_video ) ) : ?>
					<?php echo wp_oembed_get( $st_video ); ?>
				<?php else : ?>
					<?php echo $st_video; ?>
				<?php endif; ?>
			</div>
		</div>

	<?php endif;?>
	

	<?php if ( has_post_thumbnail() ) : ?>
			<div class="c-content-single__image">
				<?php the_post_thumbnail( 'jessicagomez-post-thumbnail', array( 'class' => 'img-responsive' ) ); ?>
			</div>
			<span class="t-small">
				<i><?php _e( 'Escrito por ', 'jessicagomez' ); ?><?php the_author_posts_link(); ?>
				<?php _e( 'el ', 'jessicagomez' ) ?><?php the_time('j \d\e F \d\e Y'); ?>
				</i>
				| <?php comments_number( '<span class="home-comment">' . __( '0 Comentarios', 'jessicagomez' ) .
				'', __( '1 Comentario', 'jessicagomez' ), __( '% Comentarios', 'jessicagomez' ) ); ?>
			</span>
	<?php endif; ?>

	

	<div class="t-body">
		<?php the_content(); ?>
	</div>

	<div class="single-post-meta text-uppercase">
		<?php jessicagomez_post_tag_list(); ?>
	</div>

	<?php include(get_template_directory()."/components/rrss-links/rrss-links.php") ?>
</article>
