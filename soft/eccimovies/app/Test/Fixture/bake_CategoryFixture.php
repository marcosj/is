<?php
/**
 * Category Fixture
 */
class CategoryFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'primary'),
		'category_name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 32, 'collate' => 'utf16_spanish_ci', 'charset' => 'utf16'),
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
			'id' => '3',
			'category_name' => 'Adventure'
		),
		array(
			'id' => '4',
			'category_name' => 'Animation'
		),
		array(
			'id' => '5',
			'category_name' => 'Biography'
		),
		array(
			'id' => '6',
			'category_name' => 'Comedy'
		),
		array(
			'id' => '7',
			'category_name' => 'Crime'
		),
		array(
			'id' => '8',
			'category_name' => 'Drama'
		),
		array(
			'id' => '9',
			'category_name' => 'Family'
		),
		array(
			'id' => '10',
			'category_name' => 'Fantasy'
		),
		array(
			'id' => '11',
			'category_name' => 'Film-Noir'
		),
		array(
			'id' => '12',
			'category_name' => 'History'
		),
	);

}
