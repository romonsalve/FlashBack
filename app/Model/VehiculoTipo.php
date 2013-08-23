<?php
App::uses('AppModel', 'Model');
/**
 * VehiculoTipo Model
 *
 * @property Vehiculo $Vehiculo
 */
class VehiculoTipo extends AppModel {

public $displayField = 'nombre';

public $validate = array(
    'nombre' => array(
	'unico' => array(
		'rule'    => 'isUnique',
		'message' => 'Este tipo de vehículo ya ha sido ingresado.',
		'required' => true,
		'on' => 'create',
	    	),
	'alfanumerico' => array(
		'rule' => 'alphanumeric',
		'required' => true,	
		'message' => 'Ingrese sólo caracteres alfanuméricos.'
		),
	)
);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Vehiculo' => array(
			'className' => 'Vehiculo',
			'foreignKey' => 'vehiculo_tipo_id',
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
