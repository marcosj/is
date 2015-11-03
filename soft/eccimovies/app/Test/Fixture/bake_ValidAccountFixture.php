<?php
/**
 * ValidAccount Fixture
 */
class ValidAccountFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'primary'),
		'issuer' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 32, 'collate' => 'utf16_spanish_ci', 'charset' => 'utf16'),
		'account' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 32, 'collate' => 'utf16_spanish_ci', 'charset' => 'utf16'),
		'name_Card' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 32, 'collate' => 'utf16_spanish_ci', 'charset' => 'utf16'),
		'expiration' => array('type' => 'date', 'null' => true, 'default' => null),
		'security_code' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3, 'collate' => 'utf16_spanish_ci', 'charset' => 'utf16'),
		'funds' => array('type' => 'decimal', 'null' => true, 'default' => '0.00', 'length' => '8,2', 'unsigned' => false),
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
			'issuer' => 'Lorem ipsum dolor sit amet',
			'account' => 'Lorem ipsum dolor sit amet',
			'name_Card' => 'Lorem ipsum dolor sit amet',
			'expiration' => '2015-11-01',
			'security_code' => 'L',
			'funds' => ''
		),
	);

}
