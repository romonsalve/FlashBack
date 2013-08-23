<?php
App::uses('AppController', 'Controller');
/**
 * Recintos Controller
 *
 * @property Recinto $Recinto
 * @property PaginatorComponent $Paginator
 */
class RecintosController extends AppController {

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
		$this->Recinto->recursive = 0;
		$this->set('recintos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Recinto->exists($id)) {
			throw new NotFoundException(__('Invalid recinto'));
		}
		$options = array('conditions' => array('Recinto.' . $this->Recinto->primaryKey => $id));
		$this->set('recinto', $this->Recinto->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Recinto->create();
			if ($this->Recinto->save($this->request->data)) {
				$this->Session->setFlash(__('The recinto has been saved'), 'fexito');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The recinto could not be saved. Please, try again.'), 'ferror');
			}
		}
		$recintoTipos = $this->Recinto->RecintoTipo->find('list');
		$this->set(compact('recintoTipos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Recinto->exists($id)) {
			throw new NotFoundException(__('Invalid recinto'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Recinto->save($this->request->data)) {
				$this->Session->setFlash(__('The recinto has been saved'), 'fexito');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The recinto could not be saved. Please, try again.'), 'ferror');
			}
		} else {
			$options = array('conditions' => array('Recinto.' . $this->Recinto->primaryKey => $id));
			$this->request->data = $this->Recinto->find('first', $options);
		}
		$recintoTipos = $this->Recinto->RecintoTipo->find('list');
		$this->set(compact('recintoTipos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Recinto->id = $id;
		if (!$this->Recinto->exists()) {
			throw new NotFoundException(__('Invalid recinto'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Recinto->delete()) {
			$this->Session->setFlash(__('Recinto deleted'), 'fexito');
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Recinto was not deleted'), 'ferror');
		return $this->redirect(array('action' => 'index'));
	}
}
