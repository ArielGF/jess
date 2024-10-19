<?php
$args = array(
    'post_type'      => 'libros',
    'posts_per_page' => -1,
);
$query = new WP_Query($args);
if ($query->have_posts()) { ?>
<div class="c-bloque-libros">
    <div class="o-container">
        <h2 class="c-bloque-libros__title">Libros</h2>
        <div class="c-bloque-libros__wrapper">
            <?php while ($query->have_posts()) { 
                $query->the_post();
                include get_template_directory() . '/components/libro/libro.php';
            } //endwhile
            wp_reset_postdata(); ?>
        </div>
    </div>
</div>
<?php } ?>