<?php
App::uses('AppModel', 'Model');
/**
 * RecursoTipo Model
 *
 * @property EventoTipo $EventoTipo
 * @property Recurso $Recurso
 * @property Propiedade $Propiedade
 * @property Proveedore $Proveedore
 */
class RecursoTipo extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'EventoTipo' => array(
			'className' => 'EventoTipo',
			'foreignKey' => 'evento_tipo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Recurso' => array(
			'className' => 'Recurso',
			'foreignKey' => 'recurso_tipo_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
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
			'joinTable' => 'propiedades_recurso_tipos',
			'foreignKey' => 'recurso_tipo_id',
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
		),
		'Proveedore' => array(
			'className' => 'Proveedore',
			'joinTable' => 'proveedores_recurso_tipos',
			'foreignKey' => 'recurso_tipo_id',
			'associationForeignKey' => 'proveedore_id',
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
