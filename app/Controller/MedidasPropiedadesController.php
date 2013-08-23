<?php
App::uses('AppController', 'Controller');
/**
 * MedidasPropiedades Controller
 *
 * @property MedidasPropiedade $MedidasPropiedade
 * @property PaginatorComponent $Paginator
 */
class MedidasPropiedadesController extends AppController {

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
		$this->MedidasPropiedade->recursive = 0;
		$this->set('medidasPropiedades', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->MedidasPropiedade->exists($id)) {
			throw new NotFoundException(__('Invalid medidas propiedade'));
		}
		$options = array('conditions' => array('MedidasPropiedade.' . $this->MedidasPropiedade->primaryKey => $id));
		$this->set('medidasPropiedade', $this->MedidasPropiedade->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->MedidasPropiedade->create();
			if ($this->MedidasPropiedade->save($this->request->data)) {
				$this->Session->setFlash(__('The medidas propiedade has been saved'), 'fexito');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The medidas propiedade could not be saved. Please, try again.'), 'ferror');
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
		if (!$this->MedidasPropiedade->exists($id)) {
			throw new NotFoundException(__('Invalid medidas propiedade'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->MedidasPropiedade->save($this->request->data)) {
				$this->Session->setFlash(__('The medidas propiedade has been saved'), 'fexito');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The medidas propiedade could not be saved. Please, try again.'), 'ferror');
			}
		} else {
			$options = array('conditions' => array('MedidasPropiedade.' . $this->MedidasPropiedade->primaryKey => $id));
			$this->request->data = $this->MedidasPropiedade->find('first', $options);
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
		$this->MedidasPropiedade->id = $id;
		if (!$this->MedidasPropiedade->exists()) {
			throw new NotFoundException(__('Invalid medidas propiedade'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->MedidasPropiedade->delete()) {
			$this->Session->setFlash(__('Medidas propiedade deleted'), 'fexito');
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Medidas propiedade was not deleted'), 'ferror');
		return $this->redirect(array('action' => 'index'));
	}
}
