<?php
App::uses('AppController', 'Controller');
/**
 * CartsProducts Controller
 *
 * @property CartsProduct $CartsProduct
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class CartsProductsController extends AppController {

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
		$this->CartsProduct->recursive = 0;
		$this->set('cartsProducts', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CartsProduct->exists($id)) {
			throw new NotFoundException(__('Invalid carts product'));
		}
		$options = array('conditions' => array('CartsProduct.' . $this->CartsProduct->primaryKey => $id));
		$this->set('cartsProduct', $this->CartsProduct->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CartsProduct->create();
			if ($this->CartsProduct->save($this->request->data)) {
				$this->Flash->success(__('The carts product has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The carts product could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->CartsProduct->exists($id)) {
			throw new NotFoundException(__('Invalid carts product'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CartsProduct->save($this->request->data)) {
				$this->Flash->success(__('The carts product has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The carts product could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CartsProduct.' . $this->CartsProduct->primaryKey => $id));
			$this->request->data = $this->CartsProduct->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->CartsProduct->id = $id;
		if (!$this->CartsProduct->exists()) {
			throw new NotFoundException(__('Invalid carts product'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CartsProduct->delete()) {
			$this->Flash->success(__('The carts product has been deleted.'));
		} else {
			$this->Flash->error(__('The carts product could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->CartsProduct->recursive = 0;
		$this->set('cartsProducts', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->CartsProduct->exists($id)) {
			throw new NotFoundException(__('Invalid carts product'));
		}
		$options = array('conditions' => array('CartsProduct.' . $this->CartsProduct->primaryKey => $id));
		$this->set('cartsProduct', $this->CartsProduct->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->CartsProduct->create();
			if ($this->CartsProduct->save($this->request->data)) {
				$this->Flash->success(__('The carts product has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The carts product could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->CartsProduct->exists($id)) {
			throw new NotFoundException(__('Invalid carts product'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CartsProduct->save($this->request->data)) {
				$this->Flash->success(__('The carts product has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The carts product could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CartsProduct.' . $this->CartsProduct->primaryKey => $id));
			$this->request->data = $this->CartsProduct->find('first', $options);
		}
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->CartsProduct->id = $id;
		if (!$this->CartsProduct->exists()) {
			throw new NotFoundException(__('Invalid carts product'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CartsProduct->delete()) {
			$this->Flash->success(__('The carts product has been deleted.'));
		} else {
			$this->Flash->error(__('The carts product could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
