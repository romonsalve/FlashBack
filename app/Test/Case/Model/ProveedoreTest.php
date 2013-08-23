<?php
App::uses('Proveedore', 'Model');

/**
 * Proveedore Test Case
 *
 */
class ProveedoreTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.proveedore',
		'app.recurso_tipo',
		'app.evento_tipo',
		'app.actividade',
		'app.actividades_evento_tipo',
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
		'app.evento_tipos_participante_tipo',
		'app.solicitud_cotizacione',
		'app.estados',
		'app.recinto_tipos',
		'app.participante_tipos_solicitud_cotizacione',
		'app.actividades_solicitud_cotizacione',
		'app.recurso',
		'app.recurso_tipos',
		'app.proveedores',
		'app.eventos_recurso',
		'app.propiedade',
		'app.propiedades_recurso',
		'app.medida',
		'app.medidas_propiedade',
		'app.propiedades_recurso_tipo',
		'app.empleado',
		'app.empleado_tipo',
		'app.empleados_evento',
		'app.actividades_evento',
		'app.recinto_tipo',
		'app.evento_tipos_recinto_tipo',
		'app.evento_tipos_recurso_tipo',
		'app.proveedores_recurso_tipo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Proveedore = ClassRegistry::init('Proveedore');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Proveedore);

		parent::tearDown();
	}

}
