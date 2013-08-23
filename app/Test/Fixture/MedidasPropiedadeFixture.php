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
		'medidas_id' => array('type' => 'integer', 'null' => false),
		'propiedades_id' => array('type' => 'integer', 'null' => false),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => array('medidas_id', 'propiedades_id')),
			'medidas_propiedades_pk' => array('unique' => true, 'column' => array('medidas_id', 'propiedades_id')),
			'medidas_id2' => array('unique' => false, 'column' => 'medidas_id'),
			'propiedades_id3' => array('unique' => false, 'column' => 'propiedades_id')
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
			'medidas_id' => 1,
			'propiedades_id' => 1
		),
	);

}
