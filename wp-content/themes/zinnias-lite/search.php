<?php get_header(); ?>

<div class="archive-header text-center">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="archive-title"><?php printf( __( 'Search Results by <span class="archive-name">%s</span>', 'zinnias_lite' ),  get_search_query() ); ?></div>
			</div>
		</div>
	</div>
</div><!-- .page-header -->

<!-- main-content section start -->
<div class="main-content">
	<div class="row">
		<div class="col-md-8">
			<?php if ( have_posts() ) {
				while (have_posts()) : the_post();

					get_template_part('content', 'post');

				endwhile;

				zinnias_lite_posts_navigation();

			} else {

				get_template_part('content', 'none');

			} ?>
		</div>

		<?php get_sidebar(); ?>

	</div>
</div>
<!-- main-content section end -->

<?php get_footer(); ?>

