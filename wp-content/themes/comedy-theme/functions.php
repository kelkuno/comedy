<?php

function comedy_files() {
    wp_enqueue_style('comedy_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts','comedy_files');