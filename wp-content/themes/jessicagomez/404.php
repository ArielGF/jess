<?php get_header(); ?>

<!-- main-content section start -->
<div class="main-content text-center">
	<div class="row">
		<div class="col-md-12 error-page">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<h3 class="text-uppercase"><?php _e( 'Oops, This Page Could Not Be Found!', 'zinnias_lite' ) ?></h3>

				<h2><?php _e( '404', 'zinnias_lite' ) ?></h2>
			</article>
		</div>
	</div>
</div>
<!-- main-content section end -->

<?php get_footer(); ?>
