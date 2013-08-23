<?php
App::uses('ProveedoresRecursoTipo', 'Model');

/**
 * ProveedoresRecursoTipo Test Case
 *
 */
class ProveedoresRecursoTipoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.proveedores_recurso_tipo',
		'app.proveedores',
		'app.recurso_tipos'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ProveedoresRecursoTipo = ClassRegistry::init('ProveedoresRecursoTipo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ProveedoresRecursoTipo);

		parent::tearDown();
	}

}
