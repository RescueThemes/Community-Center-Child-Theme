<?php

function communitycenter_enqueue_parent_theme_style() {
    wp_enqueue_style( 'communitycenter-parent-style', get_template_directory_uri().'/style.css' );
    wp_dequeue_style( 'rescue_style' );
    wp_enqueue_style( 'communitycenter-child-style', get_stylesheet_directory_uri().'/style.css' );
}
add_action( 'wp_enqueue_scripts', 'communitycenter_enqueue_parent_theme_style', 99 );