<?php
App::uses('AppModel', 'Model');
/**
 * Cliente Model
 *
 * @property ClienteTipos $ClienteTipos
 */
class Cliente extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'cliente_tipos_id' => array(
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
		'ClienteTipos' => array(
			'className' => 'ClienteTipos',
			'foreignKey' => 'cliente_tipos_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
