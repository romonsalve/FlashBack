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
		'app.recursos',
		'app.propiedades'
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
