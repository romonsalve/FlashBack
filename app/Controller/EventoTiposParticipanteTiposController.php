<?php
App::uses('AppController', 'Controller');
/**
 * EventoTiposParticipanteTipos Controller
 *
 * @property EventoTiposParticipanteTipo $EventoTiposParticipanteTipo
 */
class EventoTiposParticipanteTiposController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->EventoTiposParticipanteTipo->recursive = 0;
		$this->set('eventoTiposParticipanteTipos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->EventoTiposParticipanteTipo->exists($id)) {
			throw new NotFoundException(__('Invalid evento tipos participante tipo'));
		}
		$options = array('conditions' => array('EventoTiposParticipanteTipo.' . $this->EventoTiposParticipanteTipo->primaryKey => $id));
		$this->set('eventoTiposParticipanteTipo', $this->EventoTiposParticipanteTipo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->EventoTiposParticipanteTipo->create();
			if ($this->EventoTiposParticipanteTipo->save($this->request->data)) {
				$this->Session->setFlash(__('The evento tipos participante tipo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The evento tipos participante tipo could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->EventoTiposParticipanteTipo->exists($id)) {
			throw new NotFoundException(__('Invalid evento tipos participante tipo'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->EventoTiposParticipanteTipo->save($this->request->data)) {
				$this->Session->setFlash(__('The evento tipos participante tipo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The evento tipos participante tipo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('EventoTiposParticipanteTipo.' . $this->EventoTiposParticipanteTipo->primaryKey => $id));
			$this->request->data = $this->EventoTiposParticipanteTipo->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->EventoTiposParticipanteTipo->id = $id;
		if (!$this->EventoTiposParticipanteTipo->exists()) {
			throw new NotFoundException(__('Invalid evento tipos participante tipo'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->EventoTiposParticipanteTipo->delete()) {
			$this->Session->setFlash(__('Evento tipos participante tipo deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Evento tipos participante tipo was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
