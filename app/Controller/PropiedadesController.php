<?php
App::uses('AppController', 'Controller');
/**
 * Propiedades Controller
 *
 * @property Propiedade $Propiedade
 * @property PaginatorComponent $Paginator
 */
class PropiedadesController extends AppController {

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
		$this->Propiedade->recursive = 0;
		$this->set('propiedades', $this->Paginator->paginate());
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
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The propiedade could not be saved. Please, try again.'));
			}
		}
		$medidas = $this->Propiedade->Medida->find('list');
		$recursoTipos = $this->Propiedade->RecursoTipo->find('list');
		$recursos = $this->Propiedade->Recurso->find('list');
		$this->set(compact('medidas', 'recursoTipos', 'recursos'));
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
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The propiedade could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Propiedade.' . $this->Propiedade->primaryKey => $id));
			$this->request->data = $this->Propiedade->find('first', $options);
		}
		$medidas = $this->Propiedade->Medida->find('list');
		$recursoTipos = $this->Propiedade->RecursoTipo->find('list');
		$recursos = $this->Propiedade->Recurso->find('list');
		$this->set(compact('medidas', 'recursoTipos', 'recursos'));
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
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Propiedade was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
}
