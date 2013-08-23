<?php
App::uses('ActividadesEvento', 'Model');

/**
 * ActividadesEvento Test Case
 *
 */
class ActividadesEventoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.actividades_evento',
		'app.eventos',
		'app.actividades'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ActividadesEvento = ClassRegistry::init('ActividadesEvento');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ActividadesEvento);

		parent::tearDown();
	}

}
