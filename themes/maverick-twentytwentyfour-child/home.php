<?php
get_header(); ?>
<div class="custom-blog-home">
    <h1>Welcome to Our Blog</h1>
    <?php if (have_posts()) :
        while (have_posts()) : the_post(); ?>
            <article>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <p><?php the_excerpt(); ?></p>
            </article>
        <?php endwhile;
    else : ?>
        <p>No posts found.</p>
    <?php endif; ?>
</div>
<?php get_footer(); ?>