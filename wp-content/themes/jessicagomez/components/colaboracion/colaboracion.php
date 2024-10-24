<?php if (!function_exists('getColabImage')) {
    function getColabImage() {
        if ( has_post_thumbnail() ) {
            return esc_url(get_the_post_thumbnail_url(get_the_ID(), 'full'));
        } else {
            return null;
        }
    }
}
if (!function_exists('getColabIcon')) {
    function getColabIcon() {
        $url = esc_html(get_post_meta(get_the_ID(), '_colaboracion_ext-link', true));
        $icon_map = [
            'spotify' => 'spotify.svg',
            'youtube' => 'youtube-icon.svg',  
            'twitter' => 'twitter-icon.svg',
        ];
        
        foreach($icon_map as $domain => $icon) {
            if(strpos($url, $domain) !== false) {
                $icon_path = get_template_directory().'/components/colaboracion/img/'.$icon;
                if (file_exists($icon_path)) {
                    return file_get_contents($icon_path);
                }
            }
        }

        return '';
    }
} ?>

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
                <?php echo getColabIcon(); ?>
                <?php echo ucfirst(esc_html(get_post_meta(get_the_ID(), '_colabs_type', true))); ?>
            </a>
        </div>
        
        <a class="o-button--secondary" href="<?php echo get_permalink(); ?>">Ver más</a>
    </div>
</div>
