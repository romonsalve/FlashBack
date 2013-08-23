<?php
/**
 * ParticipanteTiposSolicitudCotizacioneFixture
 *
 */
class ParticipanteTiposSolicitudCotizacioneFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'solicitud_cotizaciones_id' => array('type' => 'integer', 'null' => false),
		'participante_tipos_id' => array('type' => 'integer', 'null' => false),
		'descripcion' => array('type' => 'text', 'null' => true, 'length' => 1073741824),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => array('solicitud_cotizaciones_id', 'participante_tipos_id', 'id')),
			'participante_tipos_id3' => array('unique' => false, 'column' => 'participante_tipos_id'),
			'solicitud_cotizaciones_id' => array('unique' => false, 'column' => 'solicitud_cotizaciones_id')
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
			'solicitud_cotizaciones_id' => 1,
			'participante_tipos_id' => 1,
			'descripcion' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
		),
	);

}
