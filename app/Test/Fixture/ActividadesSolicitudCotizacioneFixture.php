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
		'solicitud_cotizacione_id' => array('type' => 'integer', 'null' => false),
		'actividade_id' => array('type' => 'integer', 'null' => false),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => array('solicitud_cotizacione_id', 'actividade_id')),
			'actividades_id3' => array('unique' => false, 'column' => 'actividade_id'),
			'solicitud_cotizaciones_id2' => array('unique' => false, 'column' => 'solicitud_cotizacione_id')
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
			'solicitud_cotizacione_id' => 1,
			'actividade_id' => 1
		),
	);

}
