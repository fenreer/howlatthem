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
					'name' => __ ('First name', 'hat'),
					'id' => self::META_NAME_FIRST,
					'type' => 'text'
				),
				array (
					'name' => __ ('Last name', 'hat'),
					'id' => self::META_NAME_LAST,
					'type' => 'text'
				),
				array (
					'name' => __ ('Office Parties', 'hat'),
					'id' => self::META_OFFICE_PARTIES,
					'type' => 'text'
				),
				array (
					'name' => __ ('Title', 'hat'),
					'id' => self::META_OFFICE_TITLE,
					'type' => 'text'
				),
				array (
					'name' => __ ('Office type', 'hat'),
					'id' => self::META_OFFICE_TYPE,
					'type' => 'text'
				),
				array (
					'name' => __ ('Office level', 'hat'),
					'id' => self::META_OFFICE_LEVEL,
					'type' => 'text'
				),
				array (
					'name' => __ ('District', 'hat'),
					'id' => self::META_DISTRICT,
					'type' => 'text'
				),
				array (
					'name' => __ ('District phone 1', 'hat'),
					'id' => self::META_DISTRICT_PHONE_1,
					'type' => 'text'
				),
				array (
					'name' => __ ('District phone 2', 'hat'),
					'id' => self::META_DISTRICT_PHONE_2,
					'type' => 'text'
				),
				array (
					'name' => __ ('District  fax 1', 'hat'),
					'id' => self::META_DISTRICT_FAX_1,
					'type' => 'text'
				),
				array (
					'name' => __ ('District fax 2', 'hat'),
					'id' => self::META_DISTRICT_FAX_2,
					'type' => 'text'
				),
				array (
					'name' => __ ('District street', 'hat'),
					'id' => self::META_DISTRICT_STREET,
					'type' => 'text'
				),
				array (
					'name' => __ ('District city', 'hat'),
					'id' => self::META_DISTRICT_CITY,
					'type' => 'text'
				),
				array (
					'name' => __ ('District state', 'hat'),
					'id' => self::META_DISTRICT_STATE,
					'type' => 'text'
				),
				array (
					'name' => __ ('District ZIP', 'hat'),
					'id' => self::META_DISTRICT_ZIP,
					'type' => 'text'
				),
				array (
					'name' => __ ('Office phone 1', 'hat'),
					'id' => self::META_OFFICE_PHONE_1,
					'type' => 'text'
				),
				array (
					'name' => __ ('Office phone 2', 'hat'),
					'id' => self::META_OFFICE_PHONE_2,
					'type' => 'text'
				),
				array (
					'name' => __ ('Office fax 1', 'hat'),
					'id' => self::META_OFFICE_FAX_1,
					'type' => 'text'
				),
				array (
					'name' => __ ('Office fax 2', 'hat'),
					'id' => self::META_OFFICE_FAX_2,
					'type' => 'text'
				),
				array (
					'name' => __ ('Office street', 'hat'),
					'id' => self::META_OFFICE_STREET,
					'type' => 'text'
				),
				array (
					'name' => __ ('Office city', 'hat'),
					'id' => self::META_OFFICE_CITY,
					'type' => 'text'
				),
				array (
					'name' => __ ('Office state', 'hat'),
					'id' => self::META_OFFICE_STATE,
					'type' => 'text'
				),
				array (
					'name' => __ ('Office ZIP', 'hat'),
					'id' => self::META_OFFICE_ZIP,
					'type' => 'text'
				),
				array (
					'name' => __ ('Ideology', 'hat'),
					'id' => self::META_IDEOLOGY,
					'type' => 'text'
				),
				array (
					'name' => __ ('Opposes Citizens United', 'hat'),
					'id' => self::META_OPPOSES_CITIZENS_UNITED,
					'type' => 'text'
				),
				array (
					'name' => __ ('Voted For Resolution', 'hat'),
					'id' => self::META_VOTE_RESOLUTION,
					'type' => 'text'
				),
				array (
					'name' => __ ('Co-Authored/Sponsored Resolution for Admendment', 'hat'),
					'id' => self::META_VOTE_SPONSOR,
					'type' => 'text'
				),
				array (
					'name' => __ ('Voted for article 5 convention', 'hat'),
					'id' => self::META_VOTE_CONVENTION,
					'type' => 'text'
				),
				array (
					'name' => __ ('User feedback rating', 'hat'),
					'id' => self::META_FEEDBACK_RATING,
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