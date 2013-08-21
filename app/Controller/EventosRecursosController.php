<?php
App::uses('AppController', 'Controller');
/**
 * EventosRecursos Controller
 *
 * @property EventosRecurso $EventosRecurso
 * @property PaginatorComponent $Paginator
 */
class EventosRecursosController extends AppController {

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
		$this->EventosRecurso->recursive = 0;
		$this->set('eventosRecursos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->EventosRecurso->exists($id)) {
			throw new NotFoundException(__('Invalid eventos recurso'));
		}
		$options = array('conditions' => array('EventosRecurso.' . $this->EventosRecurso->primaryKey => $id));
		$this->set('eventosRecurso', $this->EventosRecurso->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->EventosRecurso->create();
			if ($this->EventosRecurso->save($this->request->data)) {
				$this->Session->setFlash(__('The eventos recurso has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The eventos recurso could not be saved. Please, try again.'));
			}
		}
		$eventos = $this->EventosRecurso->Evento->find('list');
		$recursos = $this->EventosRecurso->Recurso->find('list');
		$this->set(compact('eventos', 'recursos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->EventosRecurso->exists($id)) {
			throw new NotFoundException(__('Invalid eventos recurso'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->EventosRecurso->save($this->request->data)) {
				$this->Session->setFlash(__('The eventos recurso has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The eventos recurso could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('EventosRecurso.' . $this->EventosRecurso->primaryKey => $id));
			$this->request->data = $this->EventosRecurso->find('first', $options);
		}
		$eventos = $this->EventosRecurso->Evento->find('list');
		$recursos = $this->EventosRecurso->Recurso->find('list');
		$this->set(compact('eventos', 'recursos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->EventosRecurso->id = $id;
		if (!$this->EventosRecurso->exists()) {
			throw new NotFoundException(__('Invalid eventos recurso'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->EventosRecurso->delete()) {
			$this->Session->setFlash(__('Eventos recurso deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Eventos recurso was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
}
