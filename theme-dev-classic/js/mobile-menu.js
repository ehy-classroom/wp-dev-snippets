// Universales JavaScript für die Steuerung von Mobilmenüs
// Anleitung zur Verwendung:
// 1. HTML-Struktur:
//    <button class="menu-toggle">Menü</button>
//    <nav class="mobile-menu">
//        <ul>
//            <li><a href="#">Link 1</a></li>
//            <li><a href="#">Link 2</a></li>
//            <li><a href="#">Link 3</a></li>
//        </ul>
//    </nav>
//
// 2. CSS-Klassen:
//    - .menu-toggle: Der Button, der das Menü öffnet/schließt.
//    - .mobile-menu: Das Menü, das ein-/ausgeblendet wird.
//    - .is-open: Klasse, die hinzugefügt wird, wenn das Menü geöffnet ist. Diese Klasse sollte in CSS verwendet werden, um das Menü sichtbar zu machen.
//
// 3. Beispiel-CSS:
//    .mobile-menu {
//        display: none;
//    }
//    .mobile-menu.is-open {
//        display: block;
//    }
//
// 4. Integration in PHP:
//    - Stelle sicher, dass der Button und das Menü in deinem Template vorhanden sind, z. B. in `header.php`:
//      <button class="menu-toggle">Menü</button>
//      <nav class="mobile-menu">
//          <?php
//          wp_nav_menu([
//              'theme_location' => 'mobile',
//              'container' => 'ul',
//              'menu_class' => 'mobile-menu-list',
//          ]);
//          ?>
//      </nav>

(function() {
    const menuToggle = document.querySelector('.menu-toggle');
    const mobileMenu = document.querySelector('.mobile-menu');

    if (menuToggle && mobileMenu) {
        menuToggle.addEventListener('click', function() {
            mobileMenu.classList.toggle('is-open');
        });
    }
})();