<?php get_header() ?>
<div class="singlePart">
    <?php if(have_posts()): ?>
    <?php while(have_posts()): the_post() ?>

    <?php
			$title = get_the_title();
			$date = get_the_date();
			$author = get_the_author();
			$content = get_the_content();
			$categories = get_the_category();
			$tags = get_the_tags();
			?>
    <article>
        <h1 class="card-title"><?php echo esc_html($title); ?></h1>
        <p class="card-subtitle text-muted mb-3">
            <?php echo esc_html($date); ?> | <?php echo esc_html($author); ?> | Tags:

            <?php if($tags): ?>
            <?php foreach($tags as $tag): ?>
            <a href="<?php echo get_tag_link($tag->term_id); ?>"
                class="badge rounded-pill text-bg-primary"><?php echo $tag->name; ?></a>
            <?php endforeach; ?>
            <?php endif; ?>

        </p>
        <div class="card-text">
            <?php echo $content; ?>

        </div>
    </article>

    <?php if(comments_open() || get_comments_number()): ?>
    <?php comments_template(); ?>
    <?php endif; ?>

    <?php endwhile; ?>
    <?php endif; ?>
</div>
<?php get_footer() ?>