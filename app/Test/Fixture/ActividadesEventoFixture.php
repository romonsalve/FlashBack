<?php
/**
 * ActividadesEventoFixture
 *
 */
class ActividadesEventoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'evento_id' => array('type' => 'integer', 'null' => false),
		'actividade_id' => array('type' => 'integer', 'null' => false),
		'fecha_ini_act' => array('type' => 'time', 'null' => true),
		'fecha_ter_act' => array('type' => 'time', 'null' => true),
		'estado_act' => array('type' => 'text', 'null' => true, 'length' => 1073741824),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => array('evento_id', 'actividade_id', 'id')),
			'actividades_eventos_pk' => array('unique' => true, 'column' => array('evento_id', 'actividade_id', 'id')),
			'actividades_id' => array('unique' => false, 'column' => 'actividade_id'),
			'eventos_id3' => array('unique' => false, 'column' => 'evento_id')
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
			'evento_id' => 1,
			'actividade_id' => 1,
			'fecha_ini_act' => '06:07:33',
			'fecha_ter_act' => '06:07:33',
			'estado_act' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
		),
	);

}
