<?php
App::uses('GuestRole', 'Model');

/**
 * GuestRole Test Case
 *
 */
class GuestRoleTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.guest_role',
		'app.guest'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->GuestRole = ClassRegistry::init('GuestRole');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GuestRole);

		parent::tearDown();
	}

}
