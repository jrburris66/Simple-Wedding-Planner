<?php
App::uses('ListNote', 'Model');

/**
 * ListNote Test Case
 *
 */
class ListNoteTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.list_note',
		'app.list'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ListNote = ClassRegistry::init('ListNote');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ListNote);

		parent::tearDown();
	}

}
