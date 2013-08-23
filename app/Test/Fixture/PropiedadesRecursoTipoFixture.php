<?php
/**
 * PropiedadesRecursoTipoFixture
 *
 */
class PropiedadesRecursoTipoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'medida_id' => array('type' => 'integer', 'null' => true),
		'propiedade_id' => array('type' => 'integer', 'null' => false),
		'recurso_tipo_id' => array('type' => 'integer', 'null' => false),
		'maximo__medida' => array('type' => 'integer', 'null' => true),
		'minimo_medida' => array('type' => 'integer', 'null' => true),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => array('propiedade_id', 'recurso_tipo_id', 'id')),
			'propiedades_recurso_tipos_pk' => array('unique' => true, 'column' => array('propiedade_id', 'recurso_tipo_id', 'id')),
			'medidas_id' => array('unique' => false, 'column' => 'medida_id'),
			'propiedades_id2' => array('unique' => false, 'column' => 'propiedade_id'),
			'recurso_tipos_id3' => array('unique' => false, 'column' => 'recurso_tipo_id')
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
			'medida_id' => 1,
			'propiedade_id' => 1,
			'recurso_tipo_id' => 1,
			'maximo__medida' => 1,
			'minimo_medida' => 1
		),
	);

}
