<?php get_header(); ?>

<div class="p-blog">
	<div class="p-blog__header">
		<div class="o-container">
			<div class="p-blog__header-wrapper">
				<?php
				jessicagomez_archive_title( '<h1>', '</h1>' );
				the_archive_description( '<div class="t-body">', '</div>' );
				?>
			</div>
		</div>
	</div>
	<div class="p-blog__posts">
		<div class="o-container">
			<div class="p-blog__posts-wrapper">
				<?php if ( have_posts() ) {
					while ( have_posts() ) : the_post();

						get_template_part( 'content', 'post' );

					endwhile;

					jessicagomez_posts_navigation();

				} else {

					get_template_part( 'content', 'none' );

				} ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
