<?php
App::uses('AppModel', 'Model');
/**
 * EventoTiposParticipanteTipo Model
 *
 * @property EventoTipos $EventoTipos
 * @property ParticipanteTipos $ParticipanteTipos
 */
class EventoTiposParticipanteTipo extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
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
		'EventoTipos' => array(
			'className' => 'EventoTipos',
			'foreignKey' => 'evento_tipos_id',
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
