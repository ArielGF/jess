<?php
try {
    if (have_posts()) {
        $title = get_the_title() ?: 'La chica del bañador verde';
        $description = get_the_excerpt() ?: 'Querida chica del bañador verde: soy la mujer de la toalla de al lado. Me gustaría decirte que me he fijado en ti.';
        $image = get_the_post_thumbnail_url() ?: 'https://jessicagomezautora.com/wp-content/uploads/2016/07/cropped-LOGO-3.png';
        $date = get_the_date('Y-m-d') ?: date('Y-m-d');
        $url = get_post_permalink() ?: 'https://jessicagomezautora.com/';
    } else {
        $title = 'La chica del bañador verde';
        $description = 'Querida chica del bañador verde: soy la mujer de la toalla de al lado. Me gustaría decirte que me he fijado en ti.';
        $image = 'https://jessicagomezautora.com/wp-content/uploads/2016/07/cropped-LOGO-3.png';
        $date = date('Y-m-d');
        $url = 'https://jessicagomezautora.com/';
    }
} catch (Exception $e) {
    $title = 'La chica del bañador verde';
    $description = 'Querida chica del bañador verde: soy la mujer de la toalla de al lado. Me gustaría decirte que me he fijado en ti.';
    $image = 'https://jessicagomezautora.com/wp-content/uploads/2016/07/cropped-LOGO-3.png';
    $date = date('Y-m-d');
    $url = 'https://jessicagomezautora.com/';
    return; 
} ?>
