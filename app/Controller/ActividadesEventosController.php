<?php
App::uses('AppController', 'Controller');
/**
 * ActividadesEventos Controller
 *
 * @property ActividadesEvento $ActividadesEvento
 */
class ActividadesEventosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ActividadesEvento->recursive = 0;
		$this->set('actividadesEventos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ActividadesEvento->exists($id)) {
			throw new NotFoundException(__('Invalid actividades evento'));
		}
		$options = array('conditions' => array('ActividadesEvento.' . $this->ActividadesEvento->primaryKey => $id));
		$this->set('actividadesEvento', $this->ActividadesEvento->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ActividadesEvento->create();
			if ($this->ActividadesEvento->save($this->request->data)) {
				$this->Session->setFlash(__('The actividades evento has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The actividades evento could not be saved. Please, try again.'));
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
		if (!$this->ActividadesEvento->exists($id)) {
			throw new NotFoundException(__('Invalid actividades evento'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ActividadesEvento->save($this->request->data)) {
				$this->Session->setFlash(__('The actividades evento has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The actividades evento could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ActividadesEvento.' . $this->ActividadesEvento->primaryKey => $id));
			$this->request->data = $this->ActividadesEvento->find('first', $options);
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
		$this->ActividadesEvento->id = $id;
		if (!$this->ActividadesEvento->exists()) {
			throw new NotFoundException(__('Invalid actividades evento'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ActividadesEvento->delete()) {
			$this->Session->setFlash(__('Actividades evento deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Actividades evento was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
