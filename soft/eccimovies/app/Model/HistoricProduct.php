<?php
App::uses('AppModel', 'Model');
/**
 * HistoricProduct Model
 *
 * @property HistoricInvoices $HistoricInvoices
 */
class HistoricProduct extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'product_name';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'id' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'HistoricInvoices' => array(
			'className' => 'HistoricInvoices',
			'foreignKey' => 'historic_invoices_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
