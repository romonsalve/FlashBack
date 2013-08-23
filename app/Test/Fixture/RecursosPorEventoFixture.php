<?php
/**
 * RecursosPorEventoFixture
 *
 */
class RecursosPorEventoFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'recursos_por_evento';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'evento_id' => array('type' => 'integer', 'null' => false),
		'recurso_id' => array('type' => 'integer', 'null' => false),
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'cantidad' => array('type' => 'integer', 'null' => false),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => array('evento_id', 'recurso_id', 'id')),
			'recursos_por_evento_pk' => array('unique' => true, 'column' => array('evento_id', 'recurso_id', 'id')),
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
			'evento_id' => 1,
			'recurso_id' => 1,
			'id' => 1,
			'cantidad' => 1
		),
	);

}
