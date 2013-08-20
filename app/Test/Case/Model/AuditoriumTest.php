<?php
App::uses('Auditorium', 'Model');

/**
 * Auditorium Test Case
 *
 */
class AuditoriumTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.auditorium'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Auditorium = ClassRegistry::init('Auditorium');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Auditorium);

		parent::tearDown();
	}

}
