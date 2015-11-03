<?php
/**
 * PaymentMethod Fixture
 */
class PaymentMethodFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'index'),
		'issuer' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 32, 'collate' => 'utf16_spanish_ci', 'charset' => 'utf16'),
		'account' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 32, 'collate' => 'utf16_spanish_ci', 'charset' => 'utf16'),
		'name_Card' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 32, 'collate' => 'utf16_spanish_ci', 'charset' => 'utf16'),
		'expiration' => array('type' => 'date', 'null' => true, 'default' => null),
		'security_code' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3, 'collate' => 'utf16_spanish_ci', 'charset' => 'utf16'),
		'enable' => array('type' => 'text', 'null' => true, 'default' => 'b\'1\'', 'length' => 1),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'user_id' => array('column' => 'user_id', 'unique' => 0)
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
			'user_id' => 1,
			'issuer' => 'Lorem ipsum dolor sit amet',
			'account' => 'Lorem ipsum dolor sit amet',
			'name_Card' => 'Lorem ipsum dolor sit amet',
			'expiration' => '2015-11-01',
			'security_code' => 'L',
			'enable' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
		),
	);

}
