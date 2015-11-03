<?php
App::uses('AppController', 'Controller');
/**
 * Subcategories Controller
 *
 * @property Subcategory $Subcategory
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class SubcategoriesController extends AppController {

	public $helpers = array('Html', 'Form');

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
		$this->set('subcategories', $this->Subcategory->find('all'));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Invalid subcategory'));
		}

		$subcategory = $this->Subcategory->findById($id);
		if (!$subcategory) {
			throw new NotFoundException(__('Invalid subcategory'));
		}
		$this->set('subcategory', $subcategory);
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Subcategory->recursive = 0;
		$this->set('subcategories', $this->Paginator->paginate());
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function add($id = null) {
		if ($this->request->is('post')) {
			if (isset( $this->request->data['cancel'])) {
				$this->Flash->success(__('Acción cancelada.', true));
				return $this->redirect(array('controller' => 'categories', 'action' => 'admin_index'));
			}
			$this->Subcategory->create();
			if ($this->Subcategory->save($this->request->data)) {
				$this->Flash->success(__('Ha creado una nueva subcategoría.'));
				return $this->redirect(array('controller' => 'categories', 'action' => 'admin_index'));
			}
			$this->Flash->error(__('No se pudo crear la subcategoría.'));
		} else {
			$this->request->data['Subcategory']['category_id'] = $id;
			$this->set('categories', $this->Subcategory->Category->find('list', array('fields' => 'category_name')));
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Subcategoría no válida'));
		}

		$subcategory = $this->Subcategory->findById($id);
		if (!$subcategory) {
			throw new NotFoundException(__('Subcategoría no válida'));
		}

		if ($this->request->is(array('post', 'put'))) {
			if (isset( $this->request->data['cancel'])) {
				$this->Flash->success(__('Acción cancelada.', true));
				return $this->redirect(array('controller' => 'categories', 'action' => 'admin_index'));
			}
			$this->Subcategory->id = $id;
			if ($this->Subcategory->save($this->request->data)) {
				$this->Flash->success(__('Ha modificado la subcategoría.'));
				return $this->redirect(array('controller' => 'categories', 'action' => 'admin_index'));
			}
			$this->Flash->error(__('No pudo modificar la subcategoría.'));
		} else {
			$this->set('categories', $this->Subcategory->Category->find('list', array('fields' => 'category_name')));
		}

		if (!$this->request->data) {
			$this->request->data = $subcategory;
		}
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}

		$this->Subcategory->id = $id;
		$name = $this->Subcategory->field('subcategory_name');
		if ($this->Subcategory->delete($id)) {
			$this->Flash->success(
				__('Ha borrado la subcategoría: %s.', $name)
			);
		} else {
			$this->Flash->error(
				__('No se pudo eliminar la subcategoría: %s.', $name)
			);
		}

		return $this->redirect(array('controller' => 'categories', 'action' => 'admin_index'));
	}
}
