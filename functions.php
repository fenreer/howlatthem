<?php

/**
 * @todo add hat-keywords customization option
 */

//= globals =================================================================//

define ('HAT_DIR', get_stylesheet_directory ());
define ('HAT_URL', get_stylesheet_directory_uri ());
define ('RWMB_URL', trailingslashit (get_stylesheet_directory_uri () . '/includes/plugins/meta-box'));
define ('RWMB_DIR', trailingslashit (STYLESHEETPATH . '/includes/plugins/meta-box'));

//= plugins =================================================================//

require_once RWMB_DIR . 'meta-box.php';
require_once 'includes/plugins/official-importer/official-importer.php';

//= Scripts & Styles ========================================================//

function hat_enqueue_scripts () {
  wp_enqueue_script ('hat-jquery', HAT_URL . '/scripts/vendor/jquery.js', array (), false, true);
  wp_enqueue_script ('hat-bootstrap', HAT_URL . '/scripts/vendor/bootstrap.js', array (), false, true);
}

add_action ('wp_enqueue_scripts', 'hat_enqueue_scripts');

function hat_enqueue_styles () {
  wp_enqueue_style ('hat-bootstrap', HAT_URL . '/styles/vendor/bootstrap.css');
  wp_enqueue_style ('hat-main', HAT_URL . '/style.css');
}

add_action ('wp_enqueue_scripts', 'hat_enqueue_styles');

//= WordPress Customizations ================================================//

add_filter ('show_admin_bar', '__return_false');
add_theme_support ('post-thumbnails');
add_theme_support ('menus');
add_image_size ('official_avatar', 200, 126, true);

function hat_add_post_type_support () {
  add_post_type_support ('page', 'excerpt');
}

//= Login Page Customizations ===============================================//

add_action ('init', 'hat_add_post_type_support');

function hat_login_logo_url () {
  return get_bloginfo ('url');
}

add_filter ('login_headerurl', 'hat_login_logo_url');

function hat_login_logo_url_title () {
  return get_bloginfo ('name') . ': ' . get_bloginfo ('description');
}

add_filter ('login_headertitle', 'hat_login_logo_url_title');

function hat_login_stylesheet () {
  ?>
  <link rel="stylesheet" href="<?= get_bloginfo ('stylesheet_directory') . '/login.css'; ?>"/>
<?
}

add_action ('login_enqueue_scripts', 'hat_login_stylesheet');

//= Officials ===============================================================//

function hat_official_register_post_type () {
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
  register_post_type ('official', $args);
}

add_action ('init', 'hat_official_register_post_type');

function hat_official_register_meta_boxes () {
  if (! class_exists ('RW_Meta_box')) {return false;}
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
        'id' => 'first_name',
        'type' => 'text'
      ),
      array (
        'name' => __ ('Last name', 'hat'),
        'id' => 'last_name',
        'type' => 'text'
      ),
      array (
        'name' => __ ('Office Parties', 'hat'),
        'id' => 'office_parties',
        'type' => 'text'
      ),
      array (
        'name' => __ ('Title', 'hat'),
        'id' => 'office_title',
        'type' => 'text'
      ),
      array (
        'name' => __ ('Office type', 'hat'),
        'id' => 'office_type',
        'type' => 'text'
      ),
      array (
        'name' => __ ('Office level', 'hat'),
        'id' => 'office_level',
        'type' => 'text'
      ),
      array (
        'name' => __ ('District', 'hat'),
        'id' => 'district',
        'type' => 'text'
      ),
      array (
        'name' => __ ('District phone 1', 'hat'),
        'id' => 'district_phone_1',
        'type' => 'text'
      ),
      array (
        'name' => __ ('District phone 2', 'hat'),
        'id' => 'district_phone_2',
        'type' => 'text'
      ),
      array (
        'name' => __ ('District  fax 1', 'hat'),
        'id' => 'district_fax_1',
        'type' => 'text'
      ),
      array (
        'name' => __ ('District fax 2', 'hat'),
        'id' => 'district_fax_2',
        'type' => 'text'
      ),
      array (
        'name' => __ ('District street', 'hat'),
        'id' => 'district_street',
        'type' => 'text'
      ),
      array (
        'name' => __ ('District city', 'hat'),
        'id' => 'district_city',
        'type' => 'text'
      ),
      array (
        'name' => __ ('District state', 'hat'),
        'id' => 'district_state',
        'type' => 'text'
      ),
      array (
        'name' => __ ('District ZIP', 'hat'),
        'id' => 'district_zip',
        'type' => 'text'
      ),
      array (
        'name' => __ ('Office phone 1', 'hat'),
        'id' => 'office_phone_1',
        'type' => 'text'
      ),
      array (
        'name' => __ ('Office phone 2', 'hat'),
        'id' => 'office_phone_2',
        'type' => 'text'
      ),
      array (
        'name' => __ ('Office fax 1', 'hat'),
        'id' => 'office_fax_1',
        'type' => 'text'
      ),
      array (
        'name' => __ ('Office fax 2', 'hat'),
        'id' => 'office_fax_2',
        'type' => 'text'
      ),
      array (
        'name' => __ ('Office street', 'hat'),
        'id' => 'office_street',
        'type' => 'text'
      ),
      array (
        'name' => __ ('Office city', 'hat'),
        'id' => 'office_city',
        'type' => 'text'
      ),
      array (
        'name' => __ ('Office state', 'hat'),
        'id' => 'office_state',
        'type' => 'text'
      ),
      array (
        'name' => __ ('Office ZIP', 'hat'),
        'id' => 'office_zip',
        'type' => 'text'
      ),
      array (
        'name' => __ ('Ideology', 'hat'),
        'id' => 'ideology',
        'type' => 'text'
      ),
      array (
        'name' => __ ('Opposes Citizens United', 'hat'),
        'id' => 'opposes_citizens_united',
        'type' => 'text'
      ),
      array (
        'name' => __ ('Voted For Resolution', 'hat'),
        'id' => 'voted_for_resolution',
        'type' => 'text'
      ),
      array (
        'name' => __ ('Co-Authored/Sponsored Resolution for Admendment', 'hat'),
        'id' => 'vote_sponsor',
        'type' => 'text'
      ),
      array (
        'name' => __ ('Voted for article 5 convention', 'hat'),
        'id' => 'voted_for_convention',
        'type' => 'text'
      ),
      array (
        'name' => __ ('User feedback rating', 'hat'),
        'id' => 'feedback_rating',
        'type' => 'text'
      )
    )
  ));
}

add_action ('admin_init', 'hat_official_register_meta_boxes');

function hat_official_filter_query_vars () {
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

add_filter ('query_vars', 'hat_official_filter_query_vars');

function hat_official_query_post ($query) {

  global $wpdb;

  if (is_post_type_archive ('official') && $query->is_main_query ()) {

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
  return $query;
}

add_filter ('pre_get_posts', 'hat_official_query_post');

//= Utility =================================================================//

function hat_nav_class ($page) {
  switch ($page) {
    default:
      echo '';
  }
}

function hat_get_sticky () {
  return new WP_Query ();
}