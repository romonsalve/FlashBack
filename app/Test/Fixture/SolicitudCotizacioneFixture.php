<?php
/**
 * SolicitudCotizacioneFixture
 *
 */
class SolicitudCotizacioneFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'estados_id' => array('type' => 'integer', 'null' => false),
		'evento_tipos_id' => array('type' => 'integer', 'null' => true),
		'clientes_id' => array('type' => 'integer', 'null' => false),
		'recinto_tipos_id' => array('type' => 'integer', 'null' => true),
		'nombre' => array('type' => 'text', 'null' => true, 'length' => 1073741824),
		'descripcion' => array('type' => 'text', 'null' => true, 'length' => 1073741824),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => 'id'),
			'solicitud_cotizaciones_pk' => array('unique' => true, 'column' => 'id'),
			'clientes_id2' => array('unique' => false, 'column' => 'clientes_id'),
			'estados_id' => array('unique' => false, 'column' => 'estados_id'),
			'evento_tipos_id2' => array('unique' => false, 'column' => 'evento_tipos_id'),
			'recinto_tipos_id' => array('unique' => false, 'column' => 'recinto_tipos_id')
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
			'estados_id' => 1,
			'evento_tipos_id' => 1,
			'clientes_id' => 1,
			'recinto_tipos_id' => 1,
			'nombre' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'descripcion' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
		),
	);

}
