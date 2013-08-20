<?php
App::uses('AppController', 'Controller');
/**
 * Bitacoras Controller
 *
 * @property Bitacora $Bitacora
 */
class BitacorasController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Bitacora->recursive = 0;
		$this->set('bitacoras', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Bitacora->exists($id)) {
			throw new NotFoundException(__('Invalid bitacora'));
		}
		$options = array('conditions' => array('Bitacora.' . $this->Bitacora->primaryKey => $id));
		$this->set('bitacora', $this->Bitacora->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Bitacora->create();
			if ($this->Bitacora->save($this->request->data)) {
				$this->Session->setFlash(__('The bitacora has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bitacora could not be saved. Please, try again.'));
			}
		}
		$eventos = $this->Bitacora->Evento->find('list');
		$vehiculos = $this->Bitacora->Vehiculo->find('list');
		$this->set(compact('eventos', 'vehiculos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Bitacora->exists($id)) {
			throw new NotFoundException(__('Invalid bitacora'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Bitacora->save($this->request->data)) {
				$this->Session->setFlash(__('The bitacora has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bitacora could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Bitacora.' . $this->Bitacora->primaryKey => $id));
			$this->request->data = $this->Bitacora->find('first', $options);
		}
		$eventos = $this->Bitacora->Evento->find('list');
		$vehiculos = $this->Bitacora->Vehiculo->find('list');
		$this->set(compact('eventos', 'vehiculos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Bitacora->id = $id;
		if (!$this->Bitacora->exists()) {
			throw new NotFoundException(__('Invalid bitacora'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Bitacora->delete()) {
			$this->Session->setFlash(__('Bitacora deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Bitacora was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
