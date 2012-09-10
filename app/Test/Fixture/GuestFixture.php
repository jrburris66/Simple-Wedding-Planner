<?php
/**
 * GuestFixture
 *
 */
class GuestFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'family_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'email' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'phone' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'mobile' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'oot' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'guest_type_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'guest_role_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'relationship_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10),
		'engagement_party_invited' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'engagement_party_rsvp' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'rehearsal_dinner_invited' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'rehearsal_dinner_rsvp' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'bridal_shower_invited' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'bridal_shower_rsvp' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'ceremony_invited' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'ceremony_rsvp' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'reception_invited' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'reception_rsvp' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'bridemaids_luncheon_invited' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'bridemaids_luncheon_rsvp' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'after_wedding_brunch_invited' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'after_wedding_brunch_rsvp' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'meal_choice' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'notes' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'updated' => array('type' => 'datetime', 'null' => false, 'default' => null),
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
			'family_id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'email' => 'Lorem ipsum dolor sit amet',
			'phone' => 'Lorem ip',
			'mobile' => 'Lorem ip',
			'oot' => 1,
			'guest_type_id' => 1,
			'guest_role_id' => 1,
			'relationship_id' => 1,
			'engagement_party_invited' => 1,
			'engagement_party_rsvp' => 1,
			'rehearsal_dinner_invited' => 1,
			'rehearsal_dinner_rsvp' => 1,
			'bridal_shower_invited' => 1,
			'bridal_shower_rsvp' => 1,
			'ceremony_invited' => 1,
			'ceremony_rsvp' => 1,
			'reception_invited' => 1,
			'reception_rsvp' => 1,
			'bridemaids_luncheon_invited' => 1,
			'bridemaids_luncheon_rsvp' => 1,
			'after_wedding_brunch_invited' => 1,
			'after_wedding_brunch_rsvp' => 1,
			'meal_choice' => 'Lorem ipsum dolor sit amet',
			'notes' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2012-09-06 15:32:48',
			'updated' => '2012-09-06 15:32:48'
		),
	);

}
