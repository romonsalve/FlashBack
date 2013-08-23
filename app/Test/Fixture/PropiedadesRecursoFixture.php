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
		'recursos_id' => array('type' => 'integer', 'null' => false),
		'propiedades_id' => array('type' => 'integer', 'null' => false),
		'valor' => array('type' => 'text', 'null' => true, 'length' => 1073741824),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => array('recursos_id', 'propiedades_id', 'id')),
			'propiedades_recursos_pk' => array('unique' => true, 'column' => array('recursos_id', 'propiedades_id', 'id')),
			'propiedades_id' => array('unique' => false, 'column' => 'propiedades_id'),
			'recursos_id' => array('unique' => false, 'column' => 'recursos_id')
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
			'recursos_id' => 1,
			'propiedades_id' => 1,
			'valor' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
		),
	);

}
