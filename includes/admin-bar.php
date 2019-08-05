<?php
/**
 * Admin bar customizations
 *
 * @package  bigwing-experience
 */

namespace bigwing;

/**
 * Let's setup our BigWing menu in the toolbar
 *
 * @param object $wp_admin_bar Current WP Admin bar object
 */
function add_about_menu( $wp_admin_bar ) {
	if ( is_user_logged_in() && current_user_can( 'edit_posts' ) ) {
		$wp_admin_bar->add_menu(
			array(
				'id'    => 'bigwing',
				'title' => '<div class="bigwing-icon ab-item"><span class="screen-reader-text">' . esc_html__( 'About BigWing', 'bigwing' ) . '</span></div>',
				'href'  => admin_url( 'admin.php?page=bigwing-about' ),
				'meta'  => array(
					'title' => 'BigWing',
				),
			)
		);

		$wp_admin_bar->add_menu(
			array(
				'id'     => 'bigwing-about',
				'parent' => 'bigwing',
				'title'  => esc_html__( 'About BigWing', 'bigwing' ),
				'href'   => esc_url( admin_url( 'admin.php?page=bigwing-about' ) ),
				'meta'   => array(
					'title' => esc_html__( 'About BigWing', 'bigwing' ),
				),
			)
		);
	}

}
add_action( 'admin_bar_menu', __NAMESPACE__ . '\add_about_menu', 11 );
