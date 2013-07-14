<?

function hat_enqueue_scripts ()
{
    wp_enqueue_script ('hat-jquery', get_template_directory_uri () . '/scripts/vendor/jquery/jquery.js', array (), false, true);
    wp_enqueue_script ('hat-juery-ui', get_template_directory_uri () . '/scripts/vendor/jquery-ui/jquery-ui.js', array (), false, true);
    wp_enqueue_script ('hat-bootstrap', get_template_directory_uri () . '/scripts/vendor/bootstrap/js/bootstrap.js', array (), false, true);
    wp_enqueue_script ('hat-main', get_template_directory_uri () . '/scripts/main.js', array (), false, true);
}

add_action ('wp_enqueue_scripts', 'hat_enqueue_scripts');