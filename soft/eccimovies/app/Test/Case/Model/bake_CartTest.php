<?php
App::uses('Cart', 'Model');

/**
 * Cart Test Case
 */
class CartTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cart',
		'app.user',
		'app.address',
		'app.invoice',
		'app.payment_method',
		'app.products_wishlist',
		'app.wishlist',
		'app.product',
		'app.carts_product'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Cart = ClassRegistry::init('Cart');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Cart);

		parent::tearDown();
	}

}
