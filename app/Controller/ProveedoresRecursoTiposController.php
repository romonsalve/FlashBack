<?php
App::uses('AppController', 'Controller');
/**
 * ProveedoresRecursoTipos Controller
 *
 * @property ProveedoresRecursoTipo $ProveedoresRecursoTipo
 * @property PaginatorComponent $Paginator
 */
class ProveedoresRecursoTiposController extends AppController {

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
		$this->ProveedoresRecursoTipo->recursive = 0;
		$this->set('proveedoresRecursoTipos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ProveedoresRecursoTipo->exists($id)) {
			throw new NotFoundException(__('Invalid proveedores recurso tipo'));
		}
		$options = array('conditions' => array('ProveedoresRecursoTipo.' . $this->ProveedoresRecursoTipo->primaryKey => $id));
		$this->set('proveedoresRecursoTipo', $this->ProveedoresRecursoTipo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ProveedoresRecursoTipo->create();
			if ($this->ProveedoresRecursoTipo->save($this->request->data)) {
				$this->Session->setFlash(__('The proveedores recurso tipo has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The proveedores recurso tipo could not be saved. Please, try again.'));
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
		if (!$this->ProveedoresRecursoTipo->exists($id)) {
			throw new NotFoundException(__('Invalid proveedores recurso tipo'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ProveedoresRecursoTipo->save($this->request->data)) {
				$this->Session->setFlash(__('The proveedores recurso tipo has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The proveedores recurso tipo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ProveedoresRecursoTipo.' . $this->ProveedoresRecursoTipo->primaryKey => $id));
			$this->request->data = $this->ProveedoresRecursoTipo->find('first', $options);
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
		$this->ProveedoresRecursoTipo->id = $id;
		if (!$this->ProveedoresRecursoTipo->exists()) {
			throw new NotFoundException(__('Invalid proveedores recurso tipo'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ProveedoresRecursoTipo->delete()) {
			$this->Session->setFlash(__('Proveedores recurso tipo deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Proveedores recurso tipo was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
}
