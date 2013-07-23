<?

function hat_official_add_import_page ()
{
	add_submenu_page ('edit.php?post_type=official', __ ('Import Officials', 'hat'), __ ('Import Officials'), 'manage_options', 'import_officials', 'hat_official_view_import_page');
}

function hat_official_view_import_page ()
{
	require_once 'page-import-officials.php';
}

function hat_official_handle_request ()
{
	if (isset ($_POST ['hat-official-empty']) && isset ($_POST ['hat-official-empty-sure'])) {
		$nonce = $_REQUEST ['delete-official'];
		if (wp_verify_nonce ($nonce, 'delete')) {
			return hat_official_delete_all ();
		}
	}
	if (isset ($_POST ['hat-official-import'])) {
		$nonce = $_REQUEST ['import-official'];
		if (wp_verify_nonce ($nonce, 'import')) {
			return hat_official_do_import ();
		}
	}
	return false;
}

// FIXME: there has to be a better way to make this work
function hat_ignorantly_alpha_csv ($str)
{
	while (preg_match ('/"([^"]*)"/', $str)) {
		$str = preg_replace_callback ('/"([^"]*)"/', function  ($matches)
		{
			return str_replace (',', '', $matches [1]);
		}, $str);
	}
	return $str;
}

function hat_official_do_import ()
{
	if (isset ($_POST ['hat-official-import-field'])) {
		$officials = str_getcsv ($_POST ['hat-official-import-field'], PHP_EOL, '"');
		$keys = array (
			Official::META_NAME_FIRST,
			Official::META_NAME_LAST,
			Official::META_OFFICE_STATE,
			Official::META_OFFICE_PARTIES,
			Official::META_OFFICE_TITLE,
			Official::META_OFFICE_TYPE,
			Official::META_OFFICE_LEVEL,
			Official::META_DISTRICT,
			Official::META_DISTRICT_PHONE_1,
			Official::META_DISTRICT_PHONE_2,
			Official::META_DISTRICT_FAX_1,
			Official::META_DISTRICT_FAX_2,
			Official::META_DISTRICT_STREET,
			Official::META_DISTRICT_CITY,
			Official::META_DISTRICT_STATE,
			Official::META_DISTRICT_ZIP,
			Official::META_OFFICE_PHONE_1,
			Official::META_OFFICE_PHONE_2,
			Official::META_OFFICE_FAX_1,
			Official::META_OFFICE_FAX_2,
			Official::META_OFFICE_STREET,
			Official::META_OFFICE_CITY,
			Official::META_OFFICE_ZIP,
			Official::META_IDEOLOGY,
			Official::META_OPPOSES_CITIZENS_UNITED,
			Official::META_VOTE_RESOLUTION,
			Official::META_VOTE_SPONSOR,
			Official::META_VOTE_CONVENTION,
			Official::META_FEEDBACK_RATING
		);
		foreach ($officials as $official) {
			$official = str_getcsv (hat_ignorantly_alpha_csv ($official), ',', '"');
			$i = 0;
			$id = wp_insert_post (array (
				'post_type' => Official::POST_TYPE,
				'post_title' => $official [0] . ' ' . $official [1],
				'post_status' => 'publish' 
			));
			foreach ($official as $value) {
				$key = $keys [$i];
				update_post_meta ($id, $key, $value);
				$i ++;
			}
		}
		return __ ('Import successful.', 'hat');
	}
}

function hat_official_delete_all ()
{
	$posts = new WP_Query (array (
		'post_type' => Official::POST_TYPE,
		'posts_per_page' => - 1 
	));
	foreach ($posts->posts as $post) {
		wp_delete_post ($post->ID, true);
	}
	return __ ('Officials successfully deleted.', 'hat');
}

add_action ('admin_menu', 'hat_official_add_import_page');
