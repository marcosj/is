<?php
/**
 * HistoricInvoice Fixture
 */
class HistoricInvoiceFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'primary'),
		'shippping_price' => array('type' => 'decimal', 'null' => true, 'default' => '0.00', 'length' => '8,2', 'unsigned' => false),
		'tax' => array('type' => 'decimal', 'null' => true, 'default' => '0.00', 'length' => '8,2', 'unsigned' => false),
		'total' => array('type' => 'decimal', 'null' => true, 'default' => '0.00', 'length' => '8,2', 'unsigned' => false),
		'payment_method_account' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 32, 'collate' => 'utf16_spanish_ci', 'charset' => 'utf16'),
		'address_country' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 32, 'collate' => 'utf16_spanish_ci', 'charset' => 'utf16'),
		'address_state' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 32, 'collate' => 'utf16_spanish_ci', 'charset' => 'utf16'),
		'address_zipcode' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 16, 'collate' => 'utf16_spanish_ci', 'charset' => 'utf16'),
		'address_full_address' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf16_spanish_ci', 'charset' => 'utf16'),
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
			'shippping_price' => '',
			'tax' => '',
			'total' => '',
			'payment_method_account' => 'Lorem ipsum dolor sit amet',
			'address_country' => 'Lorem ipsum dolor sit amet',
			'address_state' => 'Lorem ipsum dolor sit amet',
			'address_zipcode' => 'Lorem ipsum do',
			'address_full_address' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
		),
	);

}
