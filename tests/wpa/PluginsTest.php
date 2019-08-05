<?php
/**
 * Test plugin install functionality
 *
 * @package bigwing-experience
 */

/**
 * PHPUnit test class
 */
class PluginsTest extends \WPAcceptance\PHPUnit\TestCase {

	/**
	 * @testdox I see BigWing suggested plugins
	 */
	public function testBigWingSuggestedWorking() {
		$I = $this->openBrowserPage();

		$I->loginAs( 'admin' );

		$I->moveTo( 'wp-admin/plugin-install.php' );

		$I->seeLink( 'BigWing Suggested' );

		// Make sure ElasticPress is shown since this is definitely suggested

		$I->seeElement( '.plugin-card-elasticpress' );
		$I->seeText( 'ElasticPress' );
	}

	/**
	 * @testdox I see a warning when I look at non-suggested plugins
	 */
	public function testNonSuggestedWarning() {
		$I = $this->openBrowserPage();

		$I->loginAs( 'admin' );

		$I->moveTo( 'http://bigwingexperience.test/wp-admin/plugin-install.php?tab=popular' );

		$I->seeText( 'Some plugins may affect display, performance, and reliability' );
	}
}
