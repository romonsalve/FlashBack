<?php
/**
 * EventoTiposRecintoTipoFixture
 *
 */
class EventoTiposRecintoTipoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'recinto_tipo_id' => array('type' => 'integer', 'null' => false),
		'evento_tipo_id' => array('type' => 'integer', 'null' => false),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => array('recinto_tipo_id', 'evento_tipo_id')),
			'evento_tipos_recinto_tipos_pk' => array('unique' => true, 'column' => array('recinto_tipo_id', 'evento_tipo_id')),
			'evento_tipos_id6' => array('unique' => false, 'column' => 'evento_tipo_id'),
			'recinto_tipos_id3' => array('unique' => false, 'column' => 'recinto_tipo_id')
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
			'recinto_tipo_id' => 1,
			'evento_tipo_id' => 1
		),
	);

}
