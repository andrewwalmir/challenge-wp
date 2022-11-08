<?php get_header(); ?>

<main class="main">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php the_permalink() ?>
            <?php the_time('d M Y') ?>
            <?php the_post_thumbnail_url() ?>
            <?php the_title() ?>
        <?php endwhile; ?>

    <?php else : endif; ?>

</main>

<?php get_footer(); ?>