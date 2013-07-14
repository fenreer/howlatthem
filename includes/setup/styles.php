<?

function hat_enqueue_styles ()
{
    wp_enqueue_style ('hat-bootstrap', get_template_directory_uri () . '/scripts/vendor/bootstrap/css/bootstrap.css');
    wp_enqueue_style ('hat-jquery-ui', get_template_directory_uri () . '/scripts/vendor/jquery-ui/jquery-ui.css');
    wp_enqueue_style ('hat-main', get_template_directory_uri () . '/style.css');
}

add_action ('wp_enqueue_scripts', 'hat_enqueue_styles');

