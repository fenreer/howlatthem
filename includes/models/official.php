<?

class Official
{

	const POST_TYPE = 'official';
	
	const IMAGESIZE_AVATAR = 'official-avatar';
	
	const META_NAME_FIRST = 'name_first';
	const META_NAME_LAST = 'name_last';
	const META_OFFICE_STATE = 'office_state';
	const META_OFFICE_PARTIES = 'office_parties';
	const META_OFFICE_TITLE = 'office_title';
	const META_OFFICE_TYPE = 'office_type';
	const META_OFFICE_LEVEL = 'office_level';
	const META_DISTRICT = 'district';
	const META_DISTRICT_PHONE_1 = 'district_phone_1';
	const META_DISTRICT_PHONE_2 = 'district_phone_2';
	const META_DISTRICT_FAX_1 = 'district_fax_1';
	const META_DISTRICT_FAX_2 = 'district_fax_2';
	const META_DISTRICT_STREET = 'district_street';
	const META_DISTRICT_CITY = 'district_city';
	const META_DISTRICT_STATE = 'district_state';
	const META_DISTRICT_ZIP = 'district_zip';
	const META_OFFICE_PHONE_1 = 'office_phone_1';
	const META_OFFICE_PHONE_2 = 'office_phone_2';
	const META_OFFICE_FAX_1 = 'office_fax_1';
	const META_OFFICE_FAX_2 = 'office_fax_2';
	const META_OFFICE_STREET = 'office_street';
	const META_OFFICE_CITY = 'office_city';
	const META_OFFICE_ZIP = 'office_zip';
	const META_IDEOLOGY = 'ideology';
	const META_OPPOSES_CITIZENS_UNITED = 'opposes_citizens_united';
	const META_VOTE_RESOLUTION = 'vote_resolution';
	const META_VOTE_SPONSOR = 'vote_sponsor';
	const META_VOTE_CONVENTION = 'vote_convention';
	const META_FEEDBACK_RATING = 'feedback_rating';
	
	public $meta_boxes = array ();

	public static function add_image_size ()
	{
		add_image_size (self::IMAGESIZE_AVATAR, 200, 126, true);
	}

	public static function register_post_type ()
	{
		$labels = array (
			'singular_name' => __ ('Official', 'hat'),
			'add_new_item' => __ ('New Official', 'hat'),
			'add_new' => __ ('New Official', 'hat'),
			'edit_item' => __ ('Edit Official', 'hat'),
			'new_item' => __ ('New Official', 'hat'),
			'all_items' => __ ('All Officials', 'hat'),
			'view_item' => __ ('View Official', 'hat'),
			'search_items' => __ ('Search Officials', 'hat'),
			'not_found' => __ ('No Officials found', 'hat'),
			'not_found_in_trash' => __ ('No Officials found in Trash', 'hat'),
			'parent_item_colon' => '' 
		);
		
		$args = array (
			'label' => __ ('Officials', 'hat'),
			'labels' => $labels,
			'public' => true,
			'has_archive' => true,
			'supports' => array (
				'title',
				'thumbnail',
				'excerpt',
				'comments' 
			) 
		);
		
		register_post_type (self::POST_TYPE, $args);
	}

