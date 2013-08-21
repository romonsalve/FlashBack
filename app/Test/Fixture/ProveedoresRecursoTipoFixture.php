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
		'proveedore_id' => array('type' => 'integer', 'null' => false),
		'recurso_tipo_id' => array('type' => 'integer', 'null' => false),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => array('proveedore_id', 'recurso_tipo_id')),
			'proveedores_recurso_tipos_pk' => array('unique' => true, 'column' => array('proveedore_id', 'recurso_tipo_id')),
			'proveedores_id2' => array('unique' => false, 'column' => 'proveedore_id'),
			'recurso_tipos_id2' => array('unique' => false, 'column' => 'recurso_tipo_id')
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
			'proveedore_id' => 1,
			'recurso_tipo_id' => 1
		),
	);

}
