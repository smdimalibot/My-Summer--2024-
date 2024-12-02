<?php get_header(); ?>

<div class="blog-home">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="blog-post">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('medium'); ?>
                <h2><?php the_title(); ?></h2>
            </a>
            <p><?php the_excerpt(); ?></p>
        </div>
    <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>