<?php
App::uses('AppModel', 'Model');
/**
 * Cliente Model
 *
 * @property ClienteTipo $ClienteTipo
 * @property Evento $Evento
 * @property SolicitudCotizacione $SolicitudCotizacione
 */
class Cliente extends AppModel {

public $displayField = 'nombreCompleto';

public $virtualFields = array(
	'nombreCompleto' => 'Cliente.nombre || \' \' || Cliente.apellido_paterno || \' \' || Cliente.apellido_materno');

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'cliente_tipo_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		)
		/*'rut_cli' => array(
			'formato' => array(
				'rule' => '^[1-9][0-9]{0,7}[-][0-9kK]{1}^',
				'message' => 'Ingrese el rut sin puntos con guión.'
			),
			'digitoVerificador' => array(
				'rule' => 'verificarRut',
				'message' => 'Rut no válido.',
			),
			'sinRepetir' => array(
				'rule' => 'unico',
				'on' => 'create',
				'message' => 'este rut ya está registrado.'
			)
		),
		'fono_cli'=> array(
			'rule' => array('range', 99999, 57000000000),
			'message' => 'Ingrese un número de teléfono válido.',
			'required' => true,
		),
		'correo_cli' => array(
			'rule' => 'email',
			'message' => 'Ingrese un correo electrónico válido',
			'allowEmpty' => true,
		)*/
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'ClienteTipo' => array(
			'className' => 'ClienteTipo',
			'foreignKey' => 'cliente_tipo_id',
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
			'foreignKey' => 'cliente_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'SolicitudCotizacione' => array(
			'className' => 'SolicitudCotizacione',
			'foreignKey' => 'cliente_id',
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
