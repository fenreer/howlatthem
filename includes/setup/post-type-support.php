<?

function hat_add_post_type_support ()
{
    add_post_type_support ('page', 'excerpt');
}

add_action ('init', 'hat_add_post_type_support');