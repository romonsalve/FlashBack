<?php
App::uses('AppModel', 'Model');
/**
 * Empleado Model
 *
 * @property EmpleadoTipo $EmpleadoTipo
 * @property Evento $Evento
 */
class Empleado extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(

		'rut_emp' => array(
			'formato' => array(
				'rule' => '^[1-9][0-9]{0,7}[-][0-9kK]{1}^',
				'message' => 'Ingrese el rut sin puntos con guión.'
			),
			'digitoVerificador' => array(
				'rule' => 'verificarRut',
				'message' => 'Rut no válido.',
			),
			'sinRepetir' => array(
				'rule' => 'isUnique',
				'on' => 'create',
			)
		),
		'fono_emp'=> array(
			'rule' => array('range', 99999, 57000000000),
			'message' => 'Ingrese un número de teléfono válido.',
			'required' => true,
		),
		'correo_emp' => array(
			'rule' => 'email',
			'message' => 'Ingrese un correo electrónico válido',
			'allowEmpty' => true,
		)
	);

	public function verificarRut($check){
		$rut = explode('-', array_values($check)[0]);
		$r = $rut[0];
		$s=1;
		for($m=0;$r!=0;$r/=10)
			$s=($s+$r%10*(9-$m++%6))%11;
		$dv = chr($s?$s+47:75);
		return (strcasecmp($dv, $rut[1]) == 0 );
	}
	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'EmpleadoTipo' => array(
			'className' => 'EmpleadoTipo',
			'foreignKey' => 'empleado_tipo_id',
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
		'Evento' => array(
			'className' => 'Evento',
			'joinTable' => 'empleados_eventos',
			'foreignKey' => 'empleado_id',
			'associationForeignKey' => 'evento_id',
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
