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
		'evento_id' => array('type' => 'integer', 'null' => false),
		'recurso_id' => array('type' => 'integer', 'null' => false),
		'cantidad' => array('type' => 'integer', 'null' => false),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => array('evento_id', 'recurso_id', 'id')),
			'eventos_recursos_pk' => array('unique' => true, 'column' => array('evento_id', 'recurso_id', 'id')),
			'eventos_id5' => array('unique' => false, 'column' => 'evento_id'),
			'recursos_id2' => array('unique' => false, 'column' => 'recurso_id')
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
			'evento_id' => 1,
			'recurso_id' => 1,
			'cantidad' => 1
		),
	);

}
