<?php
/**
 * ActividadesEventoTipoFixture
 *
 */
class ActividadesEventoTipoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'evento_tipo_id' => array('type' => 'integer', 'null' => false),
		'actividade_id' => array('type' => 'integer', 'null' => false),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => array('evento_tipo_id', 'actividade_id')),
			'actividades_evento_tipos_pk' => array('unique' => true, 'column' => array('evento_tipo_id', 'actividade_id')),
			'actividades_id2' => array('unique' => false, 'column' => 'actividade_id'),
			'evento_tipos_id3' => array('unique' => false, 'column' => 'evento_tipo_id')
		),
		'tableParameters' => array()
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'evento_tipo_id' => 1,
			'actividade_id' => 1
		),
	);

}
