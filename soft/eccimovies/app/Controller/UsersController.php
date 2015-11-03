<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class UsersController extends AppController {

	public $helpers = array('Html', 'Form', 'Flash');

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Flash', 'Session');

	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('signup', 'logout', 'logged');
	}

	public function logged()
	{
		//return $this->redirect(array('action' => 'logged'));
	}

/**
 * index method
 *
 * @return void
 */
	// Se pasa a la vista de HOME
	public function index() {
		$this->User->recursive = 0;
		$this->set('Pagina Principal', $this->paginate());
	}

	// Se pasa a la vista de LOGIN
	public function login()
	{
		// Por si falla el INSERT
		try
		{
			if ($this->request->is('post'))
			{
				// Si pudo autenticar
				if ($this->Auth->login())
				{
					return $this->redirect($this->Auth->redirectURL());
					//return $this->redirect(array('action' => 'view')); // Se pasa a la vista de LOGEADO
				}
				else
				{
					throw new Exception('Exception');
				}
			}
		}
		catch( Exception $e )
		{
			$this->Flash->set(__('Correo o contraseña inválido'));
		}
	}

	// Se deslogea
	public function logout()
	{
		return $this->redirect($this->Auth->logout($this->data));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Correo inválido'));
		}
		$this->set('user', $this->User->findById($id));
	}

	// Se pasa a la vista de REGISTRO
	public function signup()
	{
		// Por si falla el INSERT
		try
		{
			if ($this->request->is('post'))
			{
				$this->User->create();

				// Si pudo registrar el usuario
				if ($this->User->save($this->request->data))
				{
					$this->Flash->set(__('¡ Usuario registrado exitosamente !'));
					return $this->redirect(array('action' => 'login')); // Se pasa a la vista de LOGIN
				}
				// Si no pudo registrar el usuario
				else
				{
					throw new Exception('Exception');
				}
			}
		}
		catch(Exception $e)
		{
			// Si la excepcion es por PRIMARY KEY
			if( $e->getCode() == 23000 )
			{
				$this->Flash->set(__('Lo sentimos, ese correo ya está registrado') );
			}
			// Si la excepcion es por otra cosa
			else
			{
				$this->Flash->set(__('Oops ! Algo ha salido mal. Inténtalo de nuevo.') );
			}
		}

	}
}
