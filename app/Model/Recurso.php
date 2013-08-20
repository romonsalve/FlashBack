<?php
App::uses('AppModel', 'Model');
/**
 * Recurso Model
 *
 * @property RecursoTipo $RecursoTipo
 * @property Proveedore $Proveedore
 * @property Propiedade $Propiedade
 */
class Recurso extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
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
		'RecursoTipo' => array(
			'className' => 'RecursoTipo',
			'foreignKey' => 'recurso_tipo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Proveedore' => array(
			'className' => 'Proveedore',
			'foreignKey' => 'proveedore_id',
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
