<?php
App::uses('AppModel', 'Model');
/**
 * SolicitudCotizacione Model
 *
 * @property Estado $Estado
 * @property EventoTipo $EventoTipo
 * @property Cliente $Cliente
 * @property RecintoTipo $RecintoTipo
 * @property ParticipanteTipo $ParticipanteTipo
 * @property Actividade $Actividade
 */
class SolicitudCotizacione extends AppModel {

	public $displayField = 'nombre';
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'estado_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'cliente_id' => array(
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
		'Estado' => array(
			'className' => 'Estado',
			'foreignKey' => 'estado_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
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
		'RecintoTipo' => array(
			'className' => 'RecintoTipo',
			'foreignKey' => 'recinto_tipo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'ParticipanteTipo' => array(
			'className' => 'ParticipanteTipo',
			'joinTable' => 'participante_tipos_solicitud_cotizaciones',
			'foreignKey' => 'solicitud_cotizacione_id',
			'associationForeignKey' => 'participante_tipo_id',
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
			'joinTable' => 'actividades_solicitud_cotizaciones',
			'foreignKey' => 'solicitud_cotizacione_id',
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
