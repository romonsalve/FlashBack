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
		'evento_tipo_id' => array('type' => 'integer', 'null' => false),
		'participante_tipo_id' => array('type' => 'integer', 'null' => false),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => array('evento_tipo_id', 'participante_tipo_id')),
			'evento_tipos_id4' => array('unique' => false, 'column' => 'evento_tipo_id'),
			'participante_tipos_id2' => array('unique' => false, 'column' => 'participante_tipo_id')
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
			'evento_tipo_id' => 1,
			'participante_tipo_id' => 1
		),
	);

}
