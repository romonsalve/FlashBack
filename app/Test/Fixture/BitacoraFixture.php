<?php
/**
 * BitacoraFixture
 *
 */
class BitacoraFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'evento_id' => array('type' => 'integer', 'null' => true),
		'vehiculo_id' => array('type' => 'integer', 'null' => false),
		'hora_inicio' => array('type' => 'time', 'null' => true),
		'hora_termino' => array('type' => 'time', 'null' => true),
		'descripcion' => array('type' => 'text', 'null' => true, 'length' => 1073741824),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => 'id'),
			'bitacoras_pk' => array('unique' => true, 'column' => 'id'),
			'eventos_id' => array('unique' => false, 'column' => 'evento_id'),
			'vehiculo_id' => array('unique' => false, 'column' => 'vehiculo_id')
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
			'id' => 1,
			'evento_id' => 1,
			'vehiculo_id' => 1,
			'hora_inicio' => '06:18:40',
			'hora_termino' => '06:18:40',
			'descripcion' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
		),
	);

}
