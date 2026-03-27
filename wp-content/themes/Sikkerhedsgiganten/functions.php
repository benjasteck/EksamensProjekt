<?php
function mytheme_enqueue_styles() {
    

    wp_enqueue_style(
        'global',
        get_template_directory_uri() . '/css/global.css',
        array(),
        false
    );
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_styles');
?>