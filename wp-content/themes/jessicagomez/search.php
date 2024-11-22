<?php get_header(); ?>

<div class="p-blog">
	<div class="p-blog__header">
        <div class="o-container">
            <div class="p-blog__header-wrapper">
                <h1><?php printf( __( 'Resultados de búsqueda para <i class="archive-name">"%s"</i>', 'jessicagomez' ),  get_search_query() ); ?></h1>
            </div>
        </div>
    </div>
	<div class="p-blog__posts">
		<div class="o-container">
			<?php if ( have_posts() ) { ?>
				<div class="p-blog__posts-wrapper">
					<?php while (have_posts()) : the_post();
						get_template_part('content', 'post');
					endwhile; ?>
					</div>
					<?php jessicagomez_posts_navigation();
				} else {
					get_template_part('content', 'none');
				} ?>
		</div>
	</div>
</div>
<?php get_sidebar(); ?>

<?php get_footer(); ?>

