<?php
App::uses('AppModel', 'Model');
/**
 * PropiedadesRecurso Model
 *
 * @property Recursos $Recursos
 * @property Propiedades $Propiedades
 */
class PropiedadesRecurso extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'recursos_id' => array(
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
		'Recursos' => array(
			'className' => 'Recursos',
			'foreignKey' => 'recursos_id',
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
