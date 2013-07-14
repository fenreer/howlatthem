<?

function hat_register_sidebar () {

    register_sidebar (array (
        'name' => 'Main Sidebar',
        'id' => 'main-sidebar',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));

    register_sidebar (array (
        'name' => 'Footer Above',
        'id' => 'footer-above-sidebar',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));

    register_sidebar (array (
        'name' => 'Footer Block 1',
        'id' => 'footer-block-1',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));

    register_sidebar (array (
        'name' => 'Footer Block 2',
        'id' => 'footer-block-2',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));

    register_sidebar (array (
        'name' => 'Footer Block 3',
        'id' => 'footer-block-3',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));

    register_sidebar (array (
        'name' => 'Footer Block 4',
        'id' => 'footer-block-4',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));

    register_sidebar (array (
        'name' => 'Footer Below',
        'id' => 'footer-below-sidebar',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));

}

add_action ('widgets_init', 'hat_register_sidebar');