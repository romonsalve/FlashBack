<?php
/**
 * EventoTiposParticipanteTipoFixture
 *
 */
class EventoTiposParticipanteTipoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'evento_tipos_id' => array('type' => 'integer', 'null' => false),
		'participante_tipos_id' => array('type' => 'integer', 'null' => false),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => array('evento_tipos_id', 'participante_tipos_id')),
			'evento_tipos_id4' => array('unique' => false, 'column' => 'evento_tipos_id'),
			'participante_tipos_id2' => array('unique' => false, 'column' => 'participante_tipos_id')
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
			'evento_tipos_id' => 1,
			'participante_tipos_id' => 1
		),
	);

}
