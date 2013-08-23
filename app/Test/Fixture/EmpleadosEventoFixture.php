<?php
/**
 * EmpleadosEventoFixture
 *
 */
class EmpleadosEventoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'empleado_id' => array('type' => 'integer', 'null' => false),
		'evento_id' => array('type' => 'integer', 'null' => false),
		'hora_inicio' => array('type' => 'time', 'null' => true),
		'hora_termino' => array('type' => 'time', 'null' => true),
		'cargo' => array('type' => 'text', 'null' => true, 'length' => 1073741824),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => array('empleado_id', 'evento_id', 'id')),
			'empleados_eventos_pk' => array('unique' => true, 'column' => array('empleado_id', 'evento_id', 'id')),
			'empleados_id' => array('unique' => false, 'column' => 'empleado_id'),
			'eventos_id4' => array('unique' => false, 'column' => 'evento_id')
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
			'empleado_id' => 1,
			'evento_id' => 1,
			'hora_inicio' => '08:26:42',
			'hora_termino' => '08:26:42',
			'cargo' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
		),
	);

}
