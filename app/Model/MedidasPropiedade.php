<?php
App::uses('AppModel', 'Model');
/**
 * MedidasPropiedade Model
 *
 * @property Medida $Medida
 * @property Propiedade $Propiedade
 */
class MedidasPropiedade extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'medida_id' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'propiedade_id' => array(
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
		'Medida' => array(
			'className' => 'Medida',
			'foreignKey' => 'medida_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Propiedade' => array(
			'className' => 'Propiedade',
			'foreignKey' => 'propiedade_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
