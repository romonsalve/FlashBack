<?php
App::uses('AppController', 'Controller');
/**
 * VehiculoTipos Controller
 *
 * @property VehiculoTipo $VehiculoTipo
 * @property PaginatorComponent $Paginator
 */
class VehiculoTiposController extends AppController {

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
		$this->VehiculoTipo->recursive = 0;
		$this->set('vehiculoTipos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->VehiculoTipo->exists($id)) {
			throw new NotFoundException(__('Invalid vehiculo tipo'));
		}
		$options = array('conditions' => array('VehiculoTipo.' . $this->VehiculoTipo->primaryKey => $id));
		$this->set('vehiculoTipo', $this->VehiculoTipo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->VehiculoTipo->create();
			if ($this->VehiculoTipo->save($this->request->data)) {
				$this->Session->setFlash(__('The vehiculo tipo has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The vehiculo tipo could not be saved. Please, try again.'));
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
		if (!$this->VehiculoTipo->exists($id)) {
			throw new NotFoundException(__('Invalid vehiculo tipo'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->VehiculoTipo->save($this->request->data)) {
				$this->Session->setFlash(__('The vehiculo tipo has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The vehiculo tipo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('VehiculoTipo.' . $this->VehiculoTipo->primaryKey => $id));
			$this->request->data = $this->VehiculoTipo->find('first', $options);
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
		$this->VehiculoTipo->id = $id;
		if (!$this->VehiculoTipo->exists()) {
			throw new NotFoundException(__('Invalid vehiculo tipo'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->VehiculoTipo->delete()) {
			$this->Session->setFlash(__('Vehiculo tipo deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Vehiculo tipo was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
}
