<?php
/**
 * MedidasPropiedadeFixture
 *
 */
class MedidasPropiedadeFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'medida_id' => array('type' => 'text', 'null' => false, 'length' => 1073741824),
		'propiedade_id' => array('type' => 'integer', 'null' => false),
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => array('medida_id', 'propiedade_id', 'id')),
			'medidas_propiedades_pk' => array('unique' => true, 'column' => array('medida_id', 'propiedade_id', 'id')),
			'medida_id' => array('unique' => false, 'column' => 'medida_id'),
			'propiedades_id3' => array('unique' => false, 'column' => 'propiedade_id')
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
			'medida_id' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'propiedade_id' => 1,
			'id' => 1
		),
	);

}
