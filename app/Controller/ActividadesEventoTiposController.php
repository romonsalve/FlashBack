<?php
App::uses('AppController', 'Controller');
/**
 * ActividadesEventoTipos Controller
 *
 * @property ActividadesEventoTipo $ActividadesEventoTipo
 * @property PaginatorComponent $Paginator
 */
class ActividadesEventoTiposController extends AppController {

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
		$this->ActividadesEventoTipo->recursive = 0;
		$this->set('actividadesEventoTipos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ActividadesEventoTipo->exists($id)) {
			throw new NotFoundException(__('Invalid actividades evento tipo'));
		}
		$options = array('conditions' => array('ActividadesEventoTipo.' . $this->ActividadesEventoTipo->primaryKey => $id));
		$this->set('actividadesEventoTipo', $this->ActividadesEventoTipo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ActividadesEventoTipo->create();
			if ($this->ActividadesEventoTipo->save($this->request->data)) {
				$this->Session->setFlash(__('The actividades evento tipo has been saved'), 'fexito');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The actividades evento tipo could not be saved. Please, try again.'), 'ferror');
			}
		}
		$eventoTipos = $this->ActividadesEventoTipo->EventoTipo->find('list');
		$actividades = $this->ActividadesEventoTipo->Actividade->find('list');
		$this->set(compact('eventoTipos', 'actividades'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ActividadesEventoTipo->exists($id)) {
			throw new NotFoundException(__('Invalid actividades evento tipo'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ActividadesEventoTipo->save($this->request->data)) {
				$this->Session->setFlash(__('The actividades evento tipo has been saved'), 'fexito');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The actividades evento tipo could not be saved. Please, try again.'), 'ferror');
			}
		} else {
			$options = array('conditions' => array('ActividadesEventoTipo.' . $this->ActividadesEventoTipo->primaryKey => $id));
			$this->request->data = $this->ActividadesEventoTipo->find('first', $options);
		}
		$eventoTipos = $this->ActividadesEventoTipo->EventoTipo->find('list');
		$actividades = $this->ActividadesEventoTipo->Actividade->find('list');
		$this->set(compact('eventoTipos', 'actividades'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ActividadesEventoTipo->id = $id;
		if (!$this->ActividadesEventoTipo->exists()) {
			throw new NotFoundException(__('Invalid actividades evento tipo'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ActividadesEventoTipo->delete()) {
			$this->Session->setFlash(__('Actividades evento tipo deleted'), 'fexito');
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Actividades evento tipo was not deleted'), 'ferror');
		return $this->redirect(array('action' => 'index'));
	}
}
