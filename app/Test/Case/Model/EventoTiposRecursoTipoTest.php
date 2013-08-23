<?php
App::uses('EventoTiposRecursoTipo', 'Model');

/**
 * EventoTiposRecursoTipo Test Case
 *
 */
class EventoTiposRecursoTipoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.evento_tipos_recurso_tipo',
		'app.evento_tipos',
		'app.recurso_tipos'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->EventoTiposRecursoTipo = ClassRegistry::init('EventoTiposRecursoTipo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->EventoTiposRecursoTipo);

		parent::tearDown();
	}

}
