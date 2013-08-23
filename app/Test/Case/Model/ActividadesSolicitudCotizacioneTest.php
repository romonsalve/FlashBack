<?php
App::uses('ActividadesSolicitudCotizacione', 'Model');

/**
 * ActividadesSolicitudCotizacione Test Case
 *
 */
class ActividadesSolicitudCotizacioneTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.actividades_solicitud_cotizacione',
		'app.solicitud_cotizaciones',
		'app.actividades'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ActividadesSolicitudCotizacione = ClassRegistry::init('ActividadesSolicitudCotizacione');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ActividadesSolicitudCotizacione);

		parent::tearDown();
	}

}
