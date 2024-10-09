<article id="post-<?php the_ID(); ?>"  class="c-post">
		<div class="c-post__category"> <?php echo get_the_category_list( ', ' ) ?> </div>		
		<?php if ( has_post_thumbnail()): ?>
			<div class="c-post__image" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)"></div>
		<?php endif; ?> 

		<h3 class="c-post__title"><?php the_title(); ?></h3>

		<div class="c-post__caption"> <?php echo wp_strip_all_tags(get_the_excerpt()) ?> </div>

	<a href="<?php echo esc_url( get_permalink() ); ?>" class="o-button--secondary">Leer artículo completo</a>
	
</article>
