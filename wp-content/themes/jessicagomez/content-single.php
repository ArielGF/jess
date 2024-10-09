<article id="post-<?php the_ID(); ?>" <?php post_class( 'large-post' ); ?>>
	<header class="entry-header text-center">
		<div class="post-in text-uppercase"><?php echo get_the_category_list( ', ' ) ?></div>
		content-single

		<?php the_title( sprintf( '<h2 class="entry-title">' ), '</h2>' ); ?>
	</header>

	<!-- Gallery Post -->
	<?php if ( has_post_format( 'gallery' ) ) : ?>

		<?php $images = get_post_meta( $post->ID, '_format_gallery_images', true ); ?>

		<?php if ( $images ) : ?>
			<div class="post-thumb">
				<div id="blog-gallery-slider" class="carousel slide" data-ride="carousel">
					<!-- Wrapper for slides -->
					<div class="carousel-inner">
						<?php $image_no = 1; ?>
						<?php foreach ( $images as $image ) : ?>
							<div class="item <?php if ( $image_no == 1 ) {
								echo 'active';
							}; ?>">
								<?php $the_image = wp_get_attachment_image_src( $image, 'zinnias-post-thumbnail' ); ?>
								<?php $the_caption = get_post_field( 'post_excerpt', $image ); ?>
								<img src="<?php echo esc_url( $the_image[0] ); ?>" <?php if ( $the_caption ) :
								?>title="<?php echo esc_attr( $the_caption ); ?>"<?php endif; ?> />
							</div>
							<?php $image_no ++ ?>
						<?php endforeach; ?>
					</div>
					<!-- Controls -->
					<a class="left carousel-control" href="#blog-gallery-slider" data-slide="prev">
						<i class="fa fa-angle-left"></i>
					</a>
					<a class="right carousel-control" href="#blog-gallery-slider" data-slide="next">
						<i class="fa fa-angle-right"></i>
					</a>
				</div>

				<div class="meta-overlay">
					<div class="overlay-meta-data pull-left">
						<span
							class="home-author"><?php _e( 'Escrito por ', 'jessicagomez' ); ?><?php the_author_posts_link(); ?></span>

						| <span class="home-on"><?php _e( 'El ', 'jessicagomez' ) ?><?php the_time( 'd/F/Y' ); ?></span>

						| <?php comments_number( '<span class="home-comment">' . __( '0 Comentarios', 'jessicagomez' ) .
						                         '</span>', __( '1 Cometario', 'jessicagomez' ), __( '% Comentarios', 'jessicagomez' ) ); ?>

					</div>
				</div>

			</div>
		<?php endif; ?>

		<!-- Video Post -->
	<?php elseif ( has_post_format( 'video' ) ) : ?>

		<div class="post-thumb">
			<div class="entry-video">
				<?php $st_video = get_post_meta( $post->ID, '_format_video_embed', true ); ?>
				<?php if ( wp_oembed_get( $st_video ) ) : ?>
					<?php echo wp_oembed_get( $st_video ); ?>
				<?php else : ?>
					<?php echo $st_video; ?>
				<?php endif; ?>
			</div>

			<div class="meta-overlay">
				<div class="overlay-meta-data pull-left">
					<span
						class="home-author"><?php _e( 'Escrito por ', 'jessicagomez' ); ?><?php the_author_posts_link(); ?></span>

					| <span class="home-on"><?php _e( 'El ', 'jessicagomez' ) ?><?php the_time( 'd/F/Y' ); ?></span>

					| <?php comments_number( '<span class="home-comment">' . __( '0 Comentarios', 'jessicagomez' ) .
					                         '</span>', __( '1 Comentario', 'jessicagomez' ), __( '% Comentarios', 'jessicagomez' ) ); ?>

				</div>
			</div>

		</div>

		<!-- Audio Post -->
	<?php elseif ( has_post_format( 'audio' ) ) : ?>

		<div class="post-thumb">
			<div class="entry-audio">
				<?php $st_audio = get_post_meta( $post->ID, '_format_audio_embed', true ); ?>
				<?php if ( wp_oembed_get( $st_audio ) ) : ?>
					<?php echo wp_oembed_get( $st_audio ); ?>
				<?php else : ?>
					<?php echo $st_audio; ?>
				<?php endif; ?>
			</div>
			<!--/.audio-content -->

			<div class="meta-overlay">
				<div class="overlay-meta-data pull-left">
					<span
						class="home-author"><?php _e( 'Escrito por ', 'jessicagomez' ); ?><?php the_author_posts_link(); ?></span>

					| <span class="home-on"><?php _e( 'El ', 'jessicagomez' ) ?><?php the_time( 'd/F/Y' ); ?></span>

					| <?php comments_number( '<span class="home-comment">' . __( '0 Comentarios', 'jessicagomez' ) .
					                         '</span>', __( '1 COmentario', 'jessicagomez' ), __( '% Comentarios', 'jessicagomez' ) ); ?>
				</div>
			</div>

		</div> <!--/.thumbnails -->

	<?php else : ?>

		<?php if ( has_post_thumbnail() ) : ?>
			<div class="post-thumb">
				<?php the_post_thumbnail( 'zinnias-post-thumbnail', array( 'class' => 'img-responsive' ) ); ?>

				<div class="meta-overlay">
					<div class="overlay-meta-data pull-left">
						<span
							class="home-author"><?php _e( 'Escrito por ', 'jessicagomez' ); ?><?php the_author_posts_link(); ?></span>

						| <span class="home-on"><?php _e( 'El ', 'jessicagomez' ) ?><?php the_time( 'd/F/Y' ); ?></span>

						| <?php comments_number( '<span class="home-comment">' . __( '0 Comentarios', 'jessicagomez' ) .
						                         '</span>', __( '1 Comentario', 'jessicagomez' ), __( '% Comentarios', 'jessicagomez' ) ); ?>

					</div>
				</div>

			</div>
		<?php endif; ?>

	<?php endif; ?>

	<div class="entry-content">
		<?php the_content(); ?>
	</div>

	<div class="single-post-meta text-uppercase">

		<?php
		jessicagomez_post_tag_list();
		?>
	</div>
	<!-- /.social share -->
</article>
