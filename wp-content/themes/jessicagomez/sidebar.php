<div class="c-sidebar">
    <div class="o-container" role="complementary">
        <?php get_search_form(); ?>
		<?php	
			$menu = get_nav_menu_locations()['destacados'];
			if ($menu) {
                echo '<div class="c-sidebar__wrapper">';
            echo '<h3 class="c-sidebar__title">Artículos destacados</h3>';
            echo '<ul>';
				foreach (wp_get_nav_menu_items($menu) as $item) {
					echo '<li><a href="'.esc_html($item->url).'">'.esc_html($item->title).'</a></li>';
				}
			}
            echo '</ul></div>';
		?>
        <?php
        $args = array(
            'post_type'      => 'post',
            'posts_per_page' => 5,
            'orderby'        => 'date',
            'order'          => 'DESC'
        );
        $recent_posts = new WP_Query($args);
        if ($recent_posts->have_posts()) :
            echo '<div class="c-sidebar__wrapper">';
            echo '<h3 class="c-sidebar__title">Últimos posts</h3>';
            echo '<ul>';
            while ($recent_posts->have_posts()) : $recent_posts->the_post();
                    ?>
                    <li>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </li>
                    <?php
            endwhile;
            echo '</ul>';
            echo '</div>';
            wp_reset_postdata();
        else :
            echo 'No hay posts recientes.';
        endif;?>
        <?php dynamic_sidebar('jessicagomez-blog-sidebar'); ?>
    </div>
</div>
