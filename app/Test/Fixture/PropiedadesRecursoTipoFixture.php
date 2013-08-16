<?php
/**
 * PropiedadesRecursoTipoFixture
 *
 */
class PropiedadesRecursoTipoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'propiedade_id' => array('type' => 'integer', 'null' => false),
		'recurso_tipo_id' => array('type' => 'text', 'null' => false, 'length' => 1073741824),
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'max_rango_prop_tip' => array('type' => 'integer', 'null' => true),
		'min_rango_prop_tip' => array('type' => 'integer', 'null' => true),
		'medida_prop_tip' => array('type' => 'text', 'null' => true, 'length' => 1073741824),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => array('propiedade_id', 'recurso_tipo_id', 'id')),
			'propiedades_recurso_tipos_pk' => array('unique' => true, 'column' => array('propiedade_id', 'recurso_tipo_id', 'id')),
			'propiedades_id2' => array('unique' => false, 'column' => 'propiedade_id'),
			'recurso_tipos_id3' => array('unique' => false, 'column' => 'recurso_tipo_id')
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
			'propiedade_id' => 1,
			'recurso_tipo_id' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'id' => 1,
			'max_rango_prop_tip' => 1,
			'min_rango_prop_tip' => 1,
			'medida_prop_tip' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
		),
	);

}
