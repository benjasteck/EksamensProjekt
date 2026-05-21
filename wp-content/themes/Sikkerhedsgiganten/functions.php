<?php
function mytheme_enqueue_styles() {

    // Load everywhere
    wp_enqueue_style(
        'global',
        get_template_directory_uri() . '/css/global.css'
    );
    wp_enqueue_style(
        'blogs',
        get_template_directory_uri() . '/css/blogs.css'
    );
    wp_enqueue_style(
        'single',
        get_template_directory_uri() . '/css/single.css'
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
    if (is_woocommerce() || is_cart() || is_checkout() || is_account_page()) {
        wp_enqueue_style(
            'contact',
            get_template_directory_uri() . '/css/woocommerce.css'
        );
    }
    if (is_account_page()) {
        wp_enqueue_style(
            'contact',
            get_template_directory_uri() . '/css/myaccount.css'
        );
    }
    if (is_checkout()) {
        wp_enqueue_style(
            'contact',
            get_template_directory_uri() . '/css/checkout.css'
        );
    }

      if ( get_post_type() == 'post' ) {
        wp_enqueue_style(
            'blogs',
            get_template_directory_uri() . '/css/blogs.css'
        );
    }

}
function mytheme_enqueue_scripts() {
    if ( is_checkout() ) {
        wp_enqueue_style(
            'checkout',
            get_template_directory_uri() . '/css/checkout.css'
        );
    }

    if ( is_account_page() ) {
        wp_enqueue_style(
            'myaccount',
            get_template_directory_uri() . '/css/myaccount.css'
        );
    }

    if ( is_home() ) {
    wp_enqueue_style(
        'blogs',
        get_template_directory_uri() . '/css/blogs.css'
    );
}

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
wp_enqueue_script(
    'husky-search',
    get_template_directory_uri() . '/js/search.js',
    [ 'jquery' ],
    '1.0.0',
    true
);

wp_localize_script( 'husky-search', 'huskySearch', [
    'ajaxUrl' => admin_url( 'admin-ajax.php' ),
    'nonce'   => wp_create_nonce( 'husky_search_nonce' ),
] );
wp_localize_script( 'your-main-script-handle', 'huskySearch', [
    'ajaxUrl' => admin_url( 'admin-ajax.php' ),
    'nonce'   => wp_create_nonce( 'husky_search_nonce' ),
] );

    // Example (ACF style - adjust if needed)
    $erhvervHero1 = get_field('erhverv_hero_2');
    $erhvervHero2 = get_field('erhverv_hero_3');
    $erhvervHero3 = get_field('erhverv_hero_4');
    $erhvervHero4 = get_field('erhverv_hero_5');
    $erhvervHero5 = get_field('erhverv_hero_6');

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
add_action("after_setup_theme", "shop_enable_woocommerce");
add_filter( 'woocommerce_loop_add_to_cart_link', '__return_empty_string' );

add_action( 'woocommerce_before_shop_loop_item_title', 'show_product_brand_image', 15 );
function show_product_brand_image() {
    $image = get_field( 'product_brand_img' );
    if ( ! $image ) return;
    echo '<div class="product-brand-logo">';
    echo '<img src="' . esc_url( $image['url'] ) . '" alt="brand logo">';
    echo '</div>';
}

add_action( 'woocommerce_after_shop_loop_item', 'price_row_open', 5 );
function price_row_open() {
    global $product;
    echo '<div class="price-row">';
    echo '<span class="price-row__price">' . $product->get_price_html() . '</span>';
    echo '<span class="price-row__vat">inkl. moms</span>';
    echo '</div>';
}

add_action( 'woocommerce_after_shop_loop_item', 'price_row_add_to_cart', 10 );
function price_row_add_to_cart() {
    global $product;
    echo '<a href="' . esc_url( $product->add_to_cart_url() ) . '" class="button add_to_cart_button">';
    echo esc_html__( 'Add to cart', 'woocommerce' );
    echo '</a>';
}

add_action( 'woocommerce_single_product_summary', 'show_brand_above_title', 1 );
function show_brand_above_title() {
    $terms = get_the_terms( get_the_ID(), 'product_brand' );
    if ( ! $terms || is_wp_error( $terms ) ) return;
    echo '<div class="single-product-brand">';
    echo '<a href="' . esc_url( get_term_link( $terms[0] ) ) . '">' . esc_html( $terms[0]->name ) . '</a>';
    echo '</div>';
}

// SKU just below title (title is priority 5)
add_action( 'woocommerce_single_product_summary', 'show_sku_below_title', 9 );
function show_sku_below_title() {
    global $product;
    $sku = $product->get_sku();
    if ( ! $sku ) return;
    echo '<div class="single-product-sku">SKU: ' . esc_html( $sku ) . '</div>';
}
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );

add_action( 'woocommerce_single_product_summary', 'show_single_price', 10 );
function show_single_price() {
    global $product;
    echo '<div class="single-product-price">' . $product->get_price_html() . ' <span class="single-product-price-extra"> (inkl. moms)</span></div>';
}
add_action( 'woocommerce_single_product_summary', 'show_stock_delivery', 11 );
function show_stock_delivery() {
    global $product;
    $stock = $product->get_stock_quantity();
    echo '<div class="single-product-stock">';
    echo $stock . ' på lager | Leveringstid 1-2 dage';
    echo '</div>';
}
add_action( 'woocommerce_single_product_summary', 'show_product_actions_block_open', 12 );
function show_product_actions_block_open() {
    echo '<div class="product-actions-block">';
}
add_filter( 'woocommerce_dropdown_variation_attribute_options_html', 'custom_variation_buttons', 10, 2 );
function custom_variation_buttons( $html, $args ) {
    $options   = $args['options'];
    $attribute = $args['attribute'];
    $product   = $args['product'];
    $selected  = isset( $_REQUEST[ 'attribute_' . sanitize_title( $attribute ) ] )
                 ? wc_clean( $_REQUEST[ 'attribute_' . sanitize_title( $attribute ) ] )
                 : $product->get_variation_default_attribute( $attribute );

    $html = '<div class="variation-buttons" data-attribute="' . esc_attr( sanitize_title( $attribute ) ) . '">';

    foreach ( $options as $option ) {
        $is_selected = sanitize_title( $option ) === sanitize_title( $selected );
        $html .= '<button type="button" class="variation-btn ' . ( $is_selected ? 'selected' : '' ) . '"
                    data-value="' . esc_attr( $option ) . '">'
                    . esc_html( $option ) .
                 '</button>';
    }

    $html .= '<select name="attribute_' . esc_attr( sanitize_title( $attribute ) ) . '" style="display:none">';
    foreach ( $options as $option ) {
        $html .= '<option value="' . esc_attr( $option ) . '" ' . selected( $selected, $option, false ) . '>' . esc_html( $option ) . '</option>';
    }
    $html .= '</select>';
    $html .= '</div>';

    return $html;
}

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 12 );



