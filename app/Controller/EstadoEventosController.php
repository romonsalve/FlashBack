<?php
App::uses('AppController', 'Controller');
/**
 * EstadoEventos Controller
 *
 * @property EstadoEvento $EstadoEvento
 * @property PaginatorComponent $Paginator
 */
class EstadoEventosController extends AppController {

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
		$this->EstadoEvento->recursive = 0;
		$this->set('estadoEventos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->EstadoEvento->exists($id)) {
			throw new NotFoundException(__('Invalid estado evento'));
		}
		$options = array('conditions' => array('EstadoEvento.' . $this->EstadoEvento->primaryKey => $id));
		$this->set('estadoEvento', $this->EstadoEvento->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->EstadoEvento->create();
			if ($this->EstadoEvento->save($this->request->data)) {
				$this->Session->setFlash(__('The estado evento has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The estado evento could not be saved. Please, try again.'));
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
		if (!$this->EstadoEvento->exists($id)) {
			throw new NotFoundException(__('Invalid estado evento'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->EstadoEvento->save($this->request->data)) {
				$this->Session->setFlash(__('The estado evento has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The estado evento could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('EstadoEvento.' . $this->EstadoEvento->primaryKey => $id));
			$this->request->data = $this->EstadoEvento->find('first', $options);
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
		$this->EstadoEvento->id = $id;
		if (!$this->EstadoEvento->exists()) {
			throw new NotFoundException(__('Invalid estado evento'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->EstadoEvento->delete()) {
			$this->Session->setFlash(__('Estado evento deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Estado evento was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
}
