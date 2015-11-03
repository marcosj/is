<?php
App::uses('AppController', 'Controller');
/**
 * ValidAccounts Controller
 *
 * @property ValidAccount $ValidAccount
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class ValidAccountsController extends AppController {

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
		$this->ValidAccount->recursive = 0;
		$this->set('validAccounts', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ValidAccount->exists($id)) {
			throw new NotFoundException(__('Invalid valid account'));
		}
		$options = array('conditions' => array('ValidAccount.' . $this->ValidAccount->primaryKey => $id));
		$this->set('validAccount', $this->ValidAccount->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ValidAccount->create();
			if ($this->ValidAccount->save($this->request->data)) {
				$this->Flash->success(__('The valid account has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The valid account could not be saved. Please, try again.'));
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
		if (!$this->ValidAccount->exists($id)) {
			throw new NotFoundException(__('Invalid valid account'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ValidAccount->save($this->request->data)) {
				$this->Flash->success(__('The valid account has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The valid account could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ValidAccount.' . $this->ValidAccount->primaryKey => $id));
			$this->request->data = $this->ValidAccount->find('first', $options);
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
		$this->ValidAccount->id = $id;
		if (!$this->ValidAccount->exists()) {
			throw new NotFoundException(__('Invalid valid account'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ValidAccount->delete()) {
			$this->Flash->success(__('The valid account has been deleted.'));
		} else {
			$this->Flash->error(__('The valid account could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->ValidAccount->recursive = 0;
		$this->set('validAccounts', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->ValidAccount->exists($id)) {
			throw new NotFoundException(__('Invalid valid account'));
		}
		$options = array('conditions' => array('ValidAccount.' . $this->ValidAccount->primaryKey => $id));
		$this->set('validAccount', $this->ValidAccount->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->ValidAccount->create();
			if ($this->ValidAccount->save($this->request->data)) {
				$this->Flash->success(__('The valid account has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The valid account could not be saved. Please, try again.'));
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
		if (!$this->ValidAccount->exists($id)) {
			throw new NotFoundException(__('Invalid valid account'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ValidAccount->save($this->request->data)) {
				$this->Flash->success(__('The valid account has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The valid account could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ValidAccount.' . $this->ValidAccount->primaryKey => $id));
			$this->request->data = $this->ValidAccount->find('first', $options);
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
		$this->ValidAccount->id = $id;
		if (!$this->ValidAccount->exists()) {
			throw new NotFoundException(__('Invalid valid account'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ValidAccount->delete()) {
			$this->Flash->success(__('The valid account has been deleted.'));
		} else {
			$this->Flash->error(__('The valid account could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
