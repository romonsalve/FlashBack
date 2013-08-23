<?php
App::uses('PropiedadesRecursoTipo', 'Model');

/**
 * PropiedadesRecursoTipo Test Case
 *
 */
class PropiedadesRecursoTipoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.propiedades_recurso_tipo',
		'app.medidas',
		'app.propiedades',
		'app.recurso_tipos'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PropiedadesRecursoTipo = ClassRegistry::init('PropiedadesRecursoTipo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PropiedadesRecursoTipo);

		parent::tearDown();
	}

}
