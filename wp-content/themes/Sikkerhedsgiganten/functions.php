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
function bst_load_resources() {
    wp_enqueue_style("main-css", get_template_directory_uri() . "/css/forside.css");
}
add_action("wp_enqueue_scripts", "bst_load_resources");
function disable_gutenberg() {
    remove_post_type_support('page', 'editor');

}
add_action('init', 'disable_gutenberg');
?>