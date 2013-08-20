<?php
/**
 * ParTipSolCotFixture
 *
 */
class ParTipSolCotFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'par_tip_sol_cot';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'solicitud_cotizacione_id' => array('type' => 'integer', 'null' => false),
		'participante_tipo_id' => array('type' => 'integer', 'null' => false),
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'desc_par_sol' => array('type' => 'text', 'null' => true, 'length' => 1073741824),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => array('solicitud_cotizacione_id', 'participante_tipo_id', 'id')),
			'par_tip_sol_cot_pk' => array('unique' => true, 'column' => array('solicitud_cotizacione_id', 'participante_tipo_id', 'id')),
			'participante_tipos_id3' => array('unique' => false, 'column' => 'participante_tipo_id'),
			'solicitud_cotizaciones_id' => array('unique' => false, 'column' => 'solicitud_cotizacione_id')
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
			'solicitud_cotizacione_id' => 1,
			'participante_tipo_id' => 1,
			'id' => 1,
			'desc_par_sol' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
		),
	);

}
