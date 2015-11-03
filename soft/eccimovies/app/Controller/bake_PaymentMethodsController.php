<?php
App::uses('AppController', 'Controller');
/**
 * PaymentMethods Controller
 *
 * @property PaymentMethod $PaymentMethod
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class PaymentMethodsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Flash', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->PaymentMethod->recursive = 0;
		$this->set('paymentMethods', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PaymentMethod->exists($id)) {
			throw new NotFoundException(__('Invalid payment method'));
		}
		$options = array('conditions' => array('PaymentMethod.' . $this->PaymentMethod->primaryKey => $id));
		$this->set('paymentMethod', $this->PaymentMethod->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PaymentMethod->create();
			if ($this->PaymentMethod->save($this->request->data)) {
				$this->Flash->success(__('The payment method has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The payment method could not be saved. Please, try again.'));
			}
		}
		$users = $this->PaymentMethod->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->PaymentMethod->exists($id)) {
			throw new NotFoundException(__('Invalid payment method'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PaymentMethod->save($this->request->data)) {
				$this->Flash->success(__('The payment method has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The payment method could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PaymentMethod.' . $this->PaymentMethod->primaryKey => $id));
			$this->request->data = $this->PaymentMethod->find('first', $options);
		}
		$users = $this->PaymentMethod->User->find('list');
		$this->set(compact('users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->PaymentMethod->id = $id;
		if (!$this->PaymentMethod->exists()) {
			throw new NotFoundException(__('Invalid payment method'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->PaymentMethod->delete()) {
			$this->Flash->success(__('The payment method has been deleted.'));
		} else {
			$this->Flash->error(__('The payment method could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->PaymentMethod->recursive = 0;
		$this->set('paymentMethods', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->PaymentMethod->exists($id)) {
			throw new NotFoundException(__('Invalid payment method'));
		}
		$options = array('conditions' => array('PaymentMethod.' . $this->PaymentMethod->primaryKey => $id));
		$this->set('paymentMethod', $this->PaymentMethod->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->PaymentMethod->create();
			if ($this->PaymentMethod->save($this->request->data)) {
				$this->Flash->success(__('The payment method has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The payment method could not be saved. Please, try again.'));
			}
		}
		$users = $this->PaymentMethod->User->find('list');
		$this->set(compact('users'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->PaymentMethod->exists($id)) {
			throw new NotFoundException(__('Invalid payment method'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PaymentMethod->save($this->request->data)) {
				$this->Flash->success(__('The payment method has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The payment method could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PaymentMethod.' . $this->PaymentMethod->primaryKey => $id));
			$this->request->data = $this->PaymentMethod->find('first', $options);
		}
		$users = $this->PaymentMethod->User->find('list');
		$this->set(compact('users'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->PaymentMethod->id = $id;
		if (!$this->PaymentMethod->exists()) {
			throw new NotFoundException(__('Invalid payment method'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->PaymentMethod->delete()) {
			$this->Flash->success(__('The payment method has been deleted.'));
		} else {
			$this->Flash->error(__('The payment method could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
