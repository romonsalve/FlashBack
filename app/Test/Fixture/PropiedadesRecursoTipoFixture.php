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
		'medidas_id' => array('type' => 'integer', 'null' => true),
		'propiedades_id' => array('type' => 'integer', 'null' => false),
		'recurso_tipos_id' => array('type' => 'integer', 'null' => false),
		'maximo__medida' => array('type' => 'integer', 'null' => true),
		'minimo_medida' => array('type' => 'integer', 'null' => true),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => array('propiedades_id', 'recurso_tipos_id', 'id')),
			'propiedades_recurso_tipos_pk' => array('unique' => true, 'column' => array('propiedades_id', 'recurso_tipos_id', 'id')),
			'medidas_id' => array('unique' => false, 'column' => 'medidas_id'),
			'propiedades_id2' => array('unique' => false, 'column' => 'propiedades_id'),
			'recurso_tipos_id3' => array('unique' => false, 'column' => 'recurso_tipos_id')
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
			'medidas_id' => 1,
			'propiedades_id' => 1,
			'recurso_tipos_id' => 1,
			'maximo__medida' => 1,
			'minimo_medida' => 1
		),
	);

}
