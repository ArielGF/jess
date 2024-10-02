<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
	<input type="search" placeholder="<?php echo esc_attr_x('Buscar', 'zinnias_lite'); ?>" value="<?php echo get_search_query(); ?>" name="s" id="s" />
	<input type="submit" class="search-submit" value="&#xf002;">
</form>