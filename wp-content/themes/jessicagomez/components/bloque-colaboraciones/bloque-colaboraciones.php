<?php $logos = get_post_meta(get_the_ID(), 'colaboraciones_logos', true); ?>
    <?php if (!empty($logos)) { ?>
        <div class="c-bloque-colaboraciones">
            <div class="o-container">
                <h2 class="c-bloque-colaboraciones__title">Colaboraciones</h2>
                <div class="c-bloque-colaboraciones__wrapper">
                    <?php foreach ($logos as $logo) {
                        if (!empty($logo['image_id']) && !empty($logo['link'])) {
                            $image_url = wp_get_attachment_url($logo['image_id']); ?>
                            <a  class="c-bloque-colaboraciones__item"
                                href="<?php echo esc_url($logo['link']); ?>"
                                target="_blank"
                                style="background-image: url('<?php echo esc_url($image_url); ?>')"></a>
                        <?php }
                    } ?> 
                </div>
            </div>
        </div>
    <?php } ?>
</div>