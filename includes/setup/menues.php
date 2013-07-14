<?

function hat_register_menues ()
{
    register_nav_menus (array (
        'main-nav' => __('Header Menu', 'hat'),
        'side-nav' => __('Sidebar Menu', 'hat'),
        'footer-menu-1' => __('Footer Menu 1', 'hat'),
        'footer-menu-2' => __('Footer Menu 2', 'hat'),
        'footer-menu-3' => __('Footer Menu 3', 'hat'),
        'footer-menu-4' => __('Footer Menu 4', 'hat')
    ));
}

add_action ('init', 'hat_register_menues');