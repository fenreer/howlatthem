<?

//const
define( 'RWMB_URL', trailingslashit( get_stylesheet_directory_uri() . '/includes/plugins/meta-box' ) );
define( 'RWMB_DIR', trailingslashit( STYLESHEETPATH . '/includes/plugins/meta-box' ) );

//plugins
require_once RWMB_DIR . 'meta-box.php';
require_once 'includes/plugins/official-importer/official-importer.php';

//setup
add_filter ('show_admin_bar', '__return_false');
require_once 'includes/setup/theme-support.php';
require_once 'includes/setup/post-type-support.php';
require_once 'includes/setup/roles.php';
require_once 'includes/setup/login.php';
require_once 'includes/setup/menues.php';
require_once 'includes/setup/sidebars.php';
require_once 'includes/setup/scripts.php';
require_once 'includes/setup/styles.php';

//utility
require_once 'includes/functions.php';

//models
require_once 'includes/models/official.php';