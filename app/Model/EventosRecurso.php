<?php
App::uses('AppModel', 'Model');
/**
 * EventosRecurso Model
 *
 * @property Eventos $Eventos
 * @property Recursos $Recursos
 */
class EventosRecurso extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
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
		'cantidad' => array(
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
		'Eventos' => array(
			'className' => 'Eventos',
			'foreignKey' => 'eventos_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Recursos' => array(
			'className' => 'Recursos',
			'foreignKey' => 'recursos_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
