<?php
App::uses('MedidasPropiedade', 'Model');

/**
 * MedidasPropiedade Test Case
 *
 */
class MedidasPropiedadeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.medidas_propiedade',
		'app.medida',
		'app.propiedade',
		'app.recurso',
		'app.recurso_tipo',
		'app.proveedore',
		'app.proveedores_recurso_tipo',
		'app.evento_tipo',
		'app.evento',
		'app.recinto',
		'app.recinto_tipo',
		'app.solicitud_cotizacione',
		'app.estado',
		'app.cliente',
		'app.cliente_tipo',
		'app.par_tip_sol_cot',
		'app.participante_tipo',
		'app.participante',
		'app.evento_tipos_participante_tipo',
		'app.evento_tipos_recinto_tipo',
		'app.estado_evento',
		'app.bitacora',
		'app.vehiculo',
		'app.vehiculo_tipo',
		'app.recursos_por_evento',
		'app.itinerario_participante',
		'app.empleado',
		'app.empleado_tipo',
		'app.empleados_evento',
		'app.actividade',
		'app.actividades_evento_tipo',
		'app.actividades_evento',
		'app.evento_tipos_recurso_tipo',
		'app.propiedades_recurso_tipo',
		'app.propiedades_recurso'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MedidasPropiedade = ClassRegistry::init('MedidasPropiedade');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MedidasPropiedade);

		parent::tearDown();
	}

}
