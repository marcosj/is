<?php
App::uses('ProductsWishlist', 'Model');

/**
 * ProductsWishlist Test Case
 */
class ProductsWishlistTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.products_wishlist',
		'app.wishlist',
		'app.user',
		'app.address',
		'app.invoice',
		'app.payment_method',
		'app.product',
		'app.subcategory',
		'app.actor',
		'app.actors_product',
		'app.cart',
		'app.carts_product',
		'app.invoices_product'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ProductsWishlist = ClassRegistry::init('ProductsWishlist');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ProductsWishlist);

		parent::tearDown();
	}

}
