<?php
App::uses('Wishlist', 'Model');

/**
 * Wishlist Test Case
 */
class WishlistTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.wishlist',
		'app.user',
		'app.address',
		'app.invoice',
		'app.payment_method',
		'app.product',
		'app.subcategory',
		'app.category',
		'app.actor',
		'app.actors_product',
		'app.cart',
		'app.carts_product',
		'app.invoices_product',
		'app.products_wishlist'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Wishlist = ClassRegistry::init('Wishlist');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Wishlist);

		parent::tearDown();
	}

}
