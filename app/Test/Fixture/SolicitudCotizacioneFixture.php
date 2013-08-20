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
		'estado_id' => array('type' => 'integer', 'null' => false),
		'evento_tipo_id' => array('type' => 'integer', 'null' => true),
		'cliente_id' => array('type' => 'integer', 'null' => false),
		'recinto_tipo_id' => array('type' => 'integer', 'null' => true),
		'nombre_cot' => array('type' => 'text', 'null' => true, 'length' => 1073741824),
		'desc_cot' => array('type' => 'text', 'null' => true, 'length' => 1073741824),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => 'id'),
			'solicitud_cotizaciones_pk' => array('unique' => true, 'column' => 'id'),
			'clientes_id2' => array('unique' => false, 'column' => 'cliente_id'),
			'estados_id' => array('unique' => false, 'column' => 'estado_id'),
			'evento_tipos_id2' => array('unique' => false, 'column' => 'evento_tipo_id'),
			'recinto_tipos_id' => array('unique' => false, 'column' => 'recinto_tipo_id')
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
			'estado_id' => 1,
			'evento_tipo_id' => 1,
			'cliente_id' => 1,
			'recinto_tipo_id' => 1,
			'nombre_cot' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'desc_cot' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
		),
	);

}
