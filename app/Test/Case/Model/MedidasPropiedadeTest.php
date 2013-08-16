<?php
App::uses('MedidasPropiedade', 'Model');

/**
 * MedidasPropiedade Test Case
 *
 */
class MedidasPropiedadeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.medidas_propiedade',
		'app.medida',
		'app.propiedade',
		'app.recurso_tipo',
		'app.propiedades_recurso_tipo',
		'app.recurso',
		'app.proveedore',
		'app.proveedores_recurso_tipo',
		'app.propiedades_recurso'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MedidasPropiedade = ClassRegistry::init('MedidasPropiedade');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MedidasPropiedade);

		parent::tearDown();
	}

}
