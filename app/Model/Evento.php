<?php
App::uses('AppModel', 'Model');
/**
 * Evento Model
 *
 * @property EventoTipo $EventoTipo
 * @property Cliente $Cliente
 * @property Recinto $Recinto
 * @property EstadoEvento $EstadoEvento
 * @property ItinerarioParticipante $ItinerarioParticipante
 * @property Bitacora $Bitacora
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
		'precio_evento' => array(
			'Ingrese un precio en números.' => array(
				'rule' => 'numeric',
				'required' => true,
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
		'EventoTipo' => array(
			'className' => 'EventoTipo',
			'foreignKey' => 'evento_tipo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Cliente' => array(
			'className' => 'Cliente',
			'foreignKey' => 'cliente_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Recinto' => array(
			'className' => 'Recinto',
			'foreignKey' => 'recinto_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'EstadoEvento' => array(
			'className' => 'EstadoEvento',
			'foreignKey' => 'estado_evento_id',
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
		),
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
