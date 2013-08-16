<?php
App::uses('EmpleadoTipo', 'Model');

/**
 * EmpleadoTipo Test Case
 *
 */
class EmpleadoTipoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.empleado_tipo',
		'app.empleado',
		'app.evento',
		'app.empleados_evento'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->EmpleadoTipo = ClassRegistry::init('EmpleadoTipo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->EmpleadoTipo);

		parent::tearDown();
	}

}
