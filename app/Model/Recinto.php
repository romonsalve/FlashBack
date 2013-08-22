<?php
App::uses('AppModel', 'Model');
/**
 * Recinto Model
 *
 * @property RecintoTipo $RecintoTipo
 * @property Evento $Evento
 */
class Recinto extends AppModel {
	public $displayField = 'nombre_reci';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'nombre_reci' => array(
			'Sólo carácteres alfanuméricos' => array(
				'rule' => 'alphaNumeric',
				'required' => true,
			),
		),
		'dimension_reci' => array(
			'Ingrese un número.' => array(
				'rule' => 'numeric',
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
