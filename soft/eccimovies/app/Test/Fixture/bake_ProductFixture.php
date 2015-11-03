<?php
/**
 * Product Fixture
 */
class ProductFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'primary'),
		'code' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 8, 'key' => 'unique', 'collate' => 'utf16_spanish_ci', 'charset' => 'utf16'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 32, 'collate' => 'utf16_spanish_ci', 'charset' => 'utf16'),
		'price' => array('type' => 'decimal', 'null' => false, 'default' => null, 'length' => '5,2', 'unsigned' => false),
		'stock_quantity' => array('type' => 'integer', 'null' => true, 'default' => '0', 'unsigned' => false),
		'format' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 32, 'collate' => 'utf16_spanish_ci', 'charset' => 'utf16'),
		'languages' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64, 'collate' => 'utf16_spanish_ci', 'charset' => 'utf16'),
		'subtitles' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64, 'collate' => 'utf16_spanish_ci', 'charset' => 'utf16'),
		'release_year' => array('type' => 'text', 'null' => true, 'default' => null, 'length' => 4),
		'runtime' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 5, 'unsigned' => true),
		'more_details' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1500, 'collate' => 'utf16_spanish_ci', 'charset' => 'utf16'),
		'subcategory_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'index'),
		'enable' => array('type' => 'text', 'null' => true, 'default' => 'b\'1\'', 'length' => 1),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'code' => array('column' => 'code', 'unique' => 1),
			'subcategory_id' => array('column' => 'subcategory_id', 'unique' => 0)
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
			'code' => 'Lorem ',
			'name' => 'Lorem ipsum dolor sit amet',
			'price' => '',
			'stock_quantity' => 1,
			'format' => 'Lorem ipsum dolor sit amet',
			'languages' => 'Lorem ipsum dolor sit amet',
			'subtitles' => 'Lorem ipsum dolor sit amet',
			'release_year' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'runtime' => 1,
			'more_details' => 'Lorem ipsum dolor sit amet',
			'subcategory_id' => 1,
			'enable' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
		),
	);

}
