<?php
/**
 * ActividadesSolicitudCotizacioneFixture
 *
 */
class ActividadesSolicitudCotizacioneFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'solicitud_cotizaciones_id' => array('type' => 'integer', 'null' => false),
		'actividades_id' => array('type' => 'integer', 'null' => false),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => array('solicitud_cotizaciones_id', 'actividades_id')),
			'actividades_id3' => array('unique' => false, 'column' => 'actividades_id'),
			'solicitud_cotizaciones_id2' => array('unique' => false, 'column' => 'solicitud_cotizaciones_id')
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
			'solicitud_cotizaciones_id' => 1,
			'actividades_id' => 1
		),
	);

}
