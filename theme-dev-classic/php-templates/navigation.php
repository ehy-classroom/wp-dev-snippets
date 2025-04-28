<nav>
    <?php
    // Hauptmenü anzeigen
    wp_nav_menu([
        'theme_location' => 'main',
        'container' => 'ul',
        'menu_class' => 'main-menu',
    ]);
    ?>
</nav>
<nav>
    <?php
    // Sekundäres Menü anzeigen
    wp_nav_menu([
        'theme_location' => 'secondary',
        'container' => 'ul',
        'menu_class' => 'secondary-menu',
    ]);
    ?>
</nav>
<nav>
    <?php
    // Mobiles Menü anzeigen
    wp_nav_menu([
        'theme_location' => 'mobile',
        'container' => 'ul',
        'menu_class' => 'mobile-menu',
    ]);
    ?>
</nav>