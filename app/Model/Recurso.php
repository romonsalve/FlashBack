<?php
App::uses('AppModel', 'Model');
/**
 * Recurso Model
 *
 * @property RecursoTipos $RecursoTipos
 * @property Proveedores $Proveedores
 * @property Evento $Evento
 * @property Propiedade $Propiedade
 */
class Recurso extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'recurso_tipos_id' => array(
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
		'RecursoTipos' => array(
			'className' => 'RecursoTipos',
			'foreignKey' => 'recurso_tipos_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Proveedores' => array(
			'className' => 'Proveedores',
			'foreignKey' => 'proveedores_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Evento' => array(
			'className' => 'Evento',
			'joinTable' => 'eventos_recursos',
			'foreignKey' => 'recurso_id',
			'associationForeignKey' => 'evento_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'Propiedade' => array(
			'className' => 'Propiedade',
			'joinTable' => 'propiedades_recursos',
			'foreignKey' => 'recurso_id',
			'associationForeignKey' => 'propiedade_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
