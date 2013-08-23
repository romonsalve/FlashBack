<?php
App::uses('AppController', 'Controller');
/**
 * ItinerarioParticipantes Controller
 *
 * @property ItinerarioParticipante $ItinerarioParticipante
 * @property PaginatorComponent $Paginator
 */
class ItinerarioParticipantesController extends AppController {

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
		$this->ItinerarioParticipante->recursive = 0;
		$this->set('itinerarioParticipantes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ItinerarioParticipante->exists($id)) {
			throw new NotFoundException(__('Invalid itinerario participante'));
		}
		$options = array('conditions' => array('ItinerarioParticipante.' . $this->ItinerarioParticipante->primaryKey => $id));
		$this->set('itinerarioParticipante', $this->ItinerarioParticipante->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ItinerarioParticipante->create();
			if ($this->ItinerarioParticipante->save($this->request->data)) {
				$this->Session->setFlash(__('The itinerario participante has been saved'), 'fexito');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The itinerario participante could not be saved. Please, try again.'), 'ferror');
			}
		}
		$participantes = $this->ItinerarioParticipante->Participante->find('list');
		$eventos = $this->ItinerarioParticipante->Evento->find('list');
		$this->set(compact('participantes', 'eventos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ItinerarioParticipante->exists($id)) {
			throw new NotFoundException(__('Invalid itinerario participante'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ItinerarioParticipante->save($this->request->data)) {
				$this->Session->setFlash(__('The itinerario participante has been saved'), 'fexito');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The itinerario participante could not be saved. Please, try again.'), 'ferror');
			}
		} else {
			$options = array('conditions' => array('ItinerarioParticipante.' . $this->ItinerarioParticipante->primaryKey => $id));
			$this->request->data = $this->ItinerarioParticipante->find('first', $options);
		}
		$participantes = $this->ItinerarioParticipante->Participante->find('list');
		$eventos = $this->ItinerarioParticipante->Evento->find('list');
		$this->set(compact('participantes', 'eventos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ItinerarioParticipante->id = $id;
		if (!$this->ItinerarioParticipante->exists()) {
			throw new NotFoundException(__('Invalid itinerario participante'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ItinerarioParticipante->delete()) {
			$this->Session->setFlash(__('Itinerario participante deleted'), 'fexito');
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Itinerario participante was not deleted'), 'ferror');
		return $this->redirect(array('action' => 'index'));
	}
}
