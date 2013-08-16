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
		'recinto_id' => array('type' => 'integer', 'null' => false),
		'evento_tipo_id' => array('type' => 'integer', 'null' => false),
		'estado_evento_id' => array('type' => 'integer', 'null' => false),
		'cliente_id' => array('type' => 'integer', 'null' => true),
		'nombre_evento' => array('type' => 'text', 'null' => true, 'length' => 1073741824),
		'descripcion_evento' => array('type' => 'text', 'null' => true, 'length' => 1073741824),
		'fecha_de_inicio' => array('type' => 'date', 'null' => true),
		'fecha_de_termino' => array('type' => 'date', 'null' => true),
		'precio_evento' => array('type' => 'integer', 'null' => true),
		'lista_invitados' => array('type' => 'text', 'null' => true, 'length' => 1073741824),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => 'id'),
			'eventos_pk' => array('unique' => true, 'column' => 'id'),
			'clientes_id' => array('unique' => false, 'column' => 'cliente_id'),
			'estado_evento_id' => array('unique' => false, 'column' => 'estado_evento_id'),
			'evento_tipos_id' => array('unique' => false, 'column' => 'evento_tipo_id'),
			'recintos_id' => array('unique' => false, 'column' => 'recinto_id')
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
			'recinto_id' => 1,
			'evento_tipo_id' => 1,
			'estado_evento_id' => 1,
			'cliente_id' => 1,
			'nombre_evento' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'descripcion_evento' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'fecha_de_inicio' => '2013-08-16',
			'fecha_de_termino' => '2013-08-16',
			'precio_evento' => 1,
			'lista_invitados' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
		),
	);

}
