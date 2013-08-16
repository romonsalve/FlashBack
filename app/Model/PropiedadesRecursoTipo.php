<?php
App::uses('AppModel', 'Model');
/**
 * PropiedadesRecursoTipo Model
 *
 * @property Propiedade $Propiedade
 * @property RecursoTipo $RecursoTipo
 */
class PropiedadesRecursoTipo extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
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
		'recurso_tipo_id' => array(
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
		'Propiedade' => array(
			'className' => 'Propiedade',
			'foreignKey' => 'propiedade_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'RecursoTipo' => array(
			'className' => 'RecursoTipo',
			'foreignKey' => 'recurso_tipo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
