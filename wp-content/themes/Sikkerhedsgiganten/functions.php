<?php
function mytheme_enqueue_styles() {

    // Load everywhere
    wp_enqueue_style(
        'global',
        get_template_directory_uri() . '/css/global.css'
    );

    // Only on homepage
    if (is_front_page()) {
        wp_enqueue_style(
            'home',
            get_template_directory_uri() . '/css/forside.css'
        );
    }

    // Only on contact page
    if (is_page('kundeservice')) {
        wp_enqueue_style(
            'contact',
            get_template_directory_uri() . '/css/kundeservice.css'
        );
    }

    if (is_page('erhvervside')) {
        wp_enqueue_style(
            'contact',
            get_template_directory_uri() . '/css/erhverv.css'
        );
    }
    

}
function mytheme_enqueue_scripts() {

    wp_enqueue_script(
        'gsap',
        'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js',
        array(),
        null,
        true
    );

    wp_enqueue_script(
        'animejs',
        'https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js',
        array(),
        null,
        true
    );

    wp_enqueue_script(
        'main-js',
        get_template_directory_uri() . '/js/main.js',
        array('gsap', 'animejs'),
        false,
        true
    );

    wp_enqueue_script(
        'gsap-js',
        get_template_directory_uri() . '/js/gsapForside.js',
        array(), // dependencies
        false,   // version
        true     // load in footer
    );
    wp_enqueue_script(
        'buttonChange',
        get_template_directory_uri() . '/js/buttonChange.js',
        array(), // dependencies
        false,   // version
        true     // load in footer
    );
}


add_action('wp_enqueue_scripts', 'mytheme_enqueue_styles');
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