<?php
// Theme Support Funktionen
function theme_dev_classic_setup() {
    // Unterstützung für Beitragsbilder
    add_theme_support('post-thumbnails');
    // Unterstützung für HTML5-Markup
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption']);
    // Unterstützung für dynamische Titel-Tags
    add_theme_support('title-tag');
    // Unterstützung für benutzerdefiniertes Logo
    add_theme_support('custom-logo', [
        'height' => 100,
        'width' => 400,
        'flex-height' => true,
        'flex-width' => true,
    ]);
    // Unterstützung für benutzerdefinierten Hintergrund
    add_theme_support('custom-background', [
        'default-color' => 'ffffff',
        'default-image' => '',
    ]);
    // Unterstützung für Editor-Styles
    add_theme_support('editor-styles');
    add_editor_style('css/editor-style.css');
    // Unterstützung für responsive Embeds
    add_theme_support('responsive-embeds');
    // Unterstützung für WooCommerce
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'theme_dev_classic_setup');

