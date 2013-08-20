<?php
App::uses('AppModel', 'Model');
/**
 * ParTipSolCot Model
 *
 * @property SolicitudCotizacione $SolicitudCotizacione
 * @property ParticipanteTipo $ParticipanteTipo
 */
class ParTipSolCot extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'par_tip_sol_cot';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'solicitud_cotizacione_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'participante_tipo_id' => array(
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
		'SolicitudCotizacione' => array(
			'className' => 'SolicitudCotizacione',
			'foreignKey' => 'solicitud_cotizacione_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'ParticipanteTipo' => array(
			'className' => 'ParticipanteTipo',
			'foreignKey' => 'participante_tipo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
