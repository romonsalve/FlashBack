<?php
App::uses('AppModel', 'Model');
/**
 * Proveedore Model
 *
 * @property RecursoTipo $RecursoTipo
 */
class Proveedore extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'RecursoTipo' => array(
			'className' => 'RecursoTipo',
			'joinTable' => 'proveedores_recurso_tipos',
			'foreignKey' => 'proveedore_id',
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
