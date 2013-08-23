<?php
App::uses('AppModel', 'Model');
/**
 * SolicitudCotizacione Model
 *
 * @property Estados $Estados
 * @property EventoTipos $EventoTipos
 * @property Clientes $Clientes
 * @property RecintoTipos $RecintoTipos
 * @property ParticipanteTipo $ParticipanteTipo
 * @property Actividade $Actividade
 */
class SolicitudCotizacione extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'estados_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'clientes_id' => array(
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
		'Estados' => array(
			'className' => 'Estados',
			'foreignKey' => 'estados_id',
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
		),
		'RecintoTipos' => array(
			'className' => 'RecintoTipos',
			'foreignKey' => 'recinto_tipos_id',
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
