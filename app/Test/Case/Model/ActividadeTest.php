<?php
App::uses('Actividade', 'Model');

/**
 * Actividade Test Case
 *
 */
class ActividadeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.actividade',
		'app.evento_tipo',
		'app.actividades_evento_tipo',
		'app.participante_tipo',
		'app.participante',
		'app.evento_tipos_participante_tipo',
		'app.solicitud_cotizacione',
		'app.estados',
		'app.evento_tipos',
		'app.clientes',
		'app.recinto_tipos',
		'app.participante_tipos_solicitud_cotizacione',
		'app.actividades_solicitud_cotizacione',
		'app.recinto_tipo',
		'app.evento_tipos_recinto_tipo',
		'app.recurso_tipo',
		'app.evento_tipos_recurso_tipo',
		'app.proveedore',
		'app.proveedores_recurso_tipo',
		'app.propiedade',
		'app.recurso',
		'app.recurso_tipos',
		'app.proveedores',
		'app.evento',
		'app.recintos',
		'app.bitacora',
		'app.vehiculo',
		'app.vehiculo_tipo',
		'app.itinerario_participante',
		'app.eventos_recurso',
		'app.empleado',
		'app.empleado_tipo',
		'app.empleados_evento',
		'app.actividades_evento',
		'app.propiedades_recurso',
		'app.medida',
		'app.medidas_propiedade',
		'app.propiedades_recurso_tipo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Actividade = ClassRegistry::init('Actividade');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Actividade);

		parent::tearDown();
	}

}
