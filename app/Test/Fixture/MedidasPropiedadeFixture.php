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
		'medida_id' => array('type' => 'integer', 'null' => false),
		'propiedade_id' => array('type' => 'integer', 'null' => false),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => array('medida_id', 'propiedade_id')),
			'medidas_propiedades_pk' => array('unique' => true, 'column' => array('medida_id', 'propiedade_id')),
			'medidas_id2' => array('unique' => false, 'column' => 'medida_id'),
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
			'medida_id' => 1,
			'propiedade_id' => 1
		),
	);

}
