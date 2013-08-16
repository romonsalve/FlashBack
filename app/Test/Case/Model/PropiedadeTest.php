<?php
App::uses('Propiedade', 'Model');

/**
 * Propiedade Test Case
 *
 */
class PropiedadeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.propiedade',
		'app.recurso_tipo',
		'app.propiedades_recurso_tipo',
		'app.medida',
		'app.medidas_propiedade',
		'app.recurso',
		'app.propiedades_recurso'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Propiedade = ClassRegistry::init('Propiedade');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Propiedade);

		parent::tearDown();
	}

}
