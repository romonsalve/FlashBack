<?php
App::uses('AppController', 'Controller');
/**
 * Proveedores Controller
 *
 * @property Proveedore $Proveedore
 * @property PaginatorComponent $Paginator
 */
class ProveedoresController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Proveedore->recursive = 0;
		$this->set('proveedores', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Proveedore->exists($id)) {
			throw new NotFoundException(__('Invalid proveedore'));
		}
		$options = array('conditions' => array('Proveedore.' . $this->Proveedore->primaryKey => $id));
		$this->set('proveedore', $this->Proveedore->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Proveedore->create();
			if ($this->Proveedore->save($this->request->data)) {
				$this->Session->setFlash(__('The proveedore has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The proveedore could not be saved. Please, try again.'));
			}
		}
		$recursoTipos = $this->Proveedore->RecursoTipo->find('list');
		$this->set(compact('recursoTipos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Proveedore->exists($id)) {
			throw new NotFoundException(__('Invalid proveedore'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Proveedore->save($this->request->data)) {
				$this->Session->setFlash(__('The proveedore has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The proveedore could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Proveedore.' . $this->Proveedore->primaryKey => $id));
			$this->request->data = $this->Proveedore->find('first', $options);
		}
		$recursoTipos = $this->Proveedore->RecursoTipo->find('list');
		$this->set(compact('recursoTipos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Proveedore->id = $id;
		if (!$this->Proveedore->exists()) {
			throw new NotFoundException(__('Invalid proveedore'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Proveedore->delete()) {
			$this->Session->setFlash(__('Proveedore deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Proveedore was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
}
