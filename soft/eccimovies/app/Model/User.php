<?php
App::uses('AppModel', 'Model');
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');
/**
 * User Model
 *
 * @property Address $Address
 * @property Cart $Cart
 * @property PaymentMethod $PaymentMethod
 * @property ProductsWishlist $ProductsWishlist
 * @property Wishlist $Wishlist
 */
class User extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'username';

/**
 * Validation rules
 *
 * @var array
 */
	// Valida los campos de la tabla a la hora de registrar
	public $validate = array(
		'username' => array(
							'regla1' => array
											(
												'rule' => array('notBlank'),
												'message' => 'Debe escribir un correo electrónico.'
											),
							'regla2' => array
											(
												'rule' => array('isUnique'),
												'message' => 'Este correo ya ha sido registrado.'
											),
							'regla3' => array
											(
												'rule' => array('isUnique'),
												'message' => 'Este correo ya ha sido registrado.'
											)
							),
		'password' => array(
							'regla1' => array(
											'rule' => 'notBlank',
											'message' => 'Debe escribir una contaseña.'
											),
							'regla2' => array(
											'rule' => array('minLength', '8'),
											'message' => 'Debe tener al menos 8 caracteres.'
											)
						),
		'repass' => array(
											'equaltofield' => array(
											'rule' => array('equaltofield','password'),
											'message' => 'La contraseña no coincide.',
											//'allowEmpty' => false,
											//'required' => false,
											//'last' => false, // Stop validation after this rule
											'on' => 'create', // Limit validation to 'create' or 'update' operations
											)
						),
		'first_name' => array(
							'regla1' => array(
											'rule' => 'notBlank',
											'message' => 'Debe escribir su nombre de pila.'
											),
							'regla2' => array(
											'rule'    => array('custom', '/^[a-zA-Z \-]*$/'),
											'message' => 'No se permiten caracteres especiales.'
											)
							),
		'last_name' => array(
							'regla1' => array(
											'rule' => 'notBlank',
											'message' => 'Debe escribir sus apellidos.'
											),
							'regla2' => array(
											'rule'    => array('custom', '/^[a-zA-Z \-]*$/'),
											'message' => 'No se permiten caracteres especiales.'
											)
							),
		'birthday' => array(
							'regla1' => array(
											'rule' => 'date',
											'allowEmpty' => false,
											'message' => 'Debe seleccionar su fecha de nacimiento.'
											)
							),
		'gender' => array(
						'regla1' => array(
										'rule' => array('inList', array('M', 'F')),
										'allowEmpty' => false,
										'message' => 'Debes seleccionar uno.'
										)
						),
		'role' => array(
					'valid' => array(
								'rule' => array('inList', array(0, 1, 2)),
								'allowEmpty' => false,
								'message' => 'Debes seleccionar uno.'
								)
					)
	);

	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Address' => array(
			'className' => 'Address',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Cart' => array(
			'className' => 'Cart',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'PaymentMethod' => array(
			'className' => 'PaymentMethod',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'ProductsWishlist' => array(
			'className' => 'ProductsWishlist',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Wishlist' => array(
			'className' => 'Wishlist',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

	public function beforeSave($options = array())
	{
		if (isset($this->data[$this->alias]['password']))
		{
			$passwordHasher = new BlowfishPasswordHasher();
			$this->data[$this->alias]['password'] = $passwordHasher->hash(
				$this->data[$this->alias]['password']
			);
		}
		return true;
	}

	function equaltofield($check,$otherfield)
	{
		//get name of field
		$fname = '';
		foreach ($check as $key => $value){
			$fname = $key;
			break;
		}
		return $this->data[$this->name][$otherfield] === $this->data[$this->name][$fname];
	}

}
