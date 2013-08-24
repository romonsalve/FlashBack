<?php
App::uses('AppModel', 'Model');
/**
 * RecursoTipo Model
 *
 * @property Recurso $Recurso
 * @property EventoTipo $EventoTipo
 * @property Proveedore $Proveedore
 * @property Propiedade $Propiedade
 */
class RecursoTipo extends AppModel {
	public $displayField = 'nombre';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	public $validate = array(
	    'nombre' => array(
			'unico' => array(
				'rule'    => 'unico',
				'message' => 'Este tipo de recurso ya ha sido ingresado.',
				'required' => true,
				'on' => 'create',
			),
			'alfanumerico' => array(
				'rule' => 'alphanumeric',
				'required' => true,
				'message' => 'Ingrese sólo caracteres alfanuméricos.'
			),
		),
	);
	public function unico($check){
		$fields = array();
		foreach ($check as $key => $value) {
			$fields[$key . ' ILIKE'] = $value;
		}
		return !$this->find('count', array('conditions' => $fields, 'recursive' => -1));
	}
/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Recurso' => array(
			'className' => 'Recurso',
			'foreignKey' => 'recurso_tipo_id',
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
			'joinTable' => 'evento_tipos_recurso_tipos',
			'foreignKey' => 'recurso_tipo_id',
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
		),
		'Proveedore' => array(
			'className' => 'Proveedore',
			'joinTable' => 'proveedores_recurso_tipos',
			'foreignKey' => 'recurso_tipo_id',
			'associationForeignKey' => 'proveedore_id',
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
		'Propiedade' => array(
			'className' => 'Propiedade',
			'joinTable' => 'propiedades_recurso_tipos',
			'foreignKey' => 'recurso_tipo_id',
			'associationForeignKey' => 'propiedade_id',
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
