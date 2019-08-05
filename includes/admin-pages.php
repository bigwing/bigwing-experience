<?php
/**
 * Admin pages
 *
 * @package  bigwing-experience
 */

namespace bigwing;

/**
 * Register admin pages with output callbacks
 */
function register_admin_pages() {
	add_submenu_page( null, esc_html__( 'About BigWing', 'bigwing' ), esc_html__( 'About BigWing', 'bigwing' ), 'edit_posts', 'bigwing-about', __NAMESPACE__ . '\main_screen' );
}
add_action( 'admin_menu', __NAMESPACE__ . '\register_admin_pages' );

/**
 * Ensure our admin pages get a proper title.
 *
 * Because of the empty page parent, the title doesn't get output as expected.
 *
 * @param  string $admin_title The page title, with extra context added.
 * @param  string $title       The original page title.
 * @return string              The altered page title.
 */
function admin_title_fix( $admin_title, $title ) {
	$screen = get_current_screen();

	wp_enqueue_style( 'bigwing-admin', plugins_url( '/assets/css/admin.css', dirname( __FILE__ ) ), array(), BIGWING_EXPERIENCE_VERSION );

	if ( 0 !== strpos( $screen->base, 'admin_page_bigwing-' ) ) {
		return $admin_title;
	}

	// There were previously multiple BigWing pages - leave this basic structure here in case we return to that later.
	if ( 'admin_page_bigwing-about' === $screen->base ) {
		$admin_title = esc_html__( 'About BigWing', 'bigwing' ) . $admin_title;
	}

	return $admin_title;
}
add_filter( 'admin_title', __NAMESPACE__ . '\admin_title_fix', 10, 2 );

/**
 * Output about screens
 */
function main_screen() {
	?>
	<div class="wrap about-wrap full-width-layout">

		<h1><?php esc_html_e( 'About BigWing', 'bigwing' ); ?></h1>

		<div class="about-text">
			<?php
				echo wp_kses_post(
					sprintf(
						// translators: %s is a link to bigwing.com
						__( 'We&#8217;re a full-service, integrated marketing agency offering high-touch services that drive business results. <a href="%s" target="_blank">Learn more →</a>', 'bigwing' ),
						esc_url( 'https://bigwing.com' )
					)
				);
			?>
			</div>

		<a class="bigwing-badge" href="https://bigwing.com" target="_blank"><span aria-label="<?php esc_html_e( 'Link to BigWing.com', 'bigwing' ); ?>">BigWing.com</span></a>

		<div class="feature-section one-col">
			<h2><?php esc_html_e( 'Thanks for working with BigWing!', 'bigwing' ); ?></h2>

			<p><?php esc_html_e( 'You have the BigWing Experience plugin installed, which typically means BigWing built or is supporting your site. The Experience plugin configures WordPress to better protect and inform our clients, including security precautions like blocking unauthenticated access to your content over the REST API, safety measures like preventing code-level changes from being made inside the admin, and some other resources, including a list of vetted plugins we recommend for common use cases and information about us.', 'bigwing' ); ?></p>
		</div>

		<div class="feature-section one-col">
			<h3><?php esc_html_e( 'Making a Better Web', 'bigwing' ); ?></h3>

				<p><?php esc_html_e( 'We make the internet better with consultative creative and engineering services, innovative tools, and dependable products that take the pain out of content creation and management, in service of digital experiences that advance business and marketing objectives. We’re a group of people built to solve problems, made to create, wired to delight.', 'bigwing' ); ?></p>

				<p><?php esc_html_e( 'A customer-centric service model that covers every base, unrivaled leadership and investment in open platforms and tools for digital makers and content creators, and a forward-looking remote work culture make for a refreshing agency experience.', 'bigwing' ); ?></p>
		</div>

		<div class="full-width-img">
			<img src="<?php echo esc_url( plugins_url( '/assets/img/bigwing-image-1.jpg', dirname( __FILE__ ) ) ); ?>" alt="">
		</div>

		<div class="feature-section one-col">
			<h3><?php esc_html_e( 'Building Without Boundaries', 'bigwing' ); ?></h3>
			<p><?php esc_html_e( 'The best talent isn’t found in a single zip code, and an international clientele requires a global perspective. From New York City, to the wilds of Idaho, to a dozen countries across Europe, our model empowers us to bring in the best strategists, designers, and engineers, wherever they may live. Veterans of commercial agencies, universities, start ups, nonprofits, and international technology brands, our team has an uncommon breadth.', 'bigwing' ); ?></p>
		</div>

		<div class="full-width-img">
			<img src="<?php echo esc_url( plugins_url( '/assets/img/bigwing-image-2.jpg', dirname( __FILE__ ) ) ); ?>" alt="">
		</div>

		<div class="feature-section one-col">
			<h3><?php esc_html_e( 'Integrated Marketing', 'bigwing' ); ?></h3>

			<p><strong><?php esc_html_e( 'Digital:', 'bigwing' ); ?></strong> <?php esc_html_e( 'Blurbiage goes here.', 'bigwing' ); ?></p>

			<p>
				<strong><?php esc_html_e( 'Creative:', 'bigwing' ); ?></strong> <?php esc_html_e( 'Blurbiage goes here.', 'bigwing' ); ?>
			</p>

			<p>
				<strong><?php esc_html_e( 'Traditional:', 'bigwing' ); ?></strong> <?php esc_html_e( 'Blurbiage goes here.', 'bigwing' ); ?>
			</p>

			<p>
				<strong><?php esc_html_e( 'Analytics:', 'bigwing' ); ?></strong> <?php esc_html_e( 'Blurbiage goes here.', 'bigwing' ); ?>
			</p>

			<p>
				<strong><?php esc_html_e( 'Strategy:', 'bigwing' ); ?></strong> <?php esc_html_e( 'Blurbiage goes here.', 'bigwing' ); ?>
			</p>

			<p>
				<strong><?php esc_html_e( 'Integrated:', 'bigwing' ); ?></strong> <?php esc_html_e( 'Blurbiage goes here.', 'bigwing' ); ?>
			</p>

			<p class="center"><a href="https://bigwing.com" class="button button-hero button-primary" target="_blank"><?php esc_html_e( 'Learn more about BigWing', 'bigwing' ); ?></a></p>
		</div>
		<hr>
	</div>
	<?php
}
