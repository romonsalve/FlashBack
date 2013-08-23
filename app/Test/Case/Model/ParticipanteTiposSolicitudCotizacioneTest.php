<?php
App::uses('ParticipanteTiposSolicitudCotizacione', 'Model');

/**
 * ParticipanteTiposSolicitudCotizacione Test Case
 *
 */
class ParticipanteTiposSolicitudCotizacioneTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.participante_tipos_solicitud_cotizacione',
		'app.solicitud_cotizaciones',
		'app.participante_tipos'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ParticipanteTiposSolicitudCotizacione = ClassRegistry::init('ParticipanteTiposSolicitudCotizacione');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ParticipanteTiposSolicitudCotizacione);

		parent::tearDown();
	}

}
