<?php
App::uses('Participan', 'Model');

/**
 * Participan Test Case
 *
 */
class ParticipanTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.participan',
		'app.solicitud_cotizacione',
		'app.participante_tipo',
		'app.evento_tipo',
		'app.evento_tipos_participante_tipo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Participan = ClassRegistry::init('Participan');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Participan);

		parent::tearDown();
	}

}
