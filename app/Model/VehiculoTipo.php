<?php
App::uses('AppModel', 'Model');
/**
 * VehiculoTipo Model
 *
 * @property Vehiculo $Vehiculo
 */
class VehiculoTipo extends AppModel {

public $displayField = 'nombre_veht';

public $validate = array(
    'nombre_veht' => array(
        'rule'    => 'isUnique',
        'message' => 'Este tipo de vehículo ya ha sido ingresado',
	'required' => true,
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
