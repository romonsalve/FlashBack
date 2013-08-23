<?php
App::uses('AppController', 'Controller');
/**
 * Participantes Controller
 *
 * @property Participante $Participante
 * @property PaginatorComponent $Paginator
 */
class ParticipantesController extends AppController {

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
		$this->Participante->recursive = 0;
		$this->set('participantes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Participante->exists($id)) {
			throw new NotFoundException(__('Invalid participante'));
		}
		$options = array('conditions' => array('Participante.' . $this->Participante->primaryKey => $id));
		$this->set('participante', $this->Participante->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Participante->create();
			if ($this->Participante->save($this->request->data)) {
				$this->Session->setFlash(__('The participante has been saved'), 'fexito');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The participante could not be saved. Please, try again.'), 'ferror');
			}
		}
		$participanteTipos = $this->Participante->ParticipanteTipo->find('list');
		$this->set(compact('participanteTipos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Participante->exists($id)) {
			throw new NotFoundException(__('Invalid participante'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Participante->save($this->request->data)) {
				$this->Session->setFlash(__('The participante has been saved'), 'fexito');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The participante could not be saved. Please, try again.'), 'ferror');
			}
		} else {
			$options = array('conditions' => array('Participante.' . $this->Participante->primaryKey => $id));
			$this->request->data = $this->Participante->find('first', $options);
		}
		$participanteTipos = $this->Participante->ParticipanteTipo->find('list');
		$this->set(compact('participanteTipos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Participante->id = $id;
		if (!$this->Participante->exists()) {
			throw new NotFoundException(__('Invalid participante'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Participante->delete()) {
			$this->Session->setFlash(__('Participante deleted'), 'fexito');
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Participante was not deleted'), 'ferror');
		return $this->redirect(array('action' => 'index'));
	}
}
