<?php
App::uses('AppController', 'Controller');
/**
 * Addresses Controller
 *
 * @property Address $Address
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class AddressesController extends AppController {

	public $helpers = array('Html', 'Form', 'Flash');

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
	public function index($uid = null) {
		$this->Address->recursive = 0;
		$this->Paginator->settings = array(
			'conditions' => array('user_id' => $uid)
		);
		$this->set('addresses', $this->Paginator->paginate());
		$this->set('uid', $uid);
		//$this->set('addresses', $this->Address->findAllByUserId($uid));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Address->exists($id)) {
			throw new NotFoundException(__('Invalid address'));
		}
		$options = array('conditions' => array('Address.' . $this->Address->primaryKey => $id));
		$this->set('address', $this->Address->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($id = null) {
		if (!$this->Address->exists($id)) {
			throw new NotFoundException(__('Invalid address'));
		}
		if ($this->request->is('post')) {
			if (isset( $this->request->data['cancel'])) {
				$this->Flash->success(__('Acción cancelada.', true));
				return $this->redirect( array('action' => 'index', $this->request->data['Address']['user_id']) );
			}
			$this->Address->create();
			if ($this->Address->save($this->request->data)) {
				$this->Flash->success(__('The address has been saved.'));
				return $this->redirect( array('action' => 'index', $this->request->data['Address']['user_id']) );
			} else {
				$this->Flash->error(__('The address could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data['Address']['user_id'] = $id;
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
		if (!$this->Address->exists($id)) {
			throw new NotFoundException(__('Invalid address'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if (isset( $this->request->data['cancel'])) {
				$this->Flash->success(__('Acción cancelada.', true));
				return $this->redirect(array('action' => 'index', $this->request->data['Address']['user_id']));
			}
			if ($this->Address->save($this->request->data)) {
				$this->Flash->success(__('The address has been saved.'));
				return $this->redirect(array('action' => 'index', $this->request->data['Address']['user_id']));
			} else {
				$this->Flash->error(__('The address could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Address.' . $this->Address->primaryKey => $id));
			$this->request->data = $this->Address->find('first', $options);
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
		$this->Address->id = $id;
		if (!$this->Address->exists()) {
			throw new NotFoundException(__('Invalid address'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Address->delete()) {
			$this->Flash->success(__('The address has been deleted.'));
		} else {
			$this->Flash->error(__('The address could not be deleted. Please, try again.'));
		}
		return $this->redirect($this->referer());
	}

}
