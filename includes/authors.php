<?php
/**
 * Author customizations
 *
 * @package  bigwing-experience
 */

namespace bigwing;

/**
 * Check to see if author archive page should be disabled for BigWing user accounts
 */
function maybe_disable_author_archive() {

	if ( ! is_author() ) {
		return;
	}

	$is_author_disabled = false;
	$author             = get_queried_object();
	$current_domain     = parse_url( get_site_url(), PHP_URL_HOST );

	// Domain names that are whitelisted allowed to index BigWing users to be indexed
	$whitelisted_domains = [
		'bigwing.com',
		'bigwing.io',
		'bigwingmanager.com',
	];

	// Perform partial match on domains to catch subdomains or variation of domain name
	$filtered_domains = array_filter(
		$whitelisted_domains,
		function( $domain ) use ( $current_domain ) {
			return false !== stripos( $current_domain, $domain );
		}
	);

	// If the query object doesn't have a user email address or the filter is allowing BigWing authors, bail
	if ( ! empty( $filtered_domains ) ||
		empty( $author->data->user_email ) ||
		true === apply_filters( 'bigwing_experience_allow_bigwing_author_pages', false ) ) {

		return;

	}

	// E-mail addresses containing bigwing.com will be filtered out on the front-end
	if ( false !== stripos( $author->data->user_email, 'bigwing.com' ) ) {
		$is_author_disabled = true;
	}

	if ( true === $is_author_disabled ) {
		\wp_safe_redirect( '/', '301' );
		exit();
	}
}

add_action( 'wp', __NAMESPACE__ . '\\maybe_disable_author_archive' );
