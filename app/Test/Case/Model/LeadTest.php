<?php
App::uses('Lead', 'Model');

/**
 * Lead Test Case
 *
 */
class LeadTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.lead',
		'app.title',
		'app.contact',
		'app.title2',
		'app.contact_note',
		'app.contract_note',
		'app.event',
		'app.event_type',
		'app.time_activity',
		'app.user',
		'app.lead_note'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Lead = ClassRegistry::init('Lead');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Lead);

		parent::tearDown();
	}

}
