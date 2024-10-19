<a href="<?php echo get_permalink(); ?>" class="c-libro">
    <div class=c-libro__card>
        <?php if ( has_post_thumbnail() ) { ?>
            <div class="c-libro__image"
                 style="background-image: url('<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'full')); ?>')">
            </div>
        <?php } ?>
        <div class="c-libro__title">
            <?php echo get_the_title(); ?>
        </div>
        <div class="c-libro__button">Ver más</div>
    </div>
</a>