
<?php if (!function_exists('getLibroImage')) {
    function getLibroImage() {
        if ( has_post_thumbnail() ) {
            return esc_url(get_the_post_thumbnail_url(get_the_ID(), 'full'));
        } else {
            return null;
        }
    }
} ?>

<a href="<?php echo get_permalink(); ?>" class="c-libro">
    <div class=c-libro__card>
        <div class="c-libro__image"
             style="background-image: url('<?php echo getLibroImage() ?>')">
        </div>
        <div class="c-libro__title">
            <?php echo get_the_title(); ?>
        </div>
        <div class="c-libro__button">Ver más</div>
    </div>
</a>