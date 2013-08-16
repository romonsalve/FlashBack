<?php
App::uses('AppController', 'Controller');
/**
 * Vehiculos Controller
 *
 * @property Vehiculo $Vehiculo
 */
class VehiculosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Vehiculo->recursive = 0;
		$this->set('vehiculos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Vehiculo->exists($id)) {
			throw new NotFoundException(__('Invalid vehiculo'));
		}
		$options = array('conditions' => array('Vehiculo.' . $this->Vehiculo->primaryKey => $id));
		$this->set('vehiculo', $this->Vehiculo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Vehiculo->create();
			if ($this->Vehiculo->save($this->request->data)) {
				$this->Session->setFlash(__('The vehiculo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The vehiculo could not be saved. Please, try again.'));
			}
		}
		$vehiculoTipos = $this->Vehiculo->VehiculoTipo->find('list');
		$this->set(compact('vehiculoTipos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Vehiculo->exists($id)) {
			throw new NotFoundException(__('Invalid vehiculo'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Vehiculo->save($this->request->data)) {
				$this->Session->setFlash(__('The vehiculo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The vehiculo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Vehiculo.' . $this->Vehiculo->primaryKey => $id));
			$this->request->data = $this->Vehiculo->find('first', $options);
		}
		$vehiculoTipos = $this->Vehiculo->VehiculoTipo->find('list');
		$this->set(compact('vehiculoTipos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Vehiculo->id = $id;
		if (!$this->Vehiculo->exists()) {
			throw new NotFoundException(__('Invalid vehiculo'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Vehiculo->delete()) {
			$this->Session->setFlash(__('Vehiculo deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Vehiculo was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
