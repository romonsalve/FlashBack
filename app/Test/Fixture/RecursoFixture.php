<?php
/**
 * RecursoFixture
 *
 */
class RecursoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'recurso_tipos_id' => array('type' => 'integer', 'null' => false),
		'proveedores_id' => array('type' => 'integer', 'null' => true),
		'cantidad' => array('type' => 'integer', 'null' => true),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => 'id'),
			'recursos_pk' => array('unique' => true, 'column' => 'id'),
			'proveedores_id' => array('unique' => false, 'column' => 'proveedores_id'),
			'recurso_tipos_id' => array('unique' => false, 'column' => 'recurso_tipos_id')
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
			'recurso_tipos_id' => 1,
			'proveedores_id' => 1,
			'cantidad' => 1
		),
	);

}
