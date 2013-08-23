<?php
/**
 * PropiedadesRecursoFixture
 *
 */
class PropiedadesRecursoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'recurso_id' => array('type' => 'integer', 'null' => false),
		'propiedade_id' => array('type' => 'integer', 'null' => false),
		'valor' => array('type' => 'text', 'null' => true, 'length' => 1073741824),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => array('recurso_id', 'propiedade_id', 'id')),
			'propiedades_recursos_pk' => array('unique' => true, 'column' => array('recurso_id', 'propiedade_id', 'id')),
			'propiedades_id' => array('unique' => false, 'column' => 'propiedade_id'),
			'recursos_id' => array('unique' => false, 'column' => 'recurso_id')
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
			'recurso_id' => 1,
			'propiedade_id' => 1,
			'valor' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
		),
	);

}
