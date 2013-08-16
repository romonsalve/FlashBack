<?php
/**
 * ItinerarioParticipanteFixture
 *
 */
class ItinerarioParticipanteFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'participante_id' => array('type' => 'integer', 'null' => false),
		'evento_id' => array('type' => 'integer', 'null' => false),
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'hora_ini_par' => array('type' => 'time', 'null' => true),
		'hora_ter_par' => array('type' => 'time', 'null' => true),
		'desc_iti_par' => array('type' => 'text', 'null' => true, 'length' => 1073741824),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => array('participante_id', 'evento_id', 'id')),
			'itinerario_participantes_pk' => array('unique' => true, 'column' => array('participante_id', 'evento_id', 'id')),
			'eventos_id2' => array('unique' => false, 'column' => 'evento_id'),
			'participantes_id' => array('unique' => false, 'column' => 'participante_id')
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
			'participante_id' => 1,
			'evento_id' => 1,
			'id' => 1,
			'hora_ini_par' => '15:45:23',
			'hora_ter_par' => '15:45:23',
			'desc_iti_par' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
		),
	);

}
