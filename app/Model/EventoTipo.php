<?php
App::uses('AppModel', 'Model');
/**
 * EventoTipo Model
 *
 * @property Evento $Evento
 * @property SolicitudCotizacione $SolicitudCotizacione
 * @property Actividade $Actividade
 * @property ParticipanteTipo $ParticipanteTipo
 * @property RecintoTipo $RecintoTipo
 * @property RecursoTipo $RecursoTipo
 */
class EventoTipo extends AppModel {

public $displayField = 'nombre';


public $validate = array(
    'nombre' => array(
	'unico' => array(
		'rule'    => 'unico',
		'message' => 'Este tipo de evento ya ha sido ingresado.',
		'required' => true,
		'on' => 'create',
	    	),
	'alfanumerico' => array(
		'rule' => '^[a-zA-ZÑñáéíóúÁÉÍÓÚ ]{3,}^',
		'required' => true,
		'message' => 'Ingrese sólo letras. Mínimo 3 letras.'
		),
	)
);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Evento' => array(
			'className' => 'Evento',
			'foreignKey' => 'evento_tipo_id',
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
			'foreignKey' => 'evento_tipo_id',
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
		'Actividade' => array(
			'className' => 'Actividade',
			'joinTable' => 'actividades_evento_tipos',
			'foreignKey' => 'evento_tipo_id',
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
		),
		'ParticipanteTipo' => array(
			'className' => 'ParticipanteTipo',
			'joinTable' => 'evento_tipos_participante_tipos',
			'foreignKey' => 'evento_tipo_id',
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
		'RecintoTipo' => array(
			'className' => 'RecintoTipo',
			'joinTable' => 'evento_tipos_recinto_tipos',
			'foreignKey' => 'evento_tipo_id',
			'associationForeignKey' => 'recinto_tipo_id',
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
		'RecursoTipo' => array(
			'className' => 'RecursoTipo',
			'joinTable' => 'evento_tipos_recurso_tipos',
			'foreignKey' => 'evento_tipo_id',
			'associationForeignKey' => 'recurso_tipo_id',
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
