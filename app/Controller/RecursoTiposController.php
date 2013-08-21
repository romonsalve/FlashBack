<?php
App::uses('AppController', 'Controller');
/**
 * RecursoTipos Controller
 *
 * @property RecursoTipo $RecursoTipo
 * @property PaginatorComponent $Paginator
 */
class RecursoTiposController extends AppController {

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
		$this->RecursoTipo->recursive = 0;
		$this->set('recursoTipos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->RecursoTipo->exists($id)) {
			throw new NotFoundException(__('Invalid recurso tipo'));
		}
		$options = array('conditions' => array('RecursoTipo.' . $this->RecursoTipo->primaryKey => $id));
		$this->set('recursoTipo', $this->RecursoTipo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->RecursoTipo->create();
			if ($this->RecursoTipo->save($this->request->data)) {
				$this->Session->setFlash(__('The recurso tipo has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The recurso tipo could not be saved. Please, try again.'));
			}
		}
		$eventoTipos = $this->RecursoTipo->EventoTipo->find('list');
		$propiedades = $this->RecursoTipo->Propiedade->find('list');
		$proveedores = $this->RecursoTipo->Proveedore->find('list');
		$this->set(compact('eventoTipos', 'propiedades', 'proveedores'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->RecursoTipo->exists($id)) {
			throw new NotFoundException(__('Invalid recurso tipo'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->RecursoTipo->save($this->request->data)) {
				$this->Session->setFlash(__('The recurso tipo has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The recurso tipo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('RecursoTipo.' . $this->RecursoTipo->primaryKey => $id));
			$this->request->data = $this->RecursoTipo->find('first', $options);
		}
		$eventoTipos = $this->RecursoTipo->EventoTipo->find('list');
		$propiedades = $this->RecursoTipo->Propiedade->find('list');
		$proveedores = $this->RecursoTipo->Proveedore->find('list');
		$this->set(compact('eventoTipos', 'propiedades', 'proveedores'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->RecursoTipo->id = $id;
		if (!$this->RecursoTipo->exists()) {
			throw new NotFoundException(__('Invalid recurso tipo'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->RecursoTipo->delete()) {
			$this->Session->setFlash(__('Recurso tipo deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Recurso tipo was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
}
