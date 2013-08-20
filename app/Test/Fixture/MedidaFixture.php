<?php
/**
 * MedidaFixture
 *
 */
class MedidaFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'medida';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'text', 'null' => false, 'length' => 11, 'key' => 'primary'),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => 'id'),
			'medida_pk' => array('unique' => true, 'column' => 'id')
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
			'id' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
		),
	);

}
