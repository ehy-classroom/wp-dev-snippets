<?php
// Enqueue von CSS und JS
function theme_dev_classic_enqueue_scripts() {
    // Haupt-CSS-Datei
    wp_enqueue_style('theme-dev-classic-style', get_stylesheet_uri());

    // Haupt-JS-Datei
    wp_enqueue_script('theme-dev-classic-script', get_template_directory_uri() . '/js/main.js', [], false, true);
}
add_action('wp_enqueue_scripts', 'theme_dev_classic_enqueue_scripts');
