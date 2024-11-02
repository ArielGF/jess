<?php
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 6, 
    'orderby'        => 'date',
    'order'          => 'DESC',
    'tax_query' => array(
        array(
            'taxonomy' => 'category',
            'field'    => 'slug',
            'terms'    => 'articulos',
        ),
    ),
);
$query = new WP_Query($args);
if ($query->have_posts()) { ?>

<article class="c-featured-articles">
    <div class="o-container">
        <h2 class="c-featured-articles__title">Artículos destacados</h2>
        <div class="c-featured-articles__posts-wrapper">
        <?php while ($query->have_posts()) { 
                $query->the_post();
                include get_template_directory() . '/content-post.php';
            } //endwhile
            wp_reset_postdata(); ?>
        </div>
        <?php
        $categoria = get_category_by_slug('articulos');
        if ($categoria) {
            $categoria_url = get_category_link($categoria->term_id);
            echo '<a href="' . esc_url($categoria_url) . '" class="o-button--primary">Ir a Artículos</a>';
        } ?>
    </div>
</article>
<?php } ?>