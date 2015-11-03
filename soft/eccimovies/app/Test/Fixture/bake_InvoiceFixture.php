<?php
/**
 * Invoice Fixture
 */
class InvoiceFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'primary'),
		'shippping_price' => array('type' => 'decimal', 'null' => true, 'default' => null, 'length' => '8,2', 'unsigned' => false),
		'tax' => array('type' => 'decimal', 'null' => true, 'default' => null, 'length' => '8,2', 'unsigned' => false),
		'total' => array('type' => 'decimal', 'null' => true, 'default' => null, 'length' => '8,2', 'unsigned' => false),
		'payment_method_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'index'),
		'address_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'payment_method_id' => array('column' => 'payment_method_id', 'unique' => 0),
			'address_id' => array('column' => 'address_id', 'unique' => 0)
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
			'shippping_price' => '',
			'tax' => '',
			'total' => '',
			'payment_method_id' => 1,
			'address_id' => 1
		),
	);

}
