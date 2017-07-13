<?php

//* Start the engine.
require_once( get_template_directory() . '/lib/init.php' );

//* Child theme (do not remove).
define( 'CHILD_THEME_NAME', 'uWebDesign Theme' );
define( 'CHILD_THEME_URL', 'https://uwebdesign.ru/' );
define( 'CHILD_THEME_VERSION', '1.1.2' );

//* Helper functions.
require_once( 'lib/_helpers.php' );

//* Lots of theme supports stuff.
require_once( 'lib/uwd-theme-supports.php' );

//* Admin customizations.
require_once( 'lib/uwd-admin.php' );

//* All the scripts come here.
require_once( 'lib/uwd-scripts.php' );
//* Comments related stuff.
require_once( 'lib/uwd-scripts-comments.php' );

//* Main loop customizations.
require_once( 'lib/uwd-loop.php' );

//* All markup customizations for the website.
require_once( 'lib/markup/uwd-markup-site-header.php' );
require_once( 'lib/markup/uwd-markup-entry.php' );
require_once( 'lib/markup/uwd-markup-search.php' );
require_once( 'lib/markup/uwd-markup-sidebar.php' );
require_once( 'lib/markup/uwd-markup-pagination.php' );
require_once( 'lib/markup/uwd-markup-footer-widgets.php' );
require_once( 'lib/markup/uwd-markup-footer.php' );
require_once( 'lib/markup/uwd-markup-embed.php' );

//* Translation markup stuff.
require_once( 'lib/uwd-translate.php' );

//* Try some dashboard widgets removement.
if ( ! current_user_can( 'manage_options' ) ) {
	add_action( 'wp_dashboard_setup', 'wpse_73561_remove_all_dashboard_meta_boxes', 9999 );
	function wpse_73561_remove_all_dashboard_meta_boxes() {
		global $wp_meta_boxes;
		$wp_meta_boxes['dashboard']['normal']['core'] = array();
		$wp_meta_boxes['dashboard']['side']['core']   = array();
	}
}