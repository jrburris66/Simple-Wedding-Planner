<?php
App::uses('LeadNote', 'Model');

/**
 * LeadNote Test Case
 *
 */
class LeadNoteTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.lead_note',
		'app.lead'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->LeadNote = ClassRegistry::init('LeadNote');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->LeadNote);

		parent::tearDown();
	}

}
