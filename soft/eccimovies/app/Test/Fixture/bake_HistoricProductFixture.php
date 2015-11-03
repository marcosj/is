<?php
/**
 * HistoricProduct Fixture
 */
class HistoricProductFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'primary'),
		'historic_invoices_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'index'),
		'product_quantity' => array('type' => 'integer', 'null' => true, 'default' => '0', 'unsigned' => false),
		'product_price' => array('type' => 'decimal', 'null' => true, 'default' => '0.00', 'length' => '8,2', 'unsigned' => false),
		'product_name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 32, 'collate' => 'utf16_spanish_ci', 'charset' => 'utf16'),
		'product_format' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 32, 'collate' => 'utf16_spanish_ci', 'charset' => 'utf16'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'historic_invoices_id' => array('column' => 'historic_invoices_id', 'unique' => 0)
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
			'historic_invoices_id' => 1,
			'product_quantity' => 1,
			'product_price' => '',
			'product_name' => 'Lorem ipsum dolor sit amet',
			'product_format' => 'Lorem ipsum dolor sit amet'
		),
	);

}
