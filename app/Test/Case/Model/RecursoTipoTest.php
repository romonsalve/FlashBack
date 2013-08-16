<?php
App::uses('RecursoTipo', 'Model');

/**
 * RecursoTipo Test Case
 *
 */
class RecursoTipoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.recurso_tipo',
		'app.evento_tipo',
		'app.evento',
		'app.recinto',
		'app.recinto_tipo',
		'app.solicitud_cotizacione',
		'app.estado',
		'app.cliente',
		'app.cliente_tipo',
		'app.participan',
		'app.participante_tipo',
		'app.participante',
		'app.evento_tipos_participante_tipo',
		'app.evento_tipos_recinto_tipo',
		'app.estado_evento',
		'app.bitacora',
		'app.vehiculo',
		'app.vehiculo_tipo',
		'app.recursos_por_evento',
		'app.recurso',
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
		'app.actividades_evento_tipo',
		'app.actividades_evento'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->RecursoTipo = ClassRegistry::init('RecursoTipo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->RecursoTipo);

		parent::tearDown();
	}

}
