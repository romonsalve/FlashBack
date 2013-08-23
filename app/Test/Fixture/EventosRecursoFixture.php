<?php
/**
 * EventosRecursoFixture
 *
 */
class EventosRecursoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'eventos_id' => array('type' => 'integer', 'null' => false),
		'recursos_id' => array('type' => 'integer', 'null' => false),
		'cantidad' => array('type' => 'integer', 'null' => false),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => array('eventos_id', 'recursos_id', 'id')),
			'eventos_recursos_pk' => array('unique' => true, 'column' => array('eventos_id', 'recursos_id', 'id')),
			'eventos_id5' => array('unique' => false, 'column' => 'eventos_id'),
			'recursos_id2' => array('unique' => false, 'column' => 'recursos_id')
		),
		'tableParameters' => array()
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'eventos_id' => 1,
			'recursos_id' => 1,
			'cantidad' => 1
		),
	);

}
