<?php
App::uses('AppModel', 'Model');
/**
 * ActividadesEventoTipo Model
 *
 * @property EventoTipos $EventoTipos
 * @property Actividades $Actividades
 */
class ActividadesEventoTipo extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'evento_tipos_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'actividades_id' => array(
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
		'EventoTipos' => array(
			'className' => 'EventoTipos',
			'foreignKey' => 'evento_tipos_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Actividades' => array(
			'className' => 'Actividades',
			'foreignKey' => 'actividades_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
