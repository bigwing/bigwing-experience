<?php
/**
 * Admin customizations
 *
 * @package  bigwing-experience
 */

namespace bigwing;

/**
 * Disable plugin/theme editor
 */
if ( ! defined( 'DISALLOW_FILE_EDIT' ) ) {
	define( 'DISALLOW_FILE_EDIT', true );
}

/**
 * Setup scripts for customized admin experience
 */
function admin_enqueue_scripts() {
	$screen = get_current_screen();

	wp_enqueue_style( 'bigwing-admin', plugins_url( '/assets/css/admin.css', dirname( __FILE__ ) ), array(), BIGWING_EXPERIENCE_VERSION );

	if ( 0 === strpos( $screen->base, 'admin_page_bigwing-' ) ) {
		wp_enqueue_style( 'bigwing-about', plugins_url( '/assets/css/bigwing-pages.css', dirname( __FILE__ ) ), array(), BIGWING_EXPERIENCE_VERSION );
	}
}
add_action( 'admin_enqueue_scripts', __NAMESPACE__ . '\admin_enqueue_scripts' );

/**
 * Enqueue front end scripts
 */
function enqueue_scripts() {
	// Only load css on front-end if the admin bar is showing.
	if ( is_admin_bar_showing() ) {
		wp_enqueue_style( 'bigwing-admin', plugins_url( '/assets/css/admin.css', dirname( __FILE__ ) ), array(), BIGWING_EXPERIENCE_VERSION );
	}
}
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_scripts' );

/**
 * Filter admin footer text "Thank you for creating..."
 *
 * @return string
 */
function filter_admin_footer_text() {
	$new_text = sprintf( __( 'Thank you for creating with <a href="https://wordpress.org">WordPress</a> and <a href="http://bigwing.com">BigWing</a>.', 'bigwing' ) );
	return $new_text;
}
add_filter( 'admin_footer_text', __NAMESPACE__ . '\filter_admin_footer_text' );
