<?php
App::uses('AppModel', 'Model');
/**
 * Medida Model
 *
 * @property Propiedade $Propiedade
 */
class Medida extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Propiedade' => array(
			'className' => 'Propiedade',
			'joinTable' => 'medidas_propiedades',
			'foreignKey' => 'medida_id',
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
