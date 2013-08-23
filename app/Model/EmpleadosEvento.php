<?php
App::uses('AppModel', 'Model');
/**
 * EmpleadosEvento Model
 *
 * @property Empleados $Empleados
 * @property Eventos $Eventos
 */
class EmpleadosEvento extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'empleados_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'eventos_id' => array(
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
		'Empleados' => array(
			'className' => 'Empleados',
			'foreignKey' => 'empleados_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Eventos' => array(
			'className' => 'Eventos',
			'foreignKey' => 'eventos_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
