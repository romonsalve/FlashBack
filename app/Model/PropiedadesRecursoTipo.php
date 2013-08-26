<?php
App::uses('AppModel', 'Model');
/**
 * PropiedadesRecursoTipo Model
 *
 * @property Medida $Medida
 * @property Propiedade $Propiedade
 * @property RecursoTipo $RecursoTipo
 */
class PropiedadesRecursoTipo extends AppModel {

	public $displayField = 'medida_id';
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'propiedade_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'recurso_tipo_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'minimo_medida' =>array(
			'natural' => array(
				'rule' => 'naturalNumber',
				'message' => 'Ingrese un número natural',
			)
		) ,
		'maximo_medida' => array(
			'natural' => array(
				'rule' => 'naturalNumber',
				'message' => 'Ingrese un número natural',
			),
			'comparar' => array(
				'rule' => array('greaterthanfield', 'minimo_medida'),
				'message' => 'el valor máximo debe ser mayor a la medida mínima.'
			)
		),
	);

    function greaterthanfield($check,$otherfield) 
    { 
        //get name of field 
        $fname = ''; 
        foreach ($check as $key => $value){ 
            $fname = $key; 
            break; 
        } 
        return $this->data[$this->name][$otherfield] < $this->data[$this->name][$fname]; 
    } 

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Medida' => array(
			'className' => 'Medida',
			'foreignKey' => 'medida_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Propiedade' => array(
			'className' => 'Propiedade',
			'foreignKey' => 'propiedade_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'RecursoTipo' => array(
			'className' => 'RecursoTipo',
			'foreignKey' => 'recurso_tipo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
