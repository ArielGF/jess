<?php include('colaboracion-functions.php'); ?>

<div class="c-colaboracion">
    <?php if ( has_post_thumbnail() ) { ?>
        <div class="c-colaboracion__image"
             style="background-image: url('<?php echo getColabImage(); ?>')">
        </div>
    <?php } ?>
    <div class="c-colaboracion__content">
        <h3><?php echo get_the_title(); ?></h3>
        <div class="c-colaboracion__description">
            <a href="<?php echo esc_html(get_post_meta(get_the_ID(), '_colaboracion_ext-link', true)); ?>"
                rel="noopener noreferrer nofollow" target="_blank">
                <?php echo (getColabIcon() ? getColabIcon() : getDefaultIcon()); ?>
                <?php echo ucfirst(esc_html(get_post_meta(get_the_ID(), '_colabs_type', true))); ?>
            </a>
        </div>
        
        <a class="o-button--primary" href="<?php echo get_permalink(); ?>">Ver más</a>
    </div>
</div>
