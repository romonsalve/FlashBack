<?php
App::uses('AppModel', 'Model');
/**
 * ParticipanteTiposSolicitudCotizacione Model
 *
 * @property SolicitudCotizaciones $SolicitudCotizaciones
 * @property ParticipanteTipos $ParticipanteTipos
 */
class ParticipanteTiposSolicitudCotizacione extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'solicitud_cotizaciones_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'participante_tipos_id' => array(
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
		'SolicitudCotizaciones' => array(
			'className' => 'SolicitudCotizaciones',
			'foreignKey' => 'solicitud_cotizaciones_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'ParticipanteTipos' => array(
			'className' => 'ParticipanteTipos',
			'foreignKey' => 'participante_tipos_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
