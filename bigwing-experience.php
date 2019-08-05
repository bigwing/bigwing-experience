<?php
/**
 * Plugin Name: BigWing Experience
 * Description: The BigWing Experience plugin configures WordPress to better protect and inform clients, aligned to BigWing’s best practices.
 * Version:     1.5
 * Author:      BigWing
 * Author URI:  https://bigwing.com
 * License:     GPLv2 or later
 * Text Domain: bigwing
 * Domain Path: /languages/
 *
 * @package bigwing-experience
 */

define( 'BIGWING_EXPERIENCE_VERSION', '1.5' );

require_once __DIR__ . '/includes/admin.php';
require_once __DIR__ . '/includes/admin-bar.php';
require_once __DIR__ . '/includes/admin-pages.php';
require_once __DIR__ . '/includes/plugins.php';
require_once __DIR__ . '/includes/rest-api.php';
require_once __DIR__ . '/includes/gutenberg.php';
require_once __DIR__ . '/includes/authors.php';
require_once __DIR__ . '/includes/authentication.php';
require_once __DIR__ . '/includes/option-failsafes.php';

require_once __DIR__ . '/vendor/yahnis-elsts/plugin-update-checker/plugin-update-checker.php';

$bigwing_plugin_updater = Puc_v4_Factory::buildUpdateChecker(
	'https://github.com/bigwing/bigwing-experience/',
	__FILE__,
	'bigwing-experience'
);

if ( defined( 'BIGWING_EXPERIENCE_GITHUB_KEY' ) ) {
	$bigwing_plugin_updater->setAuthentication( BIGWING_EXPERIENCE_GITHUB_KEY );
}

$bigwing_plugin_updater->addResultFilter(
	function( $plugin_info, $http_response = null ) {
			$plugin_info->icons = array(
				'svg' => plugins_url( '/assets/img/bigwing.svg', __FILE__ ),
			);

			return $plugin_info;
	}
);
