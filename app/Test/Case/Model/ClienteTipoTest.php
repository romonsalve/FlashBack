<?php
App::uses('ClienteTipo', 'Model');

/**
 * ClienteTipo Test Case
 *
 */
class ClienteTipoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cliente_tipo',
		'app.cliente',
		'app.cliente_tipos'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ClienteTipo = ClassRegistry::init('ClienteTipo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ClienteTipo);

		parent::tearDown();
	}

}
