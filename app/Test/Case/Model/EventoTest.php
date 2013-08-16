<?php
App::uses('Evento', 'Model');

/**
 * Evento Test Case
 *
 */
class EventoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.evento',
		'app.recinto',
		'app.evento_tipo',
		'app.estado_evento',
		'app.cliente',
		'app.bitacora',
		'app.vehiculo',
		'app.recursos_por_evento',
		'app.recurso',
		'app.recurso_tipo',
		'app.proveedore',
		'app.proveedores_recurso_tipo',
		'app.propiedade',
		'app.propiedades_recurso_tipo',
		'app.medida',
		'app.medidas_propiedade',
		'app.propiedades_recurso',
		'app.itinerario_participante',
		'app.empleado',
		'app.empleado_tipo',
		'app.empleados_evento',
		'app.actividade',
		'app.actividades_evento'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Evento = ClassRegistry::init('Evento');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Evento);

		parent::tearDown();
	}

}
