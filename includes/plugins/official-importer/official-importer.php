<?

function hat_official_add_import_page ()
{
    add_submenu_page ('edit.php?post_type=official', __('Import Officials', 'hat'), __('Import Officials'), 'manage_options', 'import_officials', 'hat_official_view_import_page');
}

function hat_official_view_import_page ()
{
    require_once 'page-import-officials.php';
}

function hat_official_handle_request ()
{
    if (isset ($_POST['hat-official-empty']) && isset ($_POST['hat-official-empty-sure'])) {
        $nonce = $_REQUEST['delete-official'];
        if (wp_verify_nonce ($nonce, 'delete')) {
            return hat_official_delete_all ();
        }
    }
    if (isset ($_POST['hat-official-import'])) {
        $nonce = $_REQUEST['import-official'];
        if (wp_verify_nonce ($nonce, 'import')) {
            return hat_official_do_import ();
        }
    }
    return false;
}

//FIXME: there has to be a better way to make this work
function hat_ignorantly_alpha_csv ($str)
{
    while (preg_match ('/"([^"]*)"/', $str)) {
        $str = preg_replace_callback(
            '/"([^"]*)"/',
            function($matches) {
                return str_replace(',', '', $matches[1]);
            },
            $str
        ); 
    }
    return $str;    
}

function hat_official_do_import ()
{
    if (isset ($_POST['hat-official-import-field'])) {
        $officials = str_getcsv ($_POST['hat-official-import-field'], PHP_EOL, '"');
        $keys = array (
            "official_id_official",
            "official_id_candidate",
            "official_id_office_state",
            "official_office_parties",
            "official_title",
            "official_first_name",
            "official_last_name",
            "official_district",
            "official_id_office_type",
            "official_id_office_level",
            "official_district_phone_1",
            "official_district_phone_2",
            "official_district_fax_1",
            "official_district_fax_2",
            "official_district_street",
            "official_district_city",
            "official_district_state",
            "official_district_zip",
            "official_capitol_phone_1",
            "official_capitol_phone_2",
            "official_capitol_fax_1",
            "official_capitol_fax_2",
            "official_office_street",
            "official_office_city",
            "official_office_state",
            "official_office_zip"
        );
        foreach ($officials as $official) {
            $official = str_getcsv (hat_ignorantly_alpha_csv ($official), ',', '"');
            $i = 0;
            $id = wp_insert_post (array (
                'post_type' => 'official',
                'post_title' => $official[5] . ' ' . $official[6],
                'post_status' => 'publish'
            ));
            foreach ($official as $value) {
                $key = $keys[$i];
                update_post_meta ($id, $key, $value);
                $i++;
            }
        }
        return __('Import successful.', 'hat');
    }
}

function hat_official_delete_all ()
{
    $posts = new WP_Query (array ('post_type' => 'official', 'posts_per_page' => -1));
    foreach ($posts->posts as $post) {
        wp_delete_post ($post->ID, true);
    }
    return __('Officials successfully deleted.', 'hat');
}

add_action ('admin_menu', 'hat_official_add_import_page');
