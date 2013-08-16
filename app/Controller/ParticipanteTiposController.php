<?php
App::uses('AppController', 'Controller');
/**
 * ParticipanteTipos Controller
 *
 * @property ParticipanteTipo $ParticipanteTipo
 */
class ParticipanteTiposController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ParticipanteTipo->recursive = 0;
		$this->set('participanteTipos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ParticipanteTipo->exists($id)) {
			throw new NotFoundException(__('Invalid participante tipo'));
		}
		$options = array('conditions' => array('ParticipanteTipo.' . $this->ParticipanteTipo->primaryKey => $id));
		$this->set('participanteTipo', $this->ParticipanteTipo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ParticipanteTipo->create();
			if ($this->ParticipanteTipo->save($this->request->data)) {
				$this->Session->setFlash(__('The participante tipo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The participante tipo could not be saved. Please, try again.'));
			}
		}
		$eventoTipos = $this->ParticipanteTipo->EventoTipo->find('list');
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
		if (!$this->ParticipanteTipo->exists($id)) {
			throw new NotFoundException(__('Invalid participante tipo'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ParticipanteTipo->save($this->request->data)) {
				$this->Session->setFlash(__('The participante tipo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The participante tipo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ParticipanteTipo.' . $this->ParticipanteTipo->primaryKey => $id));
			$this->request->data = $this->ParticipanteTipo->find('first', $options);
		}
		$eventoTipos = $this->ParticipanteTipo->EventoTipo->find('list');
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
		$this->ParticipanteTipo->id = $id;
		if (!$this->ParticipanteTipo->exists()) {
			throw new NotFoundException(__('Invalid participante tipo'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ParticipanteTipo->delete()) {
			$this->Session->setFlash(__('Participante tipo deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Participante tipo was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
