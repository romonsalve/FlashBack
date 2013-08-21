<?php
App::uses('AppController', 'Controller');
/**
 * RecintoTipos Controller
 *
 * @property RecintoTipo $RecintoTipo
 * @property PaginatorComponent $Paginator
 */
class RecintoTiposController extends AppController {

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
		$this->RecintoTipo->recursive = 0;
		$this->set('recintoTipos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->RecintoTipo->exists($id)) {
			throw new NotFoundException(__('Invalid recinto tipo'));
		}
		$options = array('conditions' => array('RecintoTipo.' . $this->RecintoTipo->primaryKey => $id));
		$this->set('recintoTipo', $this->RecintoTipo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->RecintoTipo->create();
			if ($this->RecintoTipo->save($this->request->data)) {
				$this->Session->setFlash(__('The recinto tipo has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The recinto tipo could not be saved. Please, try again.'));
			}
		}
		$eventoTipos = $this->RecintoTipo->EventoTipo->find('list');
		$this->set(compact('eventoTipos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->RecintoTipo->exists($id)) {
			throw new NotFoundException(__('Invalid recinto tipo'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->RecintoTipo->save($this->request->data)) {
				$this->Session->setFlash(__('The recinto tipo has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The recinto tipo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('RecintoTipo.' . $this->RecintoTipo->primaryKey => $id));
			$this->request->data = $this->RecintoTipo->find('first', $options);
		}
		$eventoTipos = $this->RecintoTipo->EventoTipo->find('list');
		$this->set(compact('eventoTipos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->RecintoTipo->id = $id;
		if (!$this->RecintoTipo->exists()) {
			throw new NotFoundException(__('Invalid recinto tipo'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->RecintoTipo->delete()) {
			$this->Session->setFlash(__('Recinto tipo deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Recinto tipo was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
}
