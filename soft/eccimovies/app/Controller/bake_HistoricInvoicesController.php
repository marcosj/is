<?php
App::uses('AppController', 'Controller');
/**
 * HistoricInvoices Controller
 *
 * @property HistoricInvoice $HistoricInvoice
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class HistoricInvoicesController extends AppController {

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
		$this->HistoricInvoice->recursive = 0;
		$this->set('historicInvoices', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->HistoricInvoice->exists($id)) {
			throw new NotFoundException(__('Invalid historic invoice'));
		}
		$options = array('conditions' => array('HistoricInvoice.' . $this->HistoricInvoice->primaryKey => $id));
		$this->set('historicInvoice', $this->HistoricInvoice->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->HistoricInvoice->create();
			if ($this->HistoricInvoice->save($this->request->data)) {
				$this->Flash->success(__('The historic invoice has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The historic invoice could not be saved. Please, try again.'));
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
		if (!$this->HistoricInvoice->exists($id)) {
			throw new NotFoundException(__('Invalid historic invoice'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->HistoricInvoice->save($this->request->data)) {
				$this->Flash->success(__('The historic invoice has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The historic invoice could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('HistoricInvoice.' . $this->HistoricInvoice->primaryKey => $id));
			$this->request->data = $this->HistoricInvoice->find('first', $options);
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
		$this->HistoricInvoice->id = $id;
		if (!$this->HistoricInvoice->exists()) {
			throw new NotFoundException(__('Invalid historic invoice'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->HistoricInvoice->delete()) {
			$this->Flash->success(__('The historic invoice has been deleted.'));
		} else {
			$this->Flash->error(__('The historic invoice could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->HistoricInvoice->recursive = 0;
		$this->set('historicInvoices', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->HistoricInvoice->exists($id)) {
			throw new NotFoundException(__('Invalid historic invoice'));
		}
		$options = array('conditions' => array('HistoricInvoice.' . $this->HistoricInvoice->primaryKey => $id));
		$this->set('historicInvoice', $this->HistoricInvoice->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->HistoricInvoice->create();
			if ($this->HistoricInvoice->save($this->request->data)) {
				$this->Flash->success(__('The historic invoice has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The historic invoice could not be saved. Please, try again.'));
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
		if (!$this->HistoricInvoice->exists($id)) {
			throw new NotFoundException(__('Invalid historic invoice'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->HistoricInvoice->save($this->request->data)) {
				$this->Flash->success(__('The historic invoice has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The historic invoice could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('HistoricInvoice.' . $this->HistoricInvoice->primaryKey => $id));
			$this->request->data = $this->HistoricInvoice->find('first', $options);
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
		$this->HistoricInvoice->id = $id;
		if (!$this->HistoricInvoice->exists()) {
			throw new NotFoundException(__('Invalid historic invoice'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->HistoricInvoice->delete()) {
			$this->Flash->success(__('The historic invoice has been deleted.'));
		} else {
			$this->Flash->error(__('The historic invoice could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
