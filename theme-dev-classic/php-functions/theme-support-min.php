<?php
// Theme Support Funktionen
function theme_dev_classic_setup() {
    // Unterstützung für dynamische Titel-Tags
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'theme_dev_classic_setup');

