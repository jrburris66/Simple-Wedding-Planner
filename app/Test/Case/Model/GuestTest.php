<?php
App::uses('Guest', 'Model');

/**
 * Guest Test Case
 *
 */
class GuestTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.guest',
		'app.family',
		'app.contract',
		'app.title',
		'app.contact',
		'app.title2',
		'app.contact_note',
		'app.contract_note',
		'app.event',
		'app.event_type',
		'app.time_activity',
		'app.user',
		'app.relationship',
		'app.guest_type',
		'app.guest_role'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Guest = ClassRegistry::init('Guest');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Guest);

		parent::tearDown();
	}

}