	public static function register_meta_boxes ()
	{
		if (! class_exists ('RW_Meta_box')) {
			return;
		}
		return new RW_Meta_box (array (
			'id' => 'officials_information',
			'title' => __ ('Official Information', 'hat'),
			'pages' => array (
				'official' 
			),
			'context' => 'normal',
			'priority' => 'high',
			'autosave' => true,
			'fields' => array (
				array (
					'name' => __ ('Level of Support', 'hat'),
					'id' => 'official_support',
					'type' => 'text' 
				),
				array (
					'name' => __ ('Candidate ID', 'hat'),
					'id' => "official_id_candidate",
					'type' => 'text' 
				),
				array (
					'name' => __ ('Office State ID', 'hat'),
					'id' => "official_id_office_state",
					'type' => 'text' 
				),
				array (
					'name' => __ ('Office Parties', 'hat'),
					'id' => "official_office_parties",
					'type' => 'text' 
				),
				array (
					'name' => __ ('Title', 'hat'),
					'id' => "official_title",
					'type' => 'text' 
				),
				array (
					'name' => __ ('First Name', 'hat'),
					'id' => "official_first_name",
					'type' => 'text' 
				),
				array (
					'name' => __ ('Last Name', 'hat'),
					'id' => "official_last_name",
					'type' => 'text' 
				),
				array (
					'name' => __ ('District', 'hat'),
					'id' => "official_district",
					'type' => 'text' 
				),
				array (
					'name' => __ ('Office Type ID', 'hat'),
					'id' => "official_id_office_type",
					'type' => 'text' 
				),
				array (
					'name' => __ ('Office Level ID', 'hat'),
					'id' => "official_id_office_level",
					'type' => 'text' 
				),
				array (
					'name' => __ ('District Phone 1', 'hat'),
					'id' => "official_district_phone_1",
					'type' => 'text' 
				),
				array (
					'name' => __ ('District Phone 2', 'hat'),
					'id' => "official_district_phone_2",
					'type' => 'text' 
				),
				array (
					'name' => __ ('District Fax 1', 'hat'),
					'id' => "official_district_fax_1",
					'type' => 'text' 
				),
				array (
					'name' => __ ('District Fax 2', 'hat'),
					'id' => "official_district_fax_2",
					'type' => 'text' 
				),
				array (
					'name' => __ ('District Street', 'hat'),
					'id' => "official_district_street",
					'type' => 'text' 
				),
				array (
					'name' => __ ('District City', 'hat'),
					'id' => "official_district_city",
					'type' => 'text' 
				),
				array (
					'name' => __ ('District State', 'hat'),
					'id' => "official_district_state",
					'type' => 'text' 
				),
				array (
					'name' => __ ('District Zip', 'hat'),
					'id' => "official_district_zip",
					'type' => 'text' 
				),
				array (
					'name' => __ ('Capitol Phone 1', 'hat'),
					'id' => "official_capitol_phone_1",
					'type' => 'text' 
				),
				array (
					'name' => __ ('Capitol Phone 2', 'hat'),
					'id' => "official_capitol_phone_2",
					'type' => 'text' 
				),
				array (
					'name' => __ ('Capitol Fax 1', 'hat'),
					'id' => "official_capitol_fax_1",
					'type' => 'text' 
				),
				array (
					'name' => __ ('Capitol Fax 2', 'hat'),
					'id' => "official_capitol_fax_2",
					'type' => 'text' 
				),
				array (
					'name' => __ ('Office Street', 'hat'),
					'id' => "official_office_street",
					'type' => 'text' 
				),
				array (
					'name' => __ ('Office City', 'hat'),
					'id' => "official_office_city",
					'type' => 'text' 
				),
				array (
					'name' => __ ('Office State', 'hat'),
					'id' => "official_office_state",
					'type' => 'text' 
				),
				array (
					'name' => __ ('Office Zip', 'hat'),
					'id' => "official_office_zip",
					'type' => 'text' 
				) 
			) 
		));
	}

	//FIXME: new ids
	public static function filter_query_vars ($vars)
	{
		$vars [] = 'official_filter';
		$vars [] = 'official_first_name';
		$vars [] = 'official_last_name';
		$vars [] = 'official_title';
		$vars [] = 'official_office_city';
		$vars [] = 'official_id_office_state';
		$vars [] = 'official_district';
		$vars [] = 'paged';
		return $vars;
	}

	public static function filter_post_query ($query)
	{
		if (is_post_type_archive (self::POST_TYPE) && $query->is_main_query ()) {
			return self::filter_archive ($query);
		}
		return $query;
	}

	//FIXME: new ids
	public static function filter_archive ($query)
	{
		global $wpdb;
		
		$meta = array ();
		
		if (get_query_var ('official_first_name')) {
			$meta [] = array (
				'key' => 'official_first_name',
				'value' => $wpdb->escape (like_escape (get_query_var ('official_first_name'))),
				'compare' => 'LIKE' 
			);
		}
		
		if (get_query_var ('official_last_name')) {
			$meta [] = array (
				'key' => 'official_last_name',
				'value' => $wpdb->escape (like_escape (get_query_var ('official_last_name'))),
				'compare' => 'LIKE' 
			);
		}
		
		if (get_query_var ('official_title')) {
			$meta [] = array (
				'key' => 'official_title',
				'value' => $wpdb->escape (like_escape (get_query_var ('official_title'))),
				'compare' => 'LIKE' 
			);
		}
		
		if (get_query_var ('official_id_office_state')) {
			$meta [] = array (
				'key' => 'official_id_office_state',
				'value' => $wpdb->escape (like_escape (get_query_var ('official_id_office_state'))),
				'compare' => 'LIKE' 
			);
		}
		
		if (get_query_var ('official_office_city')) {
			$meta [] = array (
				'key' => 'official_office_city',
				'value' => $wpdb->escape (like_escape (get_query_var ('official_office_city'))),
				'compare' => 'LIKE' 
			);
		}
		
		if (get_query_var ('official_district')) {
			$meta [] = array (
				'key' => 'official_district',
				'value' => $wpdb->escape (like_escape (get_query_var ('official_district'))),
				'compare' => '=' 
			);
		}
		
		if (count ($meta) > 0) {
			$query->set ('meta_query', $meta);
		}
		
		$query->set ('posts_per_archive_page', get_option ('hat-official-ppp', 40));
		
		return $query;
	}

}

add_action ('init', 'Official::register_post_type');
add_action ('admin_init', 'Official::register_meta_boxes');
add_filter ('query_vars', 'Official::filter_query_vars');
add_filter ('pre_get_posts', 'Official::filter_post_query');