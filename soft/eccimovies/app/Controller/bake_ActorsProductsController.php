<?php
App::uses('AppController', 'Controller');
/**
 * ActorsProducts Controller
 *
 * @property ActorsProduct $ActorsProduct
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class ActorsProductsController extends AppController {

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
		$this->ActorsProduct->recursive = 0;
		$this->set('actorsProducts', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ActorsProduct->exists($id)) {
			throw new NotFoundException(__('Invalid actors product'));
		}
		$options = array('conditions' => array('ActorsProduct.' . $this->ActorsProduct->primaryKey => $id));
		$this->set('actorsProduct', $this->ActorsProduct->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ActorsProduct->create();
			if ($this->ActorsProduct->save($this->request->data)) {
				$this->Flash->success(__('The actors product has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The actors product could not be saved. Please, try again.'));
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
		if (!$this->ActorsProduct->exists($id)) {
			throw new NotFoundException(__('Invalid actors product'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ActorsProduct->save($this->request->data)) {
				$this->Flash->success(__('The actors product has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The actors product could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ActorsProduct.' . $this->ActorsProduct->primaryKey => $id));
			$this->request->data = $this->ActorsProduct->find('first', $options);
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
		$this->ActorsProduct->id = $id;
		if (!$this->ActorsProduct->exists()) {
			throw new NotFoundException(__('Invalid actors product'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ActorsProduct->delete()) {
			$this->Flash->success(__('The actors product has been deleted.'));
		} else {
			$this->Flash->error(__('The actors product could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->ActorsProduct->recursive = 0;
		$this->set('actorsProducts', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->ActorsProduct->exists($id)) {
			throw new NotFoundException(__('Invalid actors product'));
		}
		$options = array('conditions' => array('ActorsProduct.' . $this->ActorsProduct->primaryKey => $id));
		$this->set('actorsProduct', $this->ActorsProduct->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->ActorsProduct->create();
			if ($this->ActorsProduct->save($this->request->data)) {
				$this->Flash->success(__('The actors product has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The actors product could not be saved. Please, try again.'));
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
		if (!$this->ActorsProduct->exists($id)) {
			throw new NotFoundException(__('Invalid actors product'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ActorsProduct->save($this->request->data)) {
				$this->Flash->success(__('The actors product has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The actors product could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ActorsProduct.' . $this->ActorsProduct->primaryKey => $id));
			$this->request->data = $this->ActorsProduct->find('first', $options);
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
		$this->ActorsProduct->id = $id;
		if (!$this->ActorsProduct->exists()) {
			throw new NotFoundException(__('Invalid actors product'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ActorsProduct->delete()) {
			$this->Flash->success(__('The actors product has been deleted.'));
		} else {
			$this->Flash->error(__('The actors product could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
