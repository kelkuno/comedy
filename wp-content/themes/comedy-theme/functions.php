<?php

function comedy_files() {
    wp_enqueue_style('comedy_main_styles', get_theme_file_uri('/build/style-index.css'));
}

add_action('wp_enqueue_scripts','comedy_files');

function comedy_features() {
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'comedy_features');