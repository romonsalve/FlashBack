<?php
/**
 * AuditoriumFixture
 *
 */
class AuditoriumFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id_audit' => array('type' => 'integer', 'null' => false, 'default' => null),
		'nombre_tabla_audit' => array('type' => 'string', 'null' => true, 'length' => 45),
		'operacion_audit' => array('type' => 'string', 'null' => true, 'length' => 10),
		'valor_antiguo' => array('type' => 'text', 'null' => true, 'length' => 1073741824),
		'valor_nuevo' => array('type' => 'text', 'null' => true, 'length' => 1073741824),
		'hora' => array('type' => 'date', 'null' => true),
		'usuario' => array('type' => 'string', 'null' => true, 'length' => 45),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => 'id_audit'),
			'auditoria_pk' => array('unique' => true, 'column' => 'id_audit')
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
			'id_audit' => 1,
			'nombre_tabla_audit' => 'Lorem ipsum dolor sit amet',
			'operacion_audit' => 'Lorem ip',
			'valor_antiguo' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'valor_nuevo' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'hora' => '2013-08-16',
			'usuario' => 'Lorem ipsum dolor sit amet'
		),
	);

}
