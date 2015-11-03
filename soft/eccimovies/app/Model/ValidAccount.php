<?php
App::uses('AppModel', 'Model');
/**
 * ValidAccount Model
 *
 */
class ValidAccount extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'account';

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
