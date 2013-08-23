<?php
App::uses('AppModel', 'Model');
/**
 * PropiedadesRecurso Model
 *
 * @property Recurso $Recurso
 * @property Propiedade $Propiedade
 */
class PropiedadesRecurso extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'recurso_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
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
		'Recurso' => array(
			'className' => 'Recurso',
			'foreignKey' => 'recurso_id',
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
