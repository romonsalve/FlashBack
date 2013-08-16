<?php
App::uses('EmpleadosEvento', 'Model');

/**
 * EmpleadosEvento Test Case
 *
 */
class EmpleadosEventoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.empleados_evento',
		'app.empleado',
		'app.empleado_tipo',
		'app.evento'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->EmpleadosEvento = ClassRegistry::init('EmpleadosEvento');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->EmpleadosEvento);

		parent::tearDown();
	}

}
