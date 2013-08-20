<?php
App::uses('RecintoTipo', 'Model');

/**
 * RecintoTipo Test Case
 *
 */
class RecintoTipoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.recinto_tipo',
		'app.recinto',
		'app.evento',
		'app.evento_tipo',
		'app.solicitud_cotizacione',
		'app.estado',
		'app.cliente',
		'app.cliente_tipo',
		'app.par_tip_sol_cot',
		'app.participante_tipo',
		'app.participante',
		'app.evento_tipos_participante_tipo',
		'app.actividade',
		'app.actividades_evento_tipo',
		'app.actividades_evento',
		'app.evento_tipos_recinto_tipo',
		'app.recurso_tipo',
		'app.recurso',
		'app.proveedore',
		'app.proveedores_recurso_tipo',
		'app.propiedade',
		'app.propiedades_recurso',
		'app.propiedades_recurso_tipo',
		'app.evento_tipos_recurso_tipo',
		'app.estado_evento',
		'app.bitacora',
		'app.vehiculo',
		'app.vehiculo_tipo',
		'app.recursos_por_evento',
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
		$this->RecintoTipo = ClassRegistry::init('RecintoTipo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->RecintoTipo);

		parent::tearDown();
	}

}
