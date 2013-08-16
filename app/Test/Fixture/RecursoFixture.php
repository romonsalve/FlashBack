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
		'recurso_tipo_id' => array('type' => 'text', 'null' => false, 'length' => 1073741824),
		'proveedore_id' => array('type' => 'integer', 'null' => true),
		'cantidad_rec' => array('type' => 'integer', 'null' => true),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => 'id'),
			'recursos_pk' => array('unique' => true, 'column' => 'id'),
			'proveedores_id' => array('unique' => false, 'column' => 'proveedore_id'),
			'recurso_tipos_id' => array('unique' => false, 'column' => 'recurso_tipo_id')
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
			'recurso_tipo_id' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'proveedore_id' => 1,
			'cantidad_rec' => 1
		),
	);

}
