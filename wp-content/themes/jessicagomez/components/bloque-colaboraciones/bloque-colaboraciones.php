<?php
$args = array(
    'post_type'      => 'colaboraciones',
    'posts_per_page' => -1,
);
$query = new WP_Query($args);
if ($query->have_posts()) { ?>
<div class="c-bloque-colaboraciones">
    <div class="o-container">
        <h2 class="c-bloque-colaboraciones__title">Colaboraciones</h2>
        <div class="c-bloque-colaboraciones__wrapper">
            <?php while ($query->have_posts()) { 
                $query->the_post();
                include get_template_directory() . '/components/colaboracion/colaboracion.php';
            } //endwhile
            wp_reset_postdata(); ?>
        </div>
    </div>
</div>
<?php } ?>