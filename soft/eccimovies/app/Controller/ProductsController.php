<?php
App::uses('AppController', 'Controller');
/**
 * Products Controller
 *
 * @property Product $Product
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class ProductsController extends AppController {

	public $helpers = array('Html', 'Form', 'Flash','Js');

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Flash', 'Session');

	// Permite que los productos se muestren por páginas
	public $paginate = array(
		'limit' => 15,
		'order' => array('Product.name' => 'asc')
	);

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Product->recursive = 0;
		$this->Paginator->settings = $this->paginate;
		$this->set('products', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if( !$id )
		{
			throw new NotFoundException(__('Producto inválido.'));
		}

		$product = $this->Product->findById($id);

		if( !$product )
		{
			throw new NotFoundException(__('Producto inválido.'));
		}

		$this->set('post', $product);
	}

	public function buscar()
	{

		if($this->request->is('post')){



			$condition = explode(' ', trim($this->request->data('name')));

			$condition = array_diff($condition,array(''));

			switch($this->request->data['filter'])
			{

				case "0": //Title
					 $products = $this->searchTitle($condition);
					break;
				case "1": //Actor
					$products = $this->searchActor($condition);

					break;
				case "2": //Director
					$products = $this->searchDirector($condition);

					break;



				 default: //All
					$products = array_merge($this->searchTitle($condition), $this->searchActor($condition), $this->searchDirector($condition));

			}


			if(count($products)>0){
				$this->set('Product',$products);
			} else
			{
				$this->Flash->set(__('No se encontraron coincidencias'));
				return $this->redirect(array('action' => 'index'));

			}



		}

	}

	function searchTitle($condition)
	{
		foreach($condition as $rules){
			$conditions[] = array('Product.name LIKE '=>$rules.'%');
			$products= $this->Product->find('all', array('recursive'=>-1, 'conditions'=>$conditions));
		 }

		return $products;
	}

	function searchActor($condition)
	{
		$this->loadModel('ActorsProduct');
		$this->ActorsProduct->recursive = -1;

		foreach($condition as $rules)
		{
			$options['joins'] = array(array('table' => 'actors_products', 'alias' => 'Actors',
									  'type' => 'LEFT',
									  'conditions' => array('Product.id = Actors.product_id')));
			$options['conditions'] = array('Actors.actor_id LIKE '=> '%'.$rules.'%');

			$products =$this->Product->find('all', $options);
		}

		return $products;
	}

	function searchDirector($condition)
	{
		foreach($condition as $rules){
			$conditions[] = array('Product.more_details LIKE '=> 'Director'.'%'.$rules.'%');
			$products= $this->Product->find('all', array('recursive'=>-1, 'conditions'=>$conditions));
		 }

		return $products;
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Product->recursive = 0;
		$this->Paginator->settings = $this->paginate;
		$this->set('products', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if( !$id )
		{
			throw new NotFoundException(__('Producto inválido.'));
		}

		$product = $this->Product->findById($id);

		if( !$product )
		{
			throw new NotFoundException(__('Producto inválido.'));
		}

		$this->set('post', $product);
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function add() {
		// Por si falla el INSERT
		try
		{
			if($this->request->is('post'))
			{
				if(isset($this->request->data['cancel']))
				{
					$this->Flash->success(__('Acción cancelada.', true));
					return $this->redirect(array('action' => 'admin_index'));
				}

				$this->Product->create();

				// Si pudo agregar el producto
				if($this->Product->save($this->request->data))
				{
					$this->Flash->set(__('¡Producto agregado correctamente!'));
					return $this->redirect(array('action' => 'admin_index'));
				}
				// Si no puedo agregar el producto
				else
				{
					throw new Exception('Exception');
				}
			}
			else
			{
				$this->set('subcategories', $this->Product->Subcategory->find('list', array('fields' => 'subcategory_name')));
			}
		}
		catch( Exception $e )
		{
			// Si la excepción es por PRIMARY KEY
			if( $e->getCode() == 23000 )
			{
				$this->Flash->set(__('¡Este código ya está registrado!'));
			}
			// Si la excepción es por otra cosa
			else
			{
				$this->Flash->set(__('Oops! Algo ha salido mal. Inténtelo de nuevo'));
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
	public function edit($id = null) {
		if( !$id )
		{
			throw new NotFoundException(__('Producto inválido.'));
		}

		$product = $this->Product->findById($id);
		if( !$product )
		{
			throw new NotFoundException(__('Producto inválido.'));
		}

		if($this->request->is(array('post', 'put')))
		{
			if(isset($this->request->data['cancel']))
			{
				$this->Flash->success(__('Acción cancelada.', true));
				return $this->redirect(array('action' => 'admin_index'));
			}

			$this->Product->id = $id;
			if( $this->Product->save( $this->request->data ) )
			{
				$this->Flash->success(__('El producto se actualizó correctamente.'));
				return $this->redirect(array('action' => 'admin_index'));
			}
			else
			{
				debug($this->Product->validationErrors);
				$this->Flash->error(__('No se ha podido actualizar el producto.'));
			}
		}
		else
		{
			$this->request->data = $product;
			$this->set('categories', $this->Product->Category->find('list', array('fields' => 'category_name')));
			$this->set('subcategories', $this->Product->Subcategory->find('list', array('fields' => 'subcategory_name')));
		}

		if(!$this->request->data)
		{
			$this->request->data = $product;
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
		if( !$id )
		{
			throw new NotFoundException(__('Producto inválido.'));
		}

		if( $this->request->is('get') )
		{
			throw new MethodNotAllowedException();
		}

		$product = $this->Product->findById($id);
		if( !$product )
		{
			throw new NotFoundException(__('Producto inválido.'));
		}

		if( $this->request->is(array('post', 'put')) )
		{
			if( $this->Product->updateAll(array("enable" => "0"),array("Product.id" => "$id")) )
			{
				$this->Flash->success(__('El producto ha sido eliminado correctamente.'));
				return $this->redirect(array('action' => 'admin_index'));
			}
			$this->Flash->error(__('No se ha podido eliminar el producto.'));
		}

		return $this->redirect(array('action' => 'admin_index'));
	}
}
