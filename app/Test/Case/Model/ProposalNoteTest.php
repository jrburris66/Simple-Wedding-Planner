<?php
App::uses('ProposalNote', 'Model');

/**
 * ProposalNote Test Case
 *
 */
class ProposalNoteTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.proposal_note',
		'app.proposal'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ProposalNote = ClassRegistry::init('ProposalNote');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ProposalNote);

		parent::tearDown();
	}

}
