<?php
App::uses('Product', 'Model');

/**
 * Product Test Case
 */
class ProductTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.product',
		'app.subcategory',
		'app.actor',
		'app.actors_product',
		'app.cart',
		'app.user',
		'app.address',
		'app.invoice',
		'app.payment_method',
		'app.invoices_product',
		'app.products_wishlist',
		'app.wishlist',
		'app.carts_product'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Product = ClassRegistry::init('Product');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Product);

		parent::tearDown();
	}

}
