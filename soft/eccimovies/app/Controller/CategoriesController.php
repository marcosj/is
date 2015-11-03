<?php
App::uses('AppController', 'Controller');
/**
 * Categories Controller
 *
 * @property Category $Category
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class CategoriesController extends AppController {

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
	public function index() {
		//$this->Category->recursive = 0;
		//$this->set('categories', $this->Paginator->paginate());
		$this->set('categories', $this->Category->find('all'));
		$this->loadModel('Subcategory');
		$this->set('subcategories', $this->Subcategory->find('all'));
	}

	public function viewcategory($category_name = null) {
		$this->loadModel('Subcategory');
		$this->set('subcategories', $this->Subcategory->find('all'));
		$this->loadModel('Product');
		$this->set('products', $this->Product->find('all'));
		 if (!$category_name) {
			throw new NotFoundException(__('Invalid category'));
		}

		$category = $this->Category->findByCategoryName($category_name);
		if (!$category) {
			throw new NotFoundException(__('Invalid category'));
		}
		$this->set('category', $category);
	}

	public function viewsubcategory($subcategory_name = null) {
		$this->loadModel('Product');
		$this->set('products', $this->Product->find('all'));
		$this->loadModel('Subcategory');
		if (!$subcategory_name) {
			throw new NotFoundException(__('Invalid subcategory'));
		}

		$subcategory = $this->Subcategory->findBySubcategoryName($subcategory_name);
		if (!$subcategory) {
			throw new NotFoundException(__('Invalid subcategory'));
		}
		$this->set('subcategory', $subcategory);
	}

	public function viewproduct($name = null) {
		$this->loadModel('Product');
		$this->set('products', $this->Product->find('all'));
		if (!$name) {
			throw new NotFoundException(__('Invalid product'));
		}

		$product = $this->Product->findBySubcategoryName($name);
		if (!$product) {
			throw new NotFoundException(__('Invalid product'));
		}
		$this->set('product', $product);
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		//$this->Category->recursive = 0;
		//$this->set('categories', $this->Paginator->paginate());
		$this->set('categories', $this->Category->find('all'));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			if (isset( $this->request->data['cancel'])) {
				$this->Flash->success(__('Acción cancelada.', true));
				return $this->redirect(array('action' => 'admin_index'));
			}
			$this->Category->create();
			if ($this->Category->save($this->request->data)) {
				$this->Flash->success(__('Your category has been saved.'));
				return $this->redirect(array('action' => 'admin_index'));
			}
			$this->Flash->error(__('Unable to add your category.'));
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
			throw new NotFoundException(__('Invalid category'));
		}

		$category = $this->Category->findById($id);
		if (!$category) {
			throw new NotFoundException(__('Invalid category'));
		}

		if ($this->request->is(array('post', 'put'))) {
			if (isset( $this->request->data['cancel'])) {
				$this->Flash->success(__('Acción cancelada.', true));
				return $this->redirect(array('action' => 'admin_index'));
			}
			$this->Category->id = $id;
			if ($this->Category->save($this->request->data)) {
				$this->Flash->success(__('Your category has been updated.'));
				return $this->redirect(array('action' => 'admin_index'));
			}
			$this->Flash->error(__('Unable to update your category.'));
		}

		if (!$this->request->data) {
			$this->request->data = $category;
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

		if ($this->Category->delete($id)) {
			$this->Flash->success(
				__('Ha borrado la categoría: %s.', h($id))
			);
		} else {
			$this->Flash->error(
				__('The category with id: %s could not be deleted.', h($id))
			);
		}

		return $this->redirect(array('action' => 'admin_index'));
	}
}
