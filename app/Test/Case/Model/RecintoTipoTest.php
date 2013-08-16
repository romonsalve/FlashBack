<?php
App::uses('RecintoTipo', 'Model');

/**
 * RecintoTipo Test Case
 *
 */
class RecintoTipoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.recinto_tipo',
		'app.solicitud_cotizacione',
		'app.recinto',
		'app.evento_tipo',
		'app.evento_tipos_recinto_tipo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->RecintoTipo = ClassRegistry::init('RecintoTipo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->RecintoTipo);

		parent::tearDown();
	}

}
