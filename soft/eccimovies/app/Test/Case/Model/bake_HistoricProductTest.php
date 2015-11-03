<?php
App::uses('HistoricProduct', 'Model');

/**
 * HistoricProduct Test Case
 */
class HistoricProductTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.historic_product',
		'app.historic_invoices'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->HistoricProduct = ClassRegistry::init('HistoricProduct');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->HistoricProduct);

		parent::tearDown();
	}

}
