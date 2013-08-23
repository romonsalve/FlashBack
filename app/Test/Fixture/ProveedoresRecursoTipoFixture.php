<?php
/**
 * ProveedoresRecursoTipoFixture
 *
 */
class ProveedoresRecursoTipoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'proveedores_id' => array('type' => 'integer', 'null' => false),
		'recurso_tipos_id' => array('type' => 'integer', 'null' => false),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => array('proveedores_id', 'recurso_tipos_id')),
			'proveedores_recurso_tipos_pk' => array('unique' => true, 'column' => array('proveedores_id', 'recurso_tipos_id')),
			'proveedores_id2' => array('unique' => false, 'column' => 'proveedores_id'),
			'recurso_tipos_id2' => array('unique' => false, 'column' => 'recurso_tipos_id')
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
			'proveedores_id' => 1,
			'recurso_tipos_id' => 1
		),
	);

}
