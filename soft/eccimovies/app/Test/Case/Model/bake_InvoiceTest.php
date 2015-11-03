<?php
App::uses('Invoice', 'Model');

/**
 * Invoice Test Case
 */
class InvoiceTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.invoice',
		'app.payment_method',
		'app.address',
		'app.user',
		'app.cart',
		'app.product',
		'app.carts_product',
		'app.products_wishlist',
		'app.wishlist',
		'app.invoices_product'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Invoice = ClassRegistry::init('Invoice');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Invoice);

		parent::tearDown();
	}

}
