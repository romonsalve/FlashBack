<?php
App::uses('RecursosPorEvento', 'Model');

/**
 * RecursosPorEvento Test Case
 *
 */
class RecursosPorEventoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.recursos_por_evento',
		'app.evento',
		'app.recinto',
		'app.recinto_tipo',
		'app.solicitud_cotizacione',
		'app.estado',
		'app.evento_tipo',
		'app.actividade',
		'app.actividades_evento_tipo',
		'app.actividades_evento',
		'app.participante_tipo',
		'app.participante',
		'app.par_tip_sol_cot',
		'app.evento_tipos_participante_tipo',
		'app.evento_tipos_recinto_tipo',
		'app.recurso_tipo',
		'app.recurso',
		'app.proveedore',
		'app.proveedores_recurso_tipo',
		'app.propiedade',
		'app.propiedades_recurso',
		'app.propiedades_recurso_tipo',
		'app.evento_tipos_recurso_tipo',
		'app.cliente',
		'app.cliente_tipo',
		'app.estado_evento',
		'app.bitacora',
		'app.vehiculo',
		'app.vehiculo_tipo',
		'app.itinerario_participante',
		'app.empleado',
		'app.empleado_tipo',
		'app.empleados_evento'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->RecursosPorEvento = ClassRegistry::init('RecursosPorEvento');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->RecursosPorEvento);

		parent::tearDown();
	}

}
