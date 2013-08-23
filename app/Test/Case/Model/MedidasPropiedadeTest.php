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
		'app.recurso_tipos',
		'app.proveedores',
		'app.evento',
		'app.recintos',
		'app.evento_tipos',
		'app.clientes',
		'app.bitacora',
		'app.vehiculo',
		'app.vehiculo_tipo',
		'app.itinerario_participante',
		'app.participante',
		'app.participante_tipo',
		'app.evento_tipo',
		'app.actividade',
		'app.actividades_evento_tipo',
		'app.actividades_evento',
		'app.solicitud_cotizacione',
		'app.estados',
		'app.recinto_tipos',
		'app.participante_tipos_solicitud_cotizacione',
		'app.actividades_solicitud_cotizacione',
		'app.evento_tipos_participante_tipo',
		'app.recinto_tipo',
		'app.evento_tipos_recinto_tipo',
		'app.recurso_tipo',
		'app.evento_tipos_recurso_tipo',
		'app.proveedore',
		'app.proveedores_recurso_tipo',
		'app.propiedades_recurso_tipo',
		'app.eventos_recurso',
		'app.empleado',
		'app.empleado_tipo',
		'app.empleados_evento',
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
