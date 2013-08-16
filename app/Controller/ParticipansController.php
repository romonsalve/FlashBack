<?php
App::uses('AppController', 'Controller');
/**
 * Participans Controller
 *
 * @property Participan $Participan
 */
class ParticipansController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Participan->recursive = 0;
		$this->set('participans', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Participan->exists($id)) {
			throw new NotFoundException(__('Invalid participan'));
		}
		$options = array('conditions' => array('Participan.' . $this->Participan->primaryKey => $id));
		$this->set('participan', $this->Participan->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Participan->create();
			if ($this->Participan->save($this->request->data)) {
				$this->Session->setFlash(__('The participan has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The participan could not be saved. Please, try again.'));
			}
		}
		$solicitudCotizaciones = $this->Participan->SolicitudCotizacione->find('list');
		$participanteTipos = $this->Participan->ParticipanteTipo->find('list');
		$eventoTipos = $this->Participan->EventoTipo->find('list');
		$this->set(compact('solicitudCotizaciones', 'participanteTipos', 'eventoTipos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Participan->exists($id)) {
			throw new NotFoundException(__('Invalid participan'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Participan->save($this->request->data)) {
				$this->Session->setFlash(__('The participan has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The participan could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Participan.' . $this->Participan->primaryKey => $id));
			$this->request->data = $this->Participan->find('first', $options);
		}
		$solicitudCotizaciones = $this->Participan->SolicitudCotizacione->find('list');
		$participanteTipos = $this->Participan->ParticipanteTipo->find('list');
		$eventoTipos = $this->Participan->EventoTipo->find('list');
		$this->set(compact('solicitudCotizaciones', 'participanteTipos', 'eventoTipos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Participan->id = $id;
		if (!$this->Participan->exists()) {
			throw new NotFoundException(__('Invalid participan'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Participan->delete()) {
			$this->Session->setFlash(__('Participan deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Participan was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
