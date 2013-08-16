<?php
App::uses('EstadoEvento', 'Model');

/**
 * EstadoEvento Test Case
 *
 */
class EstadoEventoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.estado_evento',
		'app.evento'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->EstadoEvento = ClassRegistry::init('EstadoEvento');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->EstadoEvento);

		parent::tearDown();
	}

}
