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
		'app.recurso',
		'app.recurso_tipo',
		'app.proveedore',
		'app.proveedores_recurso_tipo',
		'app.propiedade',
		'app.propiedades_recurso_tipo',
		'app.medida',
		'app.medidas_propiedade',
		'app.propiedades_recurso'
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
