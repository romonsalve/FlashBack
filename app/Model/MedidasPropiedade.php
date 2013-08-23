<?php
App::uses('AppModel', 'Model');
/**
 * MedidasPropiedade Model
 *
 * @property Medidas $Medidas
 * @property Propiedades $Propiedades
 */
class MedidasPropiedade extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'medidas_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'propiedades_id' => array(
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
		'Medidas' => array(
			'className' => 'Medidas',
			'foreignKey' => 'medidas_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Propiedades' => array(
			'className' => 'Propiedades',
			'foreignKey' => 'propiedades_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
