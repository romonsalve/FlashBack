<?php
App::uses('ParticipanteTipo', 'Model');

/**
 * ParticipanteTipo Test Case
 *
 */
class ParticipanteTipoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.participante_tipo',
		'app.participante',
		'app.solicitud_cotizacione',
		'app.estado',
		'app.evento_tipo',
		'app.evento',
		'app.cliente',
		'app.cliente_tipo',
		'app.recinto',
		'app.recinto_tipo',
		'app.evento_tipos_recinto_tipo',
		'app.estado_evento',
		'app.itinerario_participante',
		'app.bitacora',
		'app.vehiculo',
		'app.vehiculo_tipo',
		'app.recurso',
		'app.recurso_tipo',
		'app.evento_tipos_recurso_tipo',
		'app.propiedade',
		'app.medida',
		'app.medidas_propiedade',
		'app.propiedades_recurso_tipo',
		'app.propiedades_recurso',
		'app.proveedore',
		'app.proveedores_recurso_tipo',
		'app.eventos_recurso',
		'app.empleado',
		'app.empleado_tipo',
		'app.empleados_evento',
		'app.actividade',
		'app.actividades_evento_tipo',
		'app.actividades_evento',
		'app.evento_tipos_participante_tipo',
		'app.participante_tipos_solicitud_cotizacione'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ParticipanteTipo = ClassRegistry::init('ParticipanteTipo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ParticipanteTipo);

		parent::tearDown();
	}

}
