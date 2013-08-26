<?php
App::uses('AppController', 'Controller');
/**
 * EventosRecursos Controller
 *
 * @property EventosRecurso $EventosRecurso
 * @property PaginatorComponent $Paginator
 */
class EventosRecursosController extends AppController {

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
	public function index($evento_id=null, $recurso_id=null) {
		$this->EventosRecurso->recursive = 0;
		if($evento_id != null){
			$this->paginate = array(
				'conditions' => array('EventosRecurso.evento_id' => $evento_id),
				'limit' => 20
			    );
			$this->set('eventosRecursos', $this->Paginator->paginate() );
		}
		else{
			return $this->redirect(array('controller'=>'eventos/', 'action' => 'index'));
		}
	}
	public function edit($id = null) {
		if (!$this->EventosRecurso->exists($id)) {
			throw new NotFoundException(__('Invalid eventos recurso'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->EventosRecurso->save($this->request->data)) {
				$this->Session->setFlash(__('The eventos recurso has been saved'), 'fexito');
				$this->EventosRecurso->recursive = -1;
				$temp = $this->EventosRecurso->findById($this->EventosRecurso->id);
				return $this->redirect(array('action' => 'index/'.$temp['EventosRecurso']['evento_id'] ));
			} else {
				$this->Session->setFlash(__('The eventos recurso could not be saved. Please, try again.'), 'ferror');
			}
		} else {
			$options = array('conditions' => array('EventosRecurso.' . $this->EventosRecurso->primaryKey => $id));
			$this->request->data = $this->EventosRecurso->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null,$id_redirec = null) {
		$this->EventosRecurso->id = $id;
		if (!$this->EventosRecurso->exists()) {
			throw new NotFoundException(__('Invalid eventos recurso'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->EventosRecurso->delete()) {
			$this->Session->setFlash(__('Eventos recurso deleted'), 'fexito');
			return $this->redirect(array('action' => 'index/'.$id_redirec));
		}
		$this->Session->setFlash(__('Eventos recurso was not deleted'), 'ferror');
		return $this->redirect(array('action' => 'index'));
	}
}
