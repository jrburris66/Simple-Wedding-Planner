<?php
App::uses('ContractNote', 'Model');

/**
 * ContractNote Test Case
 *
 */
class ContractNoteTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.contract_note',
		'app.contact',
		'app.title',
		'app.title2',
		'app.contact_note',
		'app.event',
		'app.time_activity',
		'app.user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ContractNote = ClassRegistry::init('ContractNote');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ContractNote);

		parent::tearDown();
	}

}
