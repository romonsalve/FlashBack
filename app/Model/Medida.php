<?php
App::uses('AppModel', 'Model');
/**
 * Medida Model
 *
 * @property MedidasPropiedade $MedidasPropiedade
 */
class Medida extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'medida';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'MedidasPropiedade' => array(
			'className' => 'MedidasPropiedade',
			'foreignKey' => 'medida_id',
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

}
