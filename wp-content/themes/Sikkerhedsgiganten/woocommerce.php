<?php get_header(); ?>

<?php if ( is_product() ) : ?>

<div class="product-layout">
    <?php woocommerce_content(); ?>
</div>

<?php else : ?>

<div class="shop-layout">
    <aside class="shop-sidebar">
        <div class="shop-sidebar__sticky">
            <?php
                the_widget( 'WC_Widget_Price_Filter' );
                echo do_shortcode('[woof_front_builder name="My filter form"]');
                ?>
        </div>
    </aside>
    <main class="shop-main">
        <?php woocommerce_content(); ?>
    </main>
</div>

<?php endif; ?>

<?php get_footer(); ?>