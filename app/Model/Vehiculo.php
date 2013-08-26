<?php
App::uses('AppModel', 'Model');
/**
 * Vehiculo Model
 *
 * @property VehiculoTipo $VehiculoTipo
 * @property Bitacora $Bitacora
 */
class Vehiculo extends AppModel {

	public $displayField = 'modelo';
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'vehiculo_tipo_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Por favor seleccione un tipo de vehículo',
				'allowEmpty' => false,
				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'patente' => array(
			'patenteValida' => array(
				'rule' => '/(([B-D]|[F-H]|[J-N]|[P-T]|[V-Z]){4}[0-9]{2})|([A-Z]{2}[0-9]{4})/',
				'message' => 'Ingrese una patente válida, en mayúsculas, sin espacios ni guiones.	',
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
		'VehiculoTipo' => array(
			'className' => 'VehiculoTipo',
			'foreignKey' => 'vehiculo_tipo_id',
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
		'Bitacora' => array(
			'className' => 'Bitacora',
			'foreignKey' => 'vehiculo_id',
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
