<?php get_header(); ?>

<?php
while(have_posts()) {
    the_post();
} ?>

<?php get_footer(); ?>