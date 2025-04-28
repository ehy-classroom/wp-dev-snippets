<?php
// Theme Support Funktionen
function theme_dev_classic_setup() {
    // Standard Theme-Support-Funktionen
    // Unterstützung für Beitragsbilder
    add_theme_support('post-thumbnails');
    // Unterstützung für HTML5-Markup
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption']);
    // Unterstützung für dynamische Titel-Tags
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'theme_dev_classic_setup');

