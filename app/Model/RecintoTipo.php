<?php
App::uses('AppModel', 'Model');
/**
 * RecintoTipo Model
 *
 * @property Recinto $Recinto
 * @property SolicitudCotizacione $SolicitudCotizacione
 * @property EventoTipo $EventoTipo
 */
class RecintoTipo extends AppModel {

	public $displayField = 'nombre';
	//The Associations below have been created with all possible keys, those that are not needed can be removed
	public $validate = array(
		'nombre' => array(
			'rule' => 'unico',
			'message' => 'Ya existe una tipo de recinto con ese nombre',
		),
	);
/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Recinto' => array(
			'className' => 'Recinto',
			'foreignKey' => 'recinto_tipo_id',
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
			'foreignKey' => 'recinto_tipo_id',
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
		'EventoTipo' => array(
			'className' => 'EventoTipo',
			'joinTable' => 'evento_tipos_recinto_tipos',
			'foreignKey' => 'recinto_tipo_id',
			'associationForeignKey' => 'evento_tipo_id',
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
