<?php
App::uses('AppController', 'Controller');
/**
 * Medidas Controller
 *
 * @property Medida $Medida
 * @property PaginatorComponent $Paginator
 */
class MedidasController extends AppController {

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
		$this->Medida->recursive = 0;
		$this->set('medidas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Medida->exists($id)) {
			throw new NotFoundException(__('Invalid medida'));
		}
		$options = array('conditions' => array('Medida.' . $this->Medida->primaryKey => $id));
		$this->set('medida', $this->Medida->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Medida->create();
			if ($this->Medida->save($this->request->data)) {
				$this->Session->setFlash(__('The medida has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The medida could not be saved. Please, try again.'));
			}
		}
		$propiedades = $this->Medida->Propiedade->find('list');
		$this->set(compact('propiedades'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Medida->exists($id)) {
			throw new NotFoundException(__('Invalid medida'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Medida->save($this->request->data)) {
				$this->Session->setFlash(__('The medida has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The medida could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Medida.' . $this->Medida->primaryKey => $id));
			$this->request->data = $this->Medida->find('first', $options);
		}
		$propiedades = $this->Medida->Propiedade->find('list');
		$this->set(compact('propiedades'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Medida->id = $id;
		if (!$this->Medida->exists()) {
			throw new NotFoundException(__('Invalid medida'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Medida->delete()) {
			$this->Session->setFlash(__('Medida deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Medida was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
}
