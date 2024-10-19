<?php wp_enqueue_script('rrss-links-js', get_template_directory_uri() . '/components/rrss-links/rrss-links.js'); ?>

<div class="c-rrss-links">
    <p class="t-body">¡Gracias por compartir!</p>
    <div class="c-rrss-links__wrapper">
        <a class="c-rrss-links__link--whatsapp" href="https://api.whatsapp.com/send?text=<?php echo get_permalink(); ?>"></a>
        <a class="c-rrss-links__link--twitter" href="https://twitter.com/intent/tweet?text=https%3A//<?php echo get_permalink(); ?>"></a>
        <a class="c-rrss-links__link--facebook" href="https://www.facebook.com/sharer/sharer.php?u=https%3A//<?php echo get_permalink(); ?>"></a>
        <a class="c-rrss-links__link--copy" onclick="copyToClipboard('<?php echo get_permalink(); ?>')"></a>
    </div>
</div>