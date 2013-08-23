<?php
App::uses('EventoTiposRecintoTipo', 'Model');

/**
 * EventoTiposRecintoTipo Test Case
 *
 */
class EventoTiposRecintoTipoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.evento_tipos_recinto_tipo',
		'app.recinto_tipos',
		'app.evento_tipos'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->EventoTiposRecintoTipo = ClassRegistry::init('EventoTiposRecintoTipo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->EventoTiposRecintoTipo);

		parent::tearDown();
	}

}
