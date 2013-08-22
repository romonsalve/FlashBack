<?php
App::uses('AppModel', 'Model');
/**
 * Participante Model
 *
 * @property ParticipanteTipo $ParticipanteTipo
 */
class Participante extends AppModel {

	public $displayField = 'nombre_artistico_par';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
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
		'nombre_artistico_par' => array(
			'req' => array(
				'rule'    => array('minLength', 1),
        			'message' => 'Ingrese un nombre.'
			),
		),
		'desc_par' => array(
			'rule' => 'alphaNumeric',
			'allowEmpty' => true,
		),
		'ranking_par' => array(
			'rule' => array('range', -1 , 6),
			'message' => 'Ingrese un ranking desde 0 a 5.'
		),
		'rut_cont_par' => array(
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
		/*'nombre_cont_par'=> array(
			'nombre' => array(
				'rule' => 'nombre',
				'message' => 'Ingrese sólo texto.',
				'allowEmpty' => false,
			),
		),
		'apellidop_cont_par'=> array(
			'nombre' => array(
				'rule' => 'nombre',
				'message' => 'Ingrese sólo texto.',
				'allowEmpty' => false,
			),
		),
		'apellidom_cont_par'=> array(
			'nombre' => array(
				'rule' => 'nombre',
				'message' => 'Ingrese sólo texto.',
				'allowEmpty' => true,
			),
		),*/
		'fono_cont_par'=> array(
			'rule' => array('range', 99999, 57000000000),
			'message' => 'Ingrese un número de teléfono válido.',
			'required' => true,
		),
		'correo_cont_par' => array(
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
	/*public function nombre($check) {
		$value = array_values($check);
		$value = $value[0];
		return preg_match('|^[0-9a-zA-Z ÁÉÍÓÚáéíóúüÜ]*$|', $value);
	}*/

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'ParticipanteTipo' => array(
			'className' => 'ParticipanteTipo',
			'foreignKey' => 'participante_tipo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
