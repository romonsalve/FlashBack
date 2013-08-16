<?php
App::uses('Proveedore', 'Model');

/**
 * Proveedore Test Case
 *
 */
class ProveedoreTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.proveedore',
		'app.recurso',
		'app.recurso_tipo',
		'app.proveedores_recurso_tipo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Proveedore = ClassRegistry::init('Proveedore');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Proveedore);

		parent::tearDown();
	}

}
