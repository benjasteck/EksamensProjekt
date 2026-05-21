<?php get_header(); ?>
<section id="blogSection">
    <div class="blogSectionInner">
        <?php
        $blog_posts = new WP_Query([
            'post_type'      => 'post',
            'post_status'    => 'publish',
            'posts_per_page' => 7,
            'orderby'        => 'date',
            'order'          => 'DESC',
        ]);

        // Collect all posts into an array first
        $posts_data = [];
        while ( $blog_posts->have_posts() ) :
            $blog_posts->the_post();
            $posts_data[] = [
                'title'     => get_the_title(),
                'permalink' => get_permalink(),
                'excerpt'   => wp_trim_words( get_the_excerpt(), 20 ),
                'thumb'     => get_the_post_thumbnail_url( get_the_ID(), 'medium' ),
                'thumb_alt' => get_the_title(),
            ];
        endwhile;
        wp_reset_postdata();

        // Split: left gets ceil(n/2), right gets the rest
        $total      = count( $posts_data );
        $left_count = (int) ceil( $total / 2 );
        $left_posts  = array_slice( $posts_data, 0, $left_count );
        $right_posts = array_slice( $posts_data, $left_count );

        // Helper to render a post card
        $render_post = function( $post ) { ?>
        <div class="blogItem">
            <?php if ( $post['thumb'] ) : ?>
            <img src="<?php echo esc_url( $post['thumb'] ); ?>" alt="<?php echo esc_attr( $post['thumb_alt'] ); ?>">
            <?php endif; ?>
            <h3><?php echo esc_html( $post['title'] ); ?></h3>
            <p><?php echo esc_html( $post['excerpt'] ); ?></p>
            <a href="<?php echo esc_url( $post['permalink'] ); ?>">Læs blog</a>
        </div>
        <?php };
        ?>

        <div class="blogSectionInnerLeft">
            <div class="blogItem">
                <h2>Blog</h2>
                <p>Seneste nyt fra os</p>
            </div>

            <?php foreach ( $left_posts as $post ) : $render_post( $post ); endforeach; ?>
        </div>

        <div class="blogSectionInnerRight">
            <?php foreach ( $right_posts as $post ) : $render_post( $post ); endforeach; ?>

        </div>

    </div>
</section>
<?php get_footer(); ?>