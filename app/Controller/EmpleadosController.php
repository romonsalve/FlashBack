<?php
App::uses('AppController', 'Controller');
/**
 * Empleados Controller
 *
 * @property Empleado $Empleado
 */
class EmpleadosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Empleado->recursive = 0;
		$this->set('empleados', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Empleado->exists($id)) {
			throw new NotFoundException(__('Invalid empleado'));
		}
		$options = array('conditions' => array('Empleado.' . $this->Empleado->primaryKey => $id));
		$this->set('empleado', $this->Empleado->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Empleado->create();
			if ($this->Empleado->save($this->request->data)) {
				$this->Session->setFlash(__('The empleado has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The empleado could not be saved. Please, try again.'));
			}
		}
		$empleadoTipos = $this->Empleado->EmpleadoTipo->find('list');
		$eventos = $this->Empleado->Evento->find('list');
		$this->set(compact('empleadoTipos', 'eventos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Empleado->exists($id)) {
			throw new NotFoundException(__('Invalid empleado'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Empleado->save($this->request->data)) {
				$this->Session->setFlash(__('The empleado has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The empleado could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Empleado.' . $this->Empleado->primaryKey => $id));
			$this->request->data = $this->Empleado->find('first', $options);
		}
		$empleadoTipos = $this->Empleado->EmpleadoTipo->find('list');
		$eventos = $this->Empleado->Evento->find('list');
		$this->set(compact('empleadoTipos', 'eventos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Empleado->id = $id;
		if (!$this->Empleado->exists()) {
			throw new NotFoundException(__('Invalid empleado'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Empleado->delete()) {
			$this->Session->setFlash(__('Empleado deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Empleado was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
