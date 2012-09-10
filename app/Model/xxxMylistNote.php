<?php
App::uses('AppModel', 'Model');
/**
 * MylistNote Model
 *
 * @property List $List
 */
class MylistNote extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'List' => array(
			'className' => 'List',
			'foreignKey' => 'list_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
