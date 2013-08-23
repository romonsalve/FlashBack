<?php
App::uses('EventosRecurso', 'Model');

/**
 * EventosRecurso Test Case
 *
 */
class EventosRecursoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.eventos_recurso',
		'app.eventos',
		'app.recursos'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->EventosRecurso = ClassRegistry::init('EventosRecurso');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->EventosRecurso);

		parent::tearDown();
	}

}
