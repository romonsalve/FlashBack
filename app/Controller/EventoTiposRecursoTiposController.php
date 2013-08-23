<?php
App::uses('AppController', 'Controller');
/**
 * EventoTiposRecursoTipos Controller
 *
 * @property EventoTiposRecursoTipo $EventoTiposRecursoTipo
 * @property PaginatorComponent $Paginator
 */
class EventoTiposRecursoTiposController extends AppController {

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
		$this->EventoTiposRecursoTipo->recursive = 0;
		$this->set('eventoTiposRecursoTipos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->EventoTiposRecursoTipo->exists($id)) {
			throw new NotFoundException(__('Invalid evento tipos recurso tipo'));
		}
		$options = array('conditions' => array('EventoTiposRecursoTipo.' . $this->EventoTiposRecursoTipo->primaryKey => $id));
		$this->set('eventoTiposRecursoTipo', $this->EventoTiposRecursoTipo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->EventoTiposRecursoTipo->create();
			if ($this->EventoTiposRecursoTipo->save($this->request->data)) {
				$this->Session->setFlash(__('The evento tipos recurso tipo has been saved'), 'fexito');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The evento tipos recurso tipo could not be saved. Please, try again.'), 'ferror');
			}
		}
		$eventoTipos = $this->EventoTiposRecursoTipo->EventoTipo->find('list');
		$recursoTipos = $this->EventoTiposRecursoTipo->RecursoTipo->find('list');
		$this->set(compact('eventoTipos', 'recursoTipos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->EventoTiposRecursoTipo->exists($id)) {
			throw new NotFoundException(__('Invalid evento tipos recurso tipo'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->EventoTiposRecursoTipo->save($this->request->data)) {
				$this->Session->setFlash(__('The evento tipos recurso tipo has been saved'), 'fexito');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The evento tipos recurso tipo could not be saved. Please, try again.'), 'ferror');
			}
		} else {
			$options = array('conditions' => array('EventoTiposRecursoTipo.' . $this->EventoTiposRecursoTipo->primaryKey => $id));
			$this->request->data = $this->EventoTiposRecursoTipo->find('first', $options);
		}
		$eventoTipos = $this->EventoTiposRecursoTipo->EventoTipo->find('list');
		$recursoTipos = $this->EventoTiposRecursoTipo->RecursoTipo->find('list');
		$this->set(compact('eventoTipos', 'recursoTipos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->EventoTiposRecursoTipo->id = $id;
		if (!$this->EventoTiposRecursoTipo->exists()) {
			throw new NotFoundException(__('Invalid evento tipos recurso tipo'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->EventoTiposRecursoTipo->delete()) {
			$this->Session->setFlash(__('Evento tipos recurso tipo deleted'), 'fexito');
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Evento tipos recurso tipo was not deleted'), 'ferror');
		return $this->redirect(array('action' => 'index'));
	}
}
