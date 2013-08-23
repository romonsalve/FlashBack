<?php
App::uses('AppModel', 'Model');
/**
 * Recinto Model
 *
 * @property RecintoTipos $RecintoTipos
 */
class Recinto extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'recinto_tipos_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
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
		'RecintoTipos' => array(
			'className' => 'RecintoTipos',
			'foreignKey' => 'recinto_tipos_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
