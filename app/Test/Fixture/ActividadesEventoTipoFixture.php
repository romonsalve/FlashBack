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
		'evento_tipos_id' => array('type' => 'integer', 'null' => false),
		'actividades_id' => array('type' => 'integer', 'null' => false),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => array('evento_tipos_id', 'actividades_id')),
			'actividades_evento_tipos_pk' => array('unique' => true, 'column' => array('evento_tipos_id', 'actividades_id')),
			'actividades_id2' => array('unique' => false, 'column' => 'actividades_id'),
			'evento_tipos_id3' => array('unique' => false, 'column' => 'evento_tipos_id')
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
			'evento_tipos_id' => 1,
			'actividades_id' => 1
		),
	);

}
