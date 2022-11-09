<?php
// Template Name: Videos
?>

<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <main class="main">

            <h1>TESTE TESTE</h1>


        </main>

<?php endwhile;
endif; ?>

<?php get_footer(); ?>