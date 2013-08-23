<?php
App::uses('AppController', 'Controller');
/**
 * ParticipanteTipos Controller
 *
 * @property ParticipanteTipo $ParticipanteTipo
 * @property PaginatorComponent $Paginator
 */
class ParticipanteTiposController extends AppController {

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
		$this->ParticipanteTipo->recursive = 0;
		$this->set('participanteTipos', $this->Paginator->paginate());
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
				$this->Session->setFlash(__('The participante tipo has been saved'), 'fexito');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The participante tipo could not be saved. Please, try again.'), 'ferror');
			}
		}
		$eventoTipos = $this->ParticipanteTipo->EventoTipo->find('list');
		$solicitudCotizaciones = $this->ParticipanteTipo->SolicitudCotizacione->find('list');
		$this->set(compact('eventoTipos', 'solicitudCotizaciones'));
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
				$this->Session->setFlash(__('The participante tipo has been saved'), 'fexito');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The participante tipo could not be saved. Please, try again.'), 'ferror');
			}
		} else {
			$options = array('conditions' => array('ParticipanteTipo.' . $this->ParticipanteTipo->primaryKey => $id));
			$this->request->data = $this->ParticipanteTipo->find('first', $options);
		}
		$eventoTipos = $this->ParticipanteTipo->EventoTipo->find('list');
		$solicitudCotizaciones = $this->ParticipanteTipo->SolicitudCotizacione->find('list');
		$this->set(compact('eventoTipos', 'solicitudCotizaciones'));
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
			$this->Session->setFlash(__('Participante tipo deleted'), 'fexito');
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Participante tipo was not deleted'), 'ferror');
		return $this->redirect(array('action' => 'index'));
	}
}
