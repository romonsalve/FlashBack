<?php
App::uses('AppController', 'Controller');
/**
 * Recursos Controller
 *
 * @property Recurso $Recurso
 */
class RecursosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Recurso->recursive = 0;
		$this->set('recursos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Recurso->exists($id)) {
			throw new NotFoundException(__('Invalid recurso'));
		}
		$options = array('conditions' => array('Recurso.' . $this->Recurso->primaryKey => $id));
		$this->set('recurso', $this->Recurso->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Recurso->create();
			if ($this->Recurso->save($this->request->data)) {
				$this->Session->setFlash(__('The recurso has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The recurso could not be saved. Please, try again.'));
			}
		}
		$recursoTipos = $this->Recurso->RecursoTipo->find('list');
		$proveedores = $this->Recurso->Proveedore->find('list');
		$propiedades = $this->Recurso->Propiedade->find('list');
		$this->set(compact('recursoTipos', 'proveedores', 'propiedades'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Recurso->exists($id)) {
			throw new NotFoundException(__('Invalid recurso'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Recurso->save($this->request->data)) {
				$this->Session->setFlash(__('The recurso has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The recurso could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Recurso.' . $this->Recurso->primaryKey => $id));
			$this->request->data = $this->Recurso->find('first', $options);
		}
		$recursoTipos = $this->Recurso->RecursoTipo->find('list');
		$proveedores = $this->Recurso->Proveedore->find('list');
		$propiedades = $this->Recurso->Propiedade->find('list');
		$this->set(compact('recursoTipos', 'proveedores', 'propiedades'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Recurso->id = $id;
		if (!$this->Recurso->exists()) {
			throw new NotFoundException(__('Invalid recurso'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Recurso->delete()) {
			$this->Session->setFlash(__('Recurso deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Recurso was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
