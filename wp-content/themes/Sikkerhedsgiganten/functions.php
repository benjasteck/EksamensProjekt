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
    'gsap-scrolltrigger',
    'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js',
    array('gsap'),
    null,
    true
);

 wp_enqueue_script(
    'lenis',
    'https://cdn.jsdelivr.net/npm/lenis@1.1.18/dist/lenis.min.js',
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
    'gsap-forside',
    get_template_directory_uri() . '/js/gsapForside.js',
    array('gsap', 'gsap-scrolltrigger',),
    null,
    true
);

wp_enqueue_script(
        'buttonChange',
        get_template_directory_uri() . '/js/buttonChange.js',
        array(),
        null,
        true
    );

    // Example (ACF style - adjust if needed)
    $erhvervHero1 = get_field('erhvervHero1');
    $erhvervHero2 = get_field('erhvervHero2');
    $erhvervHero3 = get_field('erhvervHero3');
    $erhvervHero4 = get_field('erhvervHero4');
    $erhvervHero5 = get_field('erhvervHero5');

    wp_localize_script('gsap-forside', 'themeData', array(
        'erhvervHero1' => esc_url($erhvervHero1['url'] ?? ''),
        'erhvervHero2' => esc_url($erhvervHero2['url'] ?? ''),
        'erhvervHero3' => esc_url($erhvervHero3['url'] ?? ''),
        'erhvervHero4' => esc_url($erhvervHero4['url'] ?? ''),
        'erhvervHero5' => esc_url($erhvervHero5['url'] ?? ''),
    ));
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_scripts');


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

function shop_enable_woocommerce(){
    add_theme_support("woocommerce");
}
add_action("after_setup_theme", "shop_enable_woocommerce")
?>