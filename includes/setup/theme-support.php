<?

$header = array(
    'flex-width'    => true,
    'width'         => 440,
    'flex-height'    => true,
    'height'        => 60,
    'default-image' => get_template_directory_uri() . '/images/header.png'
);

add_theme_support ('custom-header', $header);
add_theme_support ('post-thumbnails');
add_theme_support ('menus');
