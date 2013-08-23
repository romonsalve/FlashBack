<?php
App::uses('ActividadesEventoTipo', 'Model');

/**
 * ActividadesEventoTipo Test Case
 *
 */
class ActividadesEventoTipoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.actividades_evento_tipo',
		'app.evento_tipos',
		'app.actividades'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ActividadesEventoTipo = ClassRegistry::init('ActividadesEventoTipo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ActividadesEventoTipo);

		parent::tearDown();
	}

}
