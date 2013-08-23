<?php
App::uses('AppController', 'Controller');
/**
 * ActividadesSolicitudCotizaciones Controller
 *
 * @property ActividadesSolicitudCotizacione $ActividadesSolicitudCotizacione
 * @property PaginatorComponent $Paginator
 */
class ActividadesSolicitudCotizacionesController extends AppController {

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
		$this->ActividadesSolicitudCotizacione->recursive = 0;
		$this->set('actividadesSolicitudCotizaciones', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ActividadesSolicitudCotizacione->exists($id)) {
			throw new NotFoundException(__('Invalid actividades solicitud cotizacione'));
		}
		$options = array('conditions' => array('ActividadesSolicitudCotizacione.' . $this->ActividadesSolicitudCotizacione->primaryKey => $id));
		$this->set('actividadesSolicitudCotizacione', $this->ActividadesSolicitudCotizacione->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ActividadesSolicitudCotizacione->create();
			if ($this->ActividadesSolicitudCotizacione->save($this->request->data)) {
				$this->Session->setFlash(__('The actividades solicitud cotizacione has been saved'), 'fexito');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The actividades solicitud cotizacione could not be saved. Please, try again.'), 'ferror');
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
		if (!$this->ActividadesSolicitudCotizacione->exists($id)) {
			throw new NotFoundException(__('Invalid actividades solicitud cotizacione'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ActividadesSolicitudCotizacione->save($this->request->data)) {
				$this->Session->setFlash(__('The actividades solicitud cotizacione has been saved'), 'fexito');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The actividades solicitud cotizacione could not be saved. Please, try again.'), 'ferror');
			}
		} else {
			$options = array('conditions' => array('ActividadesSolicitudCotizacione.' . $this->ActividadesSolicitudCotizacione->primaryKey => $id));
			$this->request->data = $this->ActividadesSolicitudCotizacione->find('first', $options);
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
		$this->ActividadesSolicitudCotizacione->id = $id;
		if (!$this->ActividadesSolicitudCotizacione->exists()) {
			throw new NotFoundException(__('Invalid actividades solicitud cotizacione'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ActividadesSolicitudCotizacione->delete()) {
			$this->Session->setFlash(__('Actividades solicitud cotizacione deleted'), 'fexito');
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Actividades solicitud cotizacione was not deleted'), 'ferror');
		return $this->redirect(array('action' => 'index'));
	}
}
