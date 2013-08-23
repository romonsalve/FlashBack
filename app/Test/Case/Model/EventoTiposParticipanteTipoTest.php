<?php
App::uses('EventoTiposParticipanteTipo', 'Model');

/**
 * EventoTiposParticipanteTipo Test Case
 *
 */
class EventoTiposParticipanteTipoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.evento_tipos_participante_tipo',
		'app.evento_tipos',
		'app.participante_tipos'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->EventoTiposParticipanteTipo = ClassRegistry::init('EventoTiposParticipanteTipo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->EventoTiposParticipanteTipo);

		parent::tearDown();
	}

}
