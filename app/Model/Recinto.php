<?php
App::uses('AppModel', 'Model');
/**
 * Recinto Model
 *
 * @property RecintoTipo $RecintoTipo
 * @property Evento $Evento
 */
class Recinto extends AppModel {

public $displayField = 'nombre';
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'recinto_tipo_id' => array(
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
		'RecintoTipo' => array(
			'className' => 'RecintoTipo',
			'foreignKey' => 'recinto_tipo_id',
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
		'Evento' => array(
			'className' => 'Evento',
			'foreignKey' => 'recinto_id',
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
