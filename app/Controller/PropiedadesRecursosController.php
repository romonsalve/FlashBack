<?php
App::uses('AppController', 'Controller');
/**
 * PropiedadesRecursos Controller
 *
 * @property PropiedadesRecurso $PropiedadesRecurso
 * @property PaginatorComponent $Paginator
 */
class PropiedadesRecursosController extends AppController {

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
	public function index($evento_id=null ) {
		$this->PropiedadesRecurso->recursive = 0;
		$this->set('propiedadesRecursos', $this->Paginator->paginate());

		if($evento_id != null){
			$this->paginate = array(
				'conditions' => array('PropiedadesRecurso.recurso_id' => $evento_id),
				'limit' => 20
			    );
			$this->set('propiedadesRecursos', $this->Paginator->paginate());
		}
		else{
			return $this->redirect(array('controller'=>'recursos', 'action' => 'index'));
		}
	}

	public function edit($id = null) {
		if (!$this->PropiedadesRecurso->exists($id)) {
			throw new NotFoundException(__('Invalid propiedades recurso'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PropiedadesRecurso->save($this->request->data)) {
				$this->Session->setFlash(__('The propiedades recurso has been saved'), 'fexito');
				$temp = $this->PropiedadesRecurso->findById($this->PropiedadesRecurso->id);
				return $this->redirect(array('action' => 'index/'.$temp['PropiedadesRecurso']['recurso_id'] ));
			} else {
				$this->Session->setFlash(__('The propiedades recurso could not be saved. Please, try again.'), 'ferror');
			}
		} else {
			$options = array('conditions' => array('PropiedadesRecurso.' . $this->PropiedadesRecurso->primaryKey => $id));
			$this->request->data = $this->PropiedadesRecurso->find('first', $options);
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
		$this->PropiedadesRecurso->id = $id;
		if (!$this->PropiedadesRecurso->exists()) {
			throw new NotFoundException(__('Invalid propiedades recurso'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PropiedadesRecurso->delete()) {
			$this->Session->setFlash(__('Propiedades recurso deleted'), 'fexito');
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Propiedades recurso was not deleted'), 'ferror');
		return $this->redirect(array('action' => 'index'));
	}
}
