<?php
App::uses('AppController', 'Controller');
/**
 * RecursosPorEventos Controller
 *
 * @property RecursosPorEvento $RecursosPorEvento
 */
class RecursosPorEventosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->RecursosPorEvento->recursive = 0;
		$this->set('recursosPorEventos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->RecursosPorEvento->exists($id)) {
			throw new NotFoundException(__('Invalid recursos por evento'));
		}
		$options = array('conditions' => array('RecursosPorEvento.' . $this->RecursosPorEvento->primaryKey => $id));
		$this->set('recursosPorEvento', $this->RecursosPorEvento->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->RecursosPorEvento->create();
			if ($this->RecursosPorEvento->save($this->request->data)) {
				$this->Session->setFlash(__('The recursos por evento has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The recursos por evento could not be saved. Please, try again.'));
			}
		}
		$eventos = $this->RecursosPorEvento->Evento->find('list');
		$recursos = $this->RecursosPorEvento->Recurso->find('list');
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
		if (!$this->RecursosPorEvento->exists($id)) {
			throw new NotFoundException(__('Invalid recursos por evento'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->RecursosPorEvento->save($this->request->data)) {
				$this->Session->setFlash(__('The recursos por evento has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The recursos por evento could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('RecursosPorEvento.' . $this->RecursosPorEvento->primaryKey => $id));
			$this->request->data = $this->RecursosPorEvento->find('first', $options);
		}
		$eventos = $this->RecursosPorEvento->Evento->find('list');
		$recursos = $this->RecursosPorEvento->Recurso->find('list');
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
		$this->RecursosPorEvento->id = $id;
		if (!$this->RecursosPorEvento->exists()) {
			throw new NotFoundException(__('Invalid recursos por evento'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->RecursosPorEvento->delete()) {
			$this->Session->setFlash(__('Recursos por evento deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Recursos por evento was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
