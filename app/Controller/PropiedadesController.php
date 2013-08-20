<?php
App::uses('AppController', 'Controller');
/**
 * Propiedades Controller
 *
 * @property Propiedade $Propiedade
 */
class PropiedadesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Propiedade->recursive = 0;
		$this->set('propiedades', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Propiedade->exists($id)) {
			throw new NotFoundException(__('Invalid propiedade'));
		}
		$options = array('conditions' => array('Propiedade.' . $this->Propiedade->primaryKey => $id));
		$this->set('propiedade', $this->Propiedade->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Propiedade->create();
			if ($this->Propiedade->save($this->request->data)) {
				$this->Session->setFlash(__('The propiedade has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The propiedade could not be saved. Please, try again.'));
			}
		}
		$recursos = $this->Propiedade->Recurso->find('list');
		$recursoTipos = $this->Propiedade->RecursoTipo->find('list');
		$this->set(compact('recursos', 'recursoTipos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Propiedade->exists($id)) {
			throw new NotFoundException(__('Invalid propiedade'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Propiedade->save($this->request->data)) {
				$this->Session->setFlash(__('The propiedade has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The propiedade could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Propiedade.' . $this->Propiedade->primaryKey => $id));
			$this->request->data = $this->Propiedade->find('first', $options);
		}
		$recursos = $this->Propiedade->Recurso->find('list');
		$recursoTipos = $this->Propiedade->RecursoTipo->find('list');
		$this->set(compact('recursos', 'recursoTipos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Propiedade->id = $id;
		if (!$this->Propiedade->exists()) {
			throw new NotFoundException(__('Invalid propiedade'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Propiedade->delete()) {
			$this->Session->setFlash(__('Propiedade deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Propiedade was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
