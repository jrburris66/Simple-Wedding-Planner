<?php
App::uses('Relationship', 'Model');

/**
 * Relationship Test Case
 *
 */
class RelationshipTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.relationship',
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
		'app.guest',
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
		$this->Relationship = ClassRegistry::init('Relationship');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Relationship);

		parent::tearDown();
	}

}
