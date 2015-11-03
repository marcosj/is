<?php
App::uses('AppController', 'Controller');
/**
 * HistoricProducts Controller
 *
 * @property HistoricProduct $HistoricProduct
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class HistoricProductsController extends AppController {

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
		$this->HistoricProduct->recursive = 0;
		$this->set('historicProducts', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->HistoricProduct->exists($id)) {
			throw new NotFoundException(__('Invalid historic product'));
		}
		$options = array('conditions' => array('HistoricProduct.' . $this->HistoricProduct->primaryKey => $id));
		$this->set('historicProduct', $this->HistoricProduct->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->HistoricProduct->create();
			if ($this->HistoricProduct->save($this->request->data)) {
				$this->Flash->success(__('The historic product has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The historic product could not be saved. Please, try again.'));
			}
		}
		$historicInvoices = $this->HistoricProduct->HistoricInvoice->find('list');
		$this->set(compact('historicInvoices'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->HistoricProduct->exists($id)) {
			throw new NotFoundException(__('Invalid historic product'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->HistoricProduct->save($this->request->data)) {
				$this->Flash->success(__('The historic product has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The historic product could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('HistoricProduct.' . $this->HistoricProduct->primaryKey => $id));
			$this->request->data = $this->HistoricProduct->find('first', $options);
		}
		$historicInvoices = $this->HistoricProduct->HistoricInvoice->find('list');
		$this->set(compact('historicInvoices'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->HistoricProduct->id = $id;
		if (!$this->HistoricProduct->exists()) {
			throw new NotFoundException(__('Invalid historic product'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->HistoricProduct->delete()) {
			$this->Flash->success(__('The historic product has been deleted.'));
		} else {
			$this->Flash->error(__('The historic product could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->HistoricProduct->recursive = 0;
		$this->set('historicProducts', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->HistoricProduct->exists($id)) {
			throw new NotFoundException(__('Invalid historic product'));
		}
		$options = array('conditions' => array('HistoricProduct.' . $this->HistoricProduct->primaryKey => $id));
		$this->set('historicProduct', $this->HistoricProduct->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->HistoricProduct->create();
			if ($this->HistoricProduct->save($this->request->data)) {
				$this->Flash->success(__('The historic product has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The historic product could not be saved. Please, try again.'));
			}
		}
		$historicInvoices = $this->HistoricProduct->HistoricInvoice->find('list');
		$this->set(compact('historicInvoices'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->HistoricProduct->exists($id)) {
			throw new NotFoundException(__('Invalid historic product'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->HistoricProduct->save($this->request->data)) {
				$this->Flash->success(__('The historic product has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The historic product could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('HistoricProduct.' . $this->HistoricProduct->primaryKey => $id));
			$this->request->data = $this->HistoricProduct->find('first', $options);
		}
		$historicInvoices = $this->HistoricProduct->HistoricInvoice->find('list');
		$this->set(compact('historicInvoices'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->HistoricProduct->id = $id;
		if (!$this->HistoricProduct->exists()) {
			throw new NotFoundException(__('Invalid historic product'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->HistoricProduct->delete()) {
			$this->Flash->success(__('The historic product has been deleted.'));
		} else {
			$this->Flash->error(__('The historic product could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
