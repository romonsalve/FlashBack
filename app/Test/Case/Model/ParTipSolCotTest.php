<?php
App::uses('ParTipSolCot', 'Model');

/**
 * ParTipSolCot Test Case
 *
 */
class ParTipSolCotTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.par_tip_sol_cot',
		'app.solicitud_cotizacione',
		'app.participante_tipo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ParTipSolCot = ClassRegistry::init('ParTipSolCot');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ParTipSolCot);

		parent::tearDown();
	}

}
