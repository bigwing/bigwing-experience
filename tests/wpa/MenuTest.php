<?php
/**
 * Menu tests
 *
 * @package bigwing-experience
 */

/**
 * PHPUnit test class
 */
class MenuTest extends \WPAcceptance\PHPUnit\TestCase {

	/**
	 * @testdox I see BigWing logo in admin bar
	 */
	public function testAdminBarBigWingLogo() {
		$I = $this->openBrowserPage();

		$I->loginAs( 'admin' );
		$I->seeElement( '#wp-admin-bar-bigwing' );
	}
}