add_action( 'woocommerce_single_product_summary', 'show_test_product_link', 14 );
function show_test_product_link() {
    echo '<a href="#" class="test-product-link">Test produktet - Se butiksoplysninger</a>';
}

add_action( 'woocommerce_single_product_summary', 'show_pickup_info', 15 );
function show_pickup_info() {
    echo '<p class="pickup-info">Afhentning er tilgængelig på Lillebæltsvej 60A, Esbjerg</p>';
}

add_action( 'woocommerce_single_product_summary', 'show_ready_info', 16 );
function show_ready_info() {
    echo '<p class="ready-info">Normalt klar inden for 1-2 dage</p>';
}

add_action( 'woocommerce_single_product_summary', 'show_divider', 17 );
function show_divider() {
    echo '<div class="summary-divider"></div>';
}

add_action( 'woocommerce_single_product_summary', 'show_payment_icons', 18 );
function show_payment_icons() {
    echo '<div class="payment-icons">';
    $icons = [
        'visa'       => 'https://upload.wikimedia.org/wikipedia/commons/5/57/Visa_Inc._logo_%282014%E2%80%932021%29.svg',
        'mastercard' => 'https://upload.wikimedia.org/wikipedia/commons/2/2a/Mastercard-logo.svg',
        'mobilepay'  => 'https://upload.wikimedia.org/wikipedia/commons/f/fd/MobilePay_logo.svg',
        'paypal'     => 'https://upload.wikimedia.org/wikipedia/commons/b/b5/PayPal.svg',
        'klarna'     => 'https://upload.wikimedia.org/wikipedia/commons/4/40/Klarna_Payment_Badge.svg',
    ];
    foreach ( $icons as $name => $url ) {
        echo '<img src="' . esc_url( $url ) . '" alt="' . esc_attr( $name ) . '" class="payment-icon">';
    }
    echo '</div>';
}

