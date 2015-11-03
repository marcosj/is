<?php
App::uses('AppController', 'Controller');
/**
 * Actors Controller
 *
 * @property Actor $Actor
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class ActorsController extends AppController {

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
		$this->Actor->recursive = 0;
		$this->set('actors', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Actor->exists($id)) {
			throw new NotFoundException(__('Invalid actor'));
		}
		$options = array('conditions' => array('Actor.' . $this->Actor->primaryKey => $id));
		$this->set('actor', $this->Actor->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Actor->create();
			if ($this->Actor->save($this->request->data)) {
				$this->Flash->success(__('The actor has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The actor could not be saved. Please, try again.'));
			}
		}
		$products = $this->Actor->Product->find('list');
		$this->set(compact('products'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Actor->exists($id)) {
			throw new NotFoundException(__('Invalid actor'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Actor->save($this->request->data)) {
				$this->Flash->success(__('The actor has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The actor could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Actor.' . $this->Actor->primaryKey => $id));
			$this->request->data = $this->Actor->find('first', $options);
		}
		$products = $this->Actor->Product->find('list');
		$this->set(compact('products'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Actor->id = $id;
		if (!$this->Actor->exists()) {
			throw new NotFoundException(__('Invalid actor'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Actor->delete()) {
			$this->Flash->success(__('The actor has been deleted.'));
		} else {
			$this->Flash->error(__('The actor could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Actor->recursive = 0;
		$this->set('actors', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Actor->exists($id)) {
			throw new NotFoundException(__('Invalid actor'));
		}
		$options = array('conditions' => array('Actor.' . $this->Actor->primaryKey => $id));
		$this->set('actor', $this->Actor->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Actor->create();
			if ($this->Actor->save($this->request->data)) {
				$this->Flash->success(__('The actor has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The actor could not be saved. Please, try again.'));
			}
		}
		$products = $this->Actor->Product->find('list');
		$this->set(compact('products'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Actor->exists($id)) {
			throw new NotFoundException(__('Invalid actor'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Actor->save($this->request->data)) {
				$this->Flash->success(__('The actor has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The actor could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Actor.' . $this->Actor->primaryKey => $id));
			$this->request->data = $this->Actor->find('first', $options);
		}
		$products = $this->Actor->Product->find('list');
		$this->set(compact('products'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Actor->id = $id;
		if (!$this->Actor->exists()) {
			throw new NotFoundException(__('Invalid actor'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Actor->delete()) {
			$this->Flash->success(__('The actor has been deleted.'));
		} else {
			$this->Flash->error(__('The actor could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
