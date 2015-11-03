<?php
App::uses('PaymentMethod', 'Model');

/**
 * PaymentMethod Test Case
 */
class PaymentMethodTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.payment_method',
		'app.user',
		'app.address',
		'app.invoice',
		'app.product',
		'app.invoices_product',
		'app.cart',
		'app.carts_product',
		'app.products_wishlist',
		'app.wishlist'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PaymentMethod = ClassRegistry::init('PaymentMethod');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PaymentMethod);

		parent::tearDown();
	}

}
