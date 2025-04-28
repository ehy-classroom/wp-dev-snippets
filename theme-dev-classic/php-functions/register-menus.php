<?php

// Registrierung von Navigationsmenüs
function theme_dev_classic_register_menus() {
    register_nav_menus([
        'main' => __('Main Menu', 'theme-dev-classic'),
        'secondary' => __('Secondary Menu', 'theme-dev-classic'),
        'mobile' => __('Mobile Menu', 'theme-dev-classic'),
    ]);
}
add_action('after_setup_theme', 'theme_dev_classic_register_menus');