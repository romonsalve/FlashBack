<?php
App::uses('AppModel', 'Model');
/**
 * Evento Model
 *
 * @property Recintos $Recintos
 * @property EventoTipos $EventoTipos
 * @property Clientes $Clientes
 * @property Bitacora $Bitacora
 * @property ItinerarioParticipante $ItinerarioParticipante
 * @property Recurso $Recurso
 * @property Empleado $Empleado
 * @property Actividade $Actividade
 */
class Evento extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'recintos_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'evento_tipos_id' => array(
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
		'Recintos' => array(
			'className' => 'Recintos',
			'foreignKey' => 'recintos_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'EventoTipos' => array(
			'className' => 'EventoTipos',
			'foreignKey' => 'evento_tipos_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Clientes' => array(
			'className' => 'Clientes',
			'foreignKey' => 'clientes_id',
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
			'foreignKey' => 'evento_id',
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
		'ItinerarioParticipante' => array(
			'className' => 'ItinerarioParticipante',
			'foreignKey' => 'evento_id',
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


/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Recurso' => array(
			'className' => 'Recurso',
			'joinTable' => 'eventos_recursos',
			'foreignKey' => 'evento_id',
			'associationForeignKey' => 'recurso_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'Empleado' => array(
			'className' => 'Empleado',
			'joinTable' => 'empleados_eventos',
			'foreignKey' => 'evento_id',
			'associationForeignKey' => 'empleado_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'Actividade' => array(
			'className' => 'Actividade',
			'joinTable' => 'actividades_eventos',
			'foreignKey' => 'evento_id',
			'associationForeignKey' => 'actividade_id',
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
