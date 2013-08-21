<?php
App::uses('AppController', 'Controller');
/**
 * EventoTipos Controller
 *
 * @property EventoTipo $EventoTipo
 * @property PaginatorComponent $Paginator
 */
class EventoTiposController extends AppController {

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
		$this->EventoTipo->recursive = 0;
		$this->set('eventoTipos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->EventoTipo->exists($id)) {
			throw new NotFoundException(__('Invalid evento tipo'));
		}
		$options = array('conditions' => array('EventoTipo.' . $this->EventoTipo->primaryKey => $id));
		$this->set('eventoTipo', $this->EventoTipo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->EventoTipo->create();
			if ($this->EventoTipo->save($this->request->data)) {
				$this->Session->setFlash(__('The evento tipo has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The evento tipo could not be saved. Please, try again.'));
			}
		}
		$recintoTipos = $this->EventoTipo->RecintoTipo->find('list');
		$recursoTipos = $this->EventoTipo->RecursoTipo->find('list');
		$actividades = $this->EventoTipo->Actividade->find('list');
		$participanteTipos = $this->EventoTipo->ParticipanteTipo->find('list');
		$this->set(compact('recintoTipos', 'recursoTipos', 'actividades', 'participanteTipos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->EventoTipo->exists($id)) {
			throw new NotFoundException(__('Invalid evento tipo'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->EventoTipo->save($this->request->data)) {
				$this->Session->setFlash(__('The evento tipo has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The evento tipo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('EventoTipo.' . $this->EventoTipo->primaryKey => $id));
			$this->request->data = $this->EventoTipo->find('first', $options);
		}
		$recintoTipos = $this->EventoTipo->RecintoTipo->find('list');
		$recursoTipos = $this->EventoTipo->RecursoTipo->find('list');
		$actividades = $this->EventoTipo->Actividade->find('list');
		$participanteTipos = $this->EventoTipo->ParticipanteTipo->find('list');
		$this->set(compact('recintoTipos', 'recursoTipos', 'actividades', 'participanteTipos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->EventoTipo->id = $id;
		if (!$this->EventoTipo->exists()) {
			throw new NotFoundException(__('Invalid evento tipo'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->EventoTipo->delete()) {
			$this->Session->setFlash(__('Evento tipo deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Evento tipo was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
}
