<?php
App::uses('AppModel', 'Model');
/**
 * HistoricInvoice Model
 *
 */
class HistoricInvoice extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'total';

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
}
