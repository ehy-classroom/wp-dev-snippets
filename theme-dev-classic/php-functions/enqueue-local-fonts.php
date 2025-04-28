<?php
// Enqueue von lokalen Schriftarten
function enqueue_local_fonts() {
    wp_enqueue_style(
        'local-fonts',
        get_template_directory_uri() . '/assets/fonts/[font-ordner]/font-style.css',
        array(),
        null
    );
}
add_action('wp_enqueue_scripts', 'enqueue_local_fonts');