<?php
App::uses('AppModel', 'Model');
/**
 * Mylist Model
 *
 * @property Title $Title
 * @property Title2 $Title2
 */
class Mylist extends AppModel {
	
	var $useTable = 'contacts';


	
	public function beforeFind($query) {
	
		$mem_ids = array('List');
	
		if (empty($query['conditions'])) {
			$query['conditions'] = array($this->alias . '.status' => $mem_ids);
		}
		else {
			$query['conditions'] = array(array($this->alias . '.status' => $mem_ids),
					$query['conditions']);
		}
		return $query;
	}	
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
		'status' => array(
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

	
	public $hasMany = array(
			'Family' => array(
					'className' => 'Family',
					'foreignKey' => 'contract_id',
					'dependent' => false,
					'conditions' => '',
					'fields' => '',
					'order' => '',
					'limit' => '',
					'offset' => '',
					'exclusive' => '',
					'finderQuery' => '',
					'counterQuery' => ''
			),
			'ContactNote' => array(
					'className' => 'ContactNote',
					'foreignKey' => 'contact_id',
					'dependent' => false,
					'conditions' => '',
					'fields' => '',
					'order' => '',
					'limit' => '',
					'offset' => '',
					'exclusive' => '',
					'finderQuery' => '',
					'counterQuery' => ''
			)
	);
	
}
