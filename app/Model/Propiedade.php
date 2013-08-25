<?php
App::uses('AppModel', 'Model');
/**
 * Propiedade Model
 *
 * @property Recurso $Recurso
 * @property Medida $Medida
 * @property RecursoTipo $RecursoTipo
 */
class Propiedade extends AppModel {

	public $displayField = 'nombre';

	public $validate = array(
		'nombre' => array(
			'rule' => 'unico',
			'message' => 'Ya existe una propiedad con ese nombre.',
		),
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Recurso' => array(
			'className' => 'Recurso',
			'joinTable' => 'propiedades_recursos',
			'foreignKey' => 'propiedade_id',
			'associationForeignKey' => 'recurso_id',
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
		'Medida' => array(
			'className' => 'Medida',
			'joinTable' => 'medidas_propiedades',
			'foreignKey' => 'propiedade_id',
			'associationForeignKey' => 'medida_id',
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
		'RecursoTipo' => array(
			'className' => 'RecursoTipo',
			'joinTable' => 'propiedades_recurso_tipos',
			'foreignKey' => 'propiedade_id',
			'associationForeignKey' => 'recurso_tipo_id',
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
