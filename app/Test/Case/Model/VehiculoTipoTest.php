<?php
App::uses('VehiculoTipo', 'Model');

/**
 * VehiculoTipo Test Case
 *
 */
class VehiculoTipoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.vehiculo_tipo',
		'app.vehiculo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->VehiculoTipo = ClassRegistry::init('VehiculoTipo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->VehiculoTipo);

		parent::tearDown();
	}

}
