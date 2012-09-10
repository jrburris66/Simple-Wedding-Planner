<?php
/**
 * ProposalFixture
 *
 */
class ProposalFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'primary_fname' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 25, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'primary_lname' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 25, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'secondary_fname' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 25, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'secondary_lname' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 25, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'title_id' => array('type' => 'integer', 'null' => false, 'default' => '1'),
		'title2_id' => array('type' => 'integer', 'null' => false, 'default' => '2'),
		'email' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'phone_1' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'phone_1_type' => array('type' => 'string', 'null' => true, 'default' => 'H', 'length' => 1, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'phone_2' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'phone_2_type' => array('type' => 'string', 'null' => true, 'default' => 'C', 'length' => 1, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'wedding_date' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'street_1' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 25, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'street_2' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 25, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'zip' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 5),
		'status' => array('type' => 'string', 'null' => false, 'default' => 'List', 'length' => 25, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'referral_source' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'updated' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'city' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 25, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'state' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'primary_fname' => 'Lorem ipsum dolor sit a',
			'primary_lname' => 'Lorem ipsum dolor sit a',
			'secondary_fname' => 'Lorem ipsum dolor sit a',
			'secondary_lname' => 'Lorem ipsum dolor sit a',
			'title_id' => 1,
			'title2_id' => 1,
			'email' => 'Lorem ipsum dolor sit amet',
			'phone_1' => 'Lorem ip',
			'phone_1_type' => 'Lorem ipsum dolor sit ame',
			'phone_2' => 'Lorem ip',
			'phone_2_type' => 'Lorem ipsum dolor sit ame',
			'wedding_date' => '2012-09-06 15:33:50',
			'street_1' => 'Lorem ipsum dolor sit a',
			'street_2' => 'Lorem ipsum dolor sit a',
			'zip' => 1,
			'status' => 'Lorem ipsum dolor sit a',
			'referral_source' => 'Lorem ipsum dolor sit amet',
			'created' => '2012-09-06 15:33:50',
			'updated' => '2012-09-06 15:33:50',
			'city' => 'Lorem ipsum dolor sit a',
			'state' => ''
		),
	);

}
