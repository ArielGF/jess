<?php
get_header();
?>

<div class="contenedor-descargas">
    <h1>Descargas Disponibles</h1>
    <ul class="lista-descargas">
        <?php
        $query = new WP_Query( array( 'post_type' => 'descargas' ) );
        if ( $query->have_posts() ) :
            while ( $query->have_posts() ) : $query->the_post();
                $archivo = get_post_meta( get_the_ID(), '_archivo_descarga', true );
                ?>
                <li>
                    <h2><?php the_title(); ?></h2>
                    <?php the_content(); ?>
                    <?php if ( $archivo ) : ?>
                        <a href="<?php echo esc_url( $archivo ); ?>" download class="boton-descarga">Descargar</a>
                    <?php endif; ?>
                </li>
                <?php
            endwhile;
            wp_reset_postdata();
        else :
            echo '<p>No hay descargas disponibles.</p>';
        endif;
        ?>
    </ul>
</div>

<?php
get_footer();
?>
