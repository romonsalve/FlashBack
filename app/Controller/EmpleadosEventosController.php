<?php
App::uses('AppController', 'Controller');
/**
 * EmpleadosEventos Controller
 *
 * @property EmpleadosEvento $EmpleadosEvento
 * @property PaginatorComponent $Paginator
 */
class EmpleadosEventosController extends AppController {

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
		$this->EmpleadosEvento->recursive = 0;
		$this->set('empleadosEventos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->EmpleadosEvento->exists($id)) {
			throw new NotFoundException(__('Invalid empleados evento'));
		}
		$options = array('conditions' => array('EmpleadosEvento.' . $this->EmpleadosEvento->primaryKey => $id));
		$this->set('empleadosEvento', $this->EmpleadosEvento->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->EmpleadosEvento->create();
			if ($this->EmpleadosEvento->save($this->request->data)) {
				$this->Session->setFlash(__('The empleados evento has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The empleados evento could not be saved. Please, try again.'));
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
		if (!$this->EmpleadosEvento->exists($id)) {
			throw new NotFoundException(__('Invalid empleados evento'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->EmpleadosEvento->save($this->request->data)) {
				$this->Session->setFlash(__('The empleados evento has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The empleados evento could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('EmpleadosEvento.' . $this->EmpleadosEvento->primaryKey => $id));
			$this->request->data = $this->EmpleadosEvento->find('first', $options);
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
		$this->EmpleadosEvento->id = $id;
		if (!$this->EmpleadosEvento->exists()) {
			throw new NotFoundException(__('Invalid empleados evento'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->EmpleadosEvento->delete()) {
			$this->Session->setFlash(__('Empleados evento deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Empleados evento was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
}
