<?php
App::uses('SolicitudCotizacione', 'Model');

/**
 * SolicitudCotizacione Test Case
 *
 */
class SolicitudCotizacioneTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.solicitud_cotizacione',
		'app.estados',
		'app.evento_tipos',
		'app.clientes',
		'app.recinto_tipos',
		'app.participante_tipo',
		'app.participante',
		'app.evento_tipo',
		'app.actividade',
		'app.actividades_evento_tipo',
		'app.evento',
		'app.recintos',
		'app.bitacora',
		'app.vehiculo',
		'app.vehiculo_tipo',
		'app.itinerario_participante',
		'app.recurso',
		'app.recurso_tipos',
		'app.proveedores',
		'app.eventos_recurso',
		'app.propiedade',
		'app.propiedades_recurso',
		'app.medida',
		'app.medidas_propiedade',
		'app.recurso_tipo',
		'app.evento_tipos_recurso_tipo',
		'app.proveedore',
		'app.proveedores_recurso_tipo',
		'app.propiedades_recurso_tipo',
		'app.empleado',
		'app.empleado_tipo',
		'app.empleados_evento',
		'app.actividades_evento',
		'app.actividades_solicitud_cotizacione',
		'app.evento_tipos_participante_tipo',
		'app.recinto_tipo',
		'app.evento_tipos_recinto_tipo',
		'app.participante_tipos_solicitud_cotizacione'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SolicitudCotizacione = ClassRegistry::init('SolicitudCotizacione');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SolicitudCotizacione);

		parent::tearDown();
	}

}
