<?php
/**
 * EventoFixture
 *
 */
class EventoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'recintos_id' => array('type' => 'integer', 'null' => false),
		'evento_tipos_id' => array('type' => 'integer', 'null' => false),
		'clientes_id' => array('type' => 'integer', 'null' => true),
		'nombre' => array('type' => 'text', 'null' => true, 'length' => 1073741824),
		'fecha_inicio' => array('type' => 'date', 'null' => true),
		'fecha_termino' => array('type' => 'date', 'null' => true),
		'lista_invitados' => array('type' => 'text', 'null' => true, 'length' => 1073741824),
		'estado' => array('type' => 'text', 'null' => true, 'length' => 1073741824),
		'precio' => array('type' => 'integer', 'null' => true),
		'descripcion' => array('type' => 'text', 'null' => true, 'length' => 1073741824),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => 'id'),
			'eventos_pk' => array('unique' => true, 'column' => 'id'),
			'clientes_id' => array('unique' => false, 'column' => 'clientes_id'),
			'evento_tipos_id' => array('unique' => false, 'column' => 'evento_tipos_id'),
			'recintos_id' => array('unique' => false, 'column' => 'recintos_id')
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
			'recintos_id' => 1,
			'evento_tipos_id' => 1,
			'clientes_id' => 1,
			'nombre' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'fecha_inicio' => '2013-08-23',
			'fecha_termino' => '2013-08-23',
			'lista_invitados' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'estado' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'precio' => 1,
			'descripcion' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
		),
	);

}
