<?php
App::uses('Proposal', 'Model');

/**
 * Proposal Test Case
 *
 */
class ProposalTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.proposal',
		'app.title',
		'app.contact',
		'app.title2',
		'app.contact_note',
		'app.contract_note',
		'app.event',
		'app.event_type',
		'app.time_activity',
		'app.user',
		'app.proposal_note'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Proposal = ClassRegistry::init('Proposal');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Proposal);

		parent::tearDown();
	}

}
