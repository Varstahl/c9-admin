<?php
/**
 * C9 Admin Base
 *
 * @package C9_Admin
 * @link    https://www.covertnine.com
 * @since   1.0.0
 *
 * @wordpress-plugin
 * Plugin Name:       C9 Admin
 * Plugin URI:        https://github.com/covertnine/c9-admin
 * Description:       This plugin makes a few enhancements to the WordPress admin interface including collapsing and re-labeling navigation items to be more intuitive, image upload size limitations, as well as hiding non-essential admin notices from regular users.
 * Version:           1.0.0
 * Author:            CovertNine
 * Author URI:        https://www.covertnine.com
 * License:           GPL-2.0+
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       c9-admin
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

if ( ! defined( 'ATTACHMENT_REDIRECT_CODE' ) ) {
	define( 'ATTACHMENT_REDIRECT_CODE', '301' ); // Default redirect code for attachments with existing parent post.
}

if ( ! defined( 'ORPHAN_ATTACHMENT_REDIRECT_CODE' ) ) {
	define( 'ORPHAN_ATTACHMENT_REDIRECT_CODE', '302' ); // Default redirect code for attachments with no parent post.
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'C9_ADMIN_VERSION', '1.0.0' );


/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'admin/class-c9-admin.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since 1.0.0
 */
function run_c9_admin() {
	new C9_Admin( 'C9_Admin', C9_ADMIN_VERSION );
}
run_c9_admin();
