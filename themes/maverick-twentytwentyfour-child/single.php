<?php
get_header(); ?>
<div class="custom-single-post">
    <?php while (have_posts()) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <p>By <?php the_author(); ?> on <?php the_date(); ?></p>
        <div><?php the_content(); ?></div>
    <?php endwhile; ?>
</div>
<?php get_footer(); ?>