<?php
App::uses('DemoLink', 'Model');

/**
 * DemoLink Test Case
 *
 */
class DemoLinkTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.demo_link',
		'app.authorization',
		'app.user',
		'app.campaign'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DemoLink = ClassRegistry::init('DemoLink');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DemoLink);

		parent::tearDown();
	}

}
