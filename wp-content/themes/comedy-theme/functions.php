<?php

function comedy_files() {
    wp_enqueue_style('comedy_main_styles', get_theme_file_uri('/build/style-index.css'));
}

add_action('wp_enqueue_scripts','comedy_files');