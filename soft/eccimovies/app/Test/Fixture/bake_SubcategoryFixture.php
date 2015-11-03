<?php
/**
 * Subcategory Fixture
 */
class SubcategoryFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'primary'),
		'category_id' => array('type' => 'integer', 'null' => true, 'default' => '1', 'length' => 10, 'unsigned' => true),
		'subcategory_name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 32, 'collate' => 'utf16_spanish_ci', 'charset' => 'utf16'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf16', 'collate' => 'utf16_spanish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'category_id' => 1,
			'subcategory_name' => 'Lorem ipsum dolor sit amet'
		),
	);

}
