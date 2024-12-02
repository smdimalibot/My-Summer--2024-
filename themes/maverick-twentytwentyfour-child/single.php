<?php get_header(); ?>

<article class="single-post">
    <h1><?php the_title(); ?></h1>
    <div class="post-meta">
        <span>By <?php the_author(); ?></span> | 
        <span><?php the_date(); ?></span>
    </div>
    <div class="featured-image">
        <?php the_post_thumbnail('large'); ?>
    </div>
    <div class="post-content">
        <?php the_content(); ?>
    </div>
    <div class="related-posts">
        <h3>Related Posts</h3>
        <?php
        $related = new WP_Query([
            'posts_per_page' => 3,
            'category__in'   => wp_get_post_categories(get_the_ID()),
            'post__not_in'   => [get_the_ID()]
        ]);
        if ($related->have_posts()) :
            while ($related->have_posts()) : $related->the_post(); ?>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            <?php endwhile;
            wp_reset_postdata();
        endif;
        ?>
    </div>
</article>

<?php get_footer(); ?>