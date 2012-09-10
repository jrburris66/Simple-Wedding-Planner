<?php
App::uses('GuestType', 'Model');

/**
 * GuestType Test Case
 *
 */
class GuestTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.guest_type',
		'app.guest'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->GuestType = ClassRegistry::init('GuestType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GuestType);

		parent::tearDown();
	}

}