add_action( 'woocommerce_single_product_summary', 'show_product_actions_block_close', 19 );
function show_product_actions_block_close() {
    echo '</div>';
}
add_action( 'wp_enqueue_scripts', function() {
    wp_enqueue_script( 'jquery' );
} );

add_action( 'woocommerce_account_wishlist_endpoint', function() {
    echo do_shortcode( '[yith_wcwl_wishlist]' );
} );

add_filter( 'woocommerce_account_menu_items', function( $items ) {
    $items['wishlist'] = 'Favoritter';
    return $items;
} );

add_action( 'init', function() {
    add_rewrite_endpoint( 'wishlist', EP_ROOT | EP_PAGES );
} );
add_action( 'wp_ajax_get_cart_count', 'get_cart_count_handler' );
add_action( 'wp_ajax_nopriv_get_cart_count', 'get_cart_count_handler' );
function get_cart_count_handler() {
    echo WC()->cart->get_cart_contents_count();
    wp_die();
}
add_action( 'wp_ajax_husky_live_search', 'husky_live_search_handler' );
add_action( 'wp_ajax_nopriv_husky_live_search', 'husky_live_search_handler' );

function husky_live_search_handler() {
    check_ajax_referer( 'husky_search_nonce', 'nonce' );

    $query = sanitize_text_field( $_POST['query'] );
    if ( strlen( $query ) < 2 ) wp_send_json_success( [] );

    $results = [];

    // ── Categories ───────────────────────────────────────
    $categories = get_terms( [
        'taxonomy'   => 'product_cat',
        'hide_empty' => true,
        'search'     => $query,
        'number'     => 3,
    ] );
    if ( $categories && ! is_wp_error( $categories ) ) {
        foreach ( $categories as $cat ) {
            $results['categories'][] = [
                'name' => $cat->name,
                'url'  => get_term_link( $cat ),
            ];
        }
    }

    // ── Brands ───────────────────────────────────────────
    $brands = get_terms( [
        'taxonomy'   => 'product_brand',
        'hide_empty' => true,
        'search'     => $query,
        'number'     => 3,
    ] );
    if ( $brands && ! is_wp_error( $brands ) ) {
        foreach ( $brands as $brand ) {
            $results['brands'][] = [
                'name' => $brand->name,
                'url'  => get_term_link( $brand ),
            ];
        }
    }

    // ── Products ─────────────────────────────────────────
    $products = new WP_Query( [
        'post_type'      => 'product',
        'post_status'    => 'publish',
        'posts_per_page' => 5,
        's'              => $query,
    ] );
    if ( $products->have_posts() ) {
        while ( $products->have_posts() ) {
            $products->the_post();
            global $product;
            $results['products'][] = [
                'name'  => get_the_title(),
                'url'   => get_permalink(),
                'price' => $product->get_price_html(),
                'thumb' => get_the_post_thumbnail_url( get_the_ID(), 'thumbnail' ),
            ];
        }
        wp_reset_postdata();
    }

    wp_send_json_success( $results );
}
?>