<?php
App::uses('PropiedadesRecurso', 'Model');

/**
 * PropiedadesRecurso Test Case
 *
 */
class PropiedadesRecursoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.propiedades_recurso',
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
		'app.propiedade',
		'app.medida',
		'app.medidas_propiedade',
		'app.propiedades_recurso_tipo',
		'app.eventos_recurso',
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
		$this->PropiedadesRecurso = ClassRegistry::init('PropiedadesRecurso');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PropiedadesRecurso);

		parent::tearDown();
	}

}
