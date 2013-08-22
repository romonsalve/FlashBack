<?php
App::uses('AppModel', 'Model');
/**
 * Cliente Model
 *
 * @property ClienteTipo $ClienteTipo
 * @property Evento $Evento
 * @property SolicitudCotizacione $SolicitudCotizacione
 */
class Cliente extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(

		'rut_cli' => array(
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
		'fono_cli'=> array(
			'rule' => array('range', 99999, 57000000000),
			'message' => 'Ingrese un número de teléfono válido.',
			'required' => true,
		),
		'correo_cli' => array(
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
		'ClienteTipo' => array(
			'className' => 'ClienteTipo',
			'foreignKey' => 'cliente_tipo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Evento' => array(
			'className' => 'Evento',
			'foreignKey' => 'cliente_id',
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
			'foreignKey' => 'cliente_id',
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

}
