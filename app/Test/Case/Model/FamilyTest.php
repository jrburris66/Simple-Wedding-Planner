<?php
App::uses('Family', 'Model');

/**
 * Family Test Case
 *
 */
class FamilyTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
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
		'app.guest'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Family = ClassRegistry::init('Family');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Family);

		parent::tearDown();
	}

}
