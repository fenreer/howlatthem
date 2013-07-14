<? 

function hat_login_logo_url() 
{
    return get_bloginfo ('url');
}

add_filter ('login_headerurl', 'hat_login_logo_url');

function hat_login_logo_url_title() 
{
    return get_bloginfo ('name') . ': ' . get_bloginfo ('description');
}

add_filter ('login_headertitle', 'hat_login_logo_url_title');

function hat_login_stylesheet() 
{ 
?>
<link rel="stylesheet" href="<?= get_bloginfo ('stylesheet_directory') . '/login.css'; ?>" />
<?
}

add_action ('login_enqueue_scripts', 'hat_login_stylesheet');